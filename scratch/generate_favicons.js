const fs = require('fs');
const path = require('path');
const zlib = require('zlib');

// 1. Create crisp SVG favicon
const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
  <defs>
    <linearGradient id="bgGrad" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#0a192f"/>
      <stop offset="100%" stop-color="#031126"/>
    </linearGradient>
    <linearGradient id="blueGrad" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#38bdf8"/>
      <stop offset="100%" stop-color="#0090ea"/>
    </linearGradient>
    <filter id="shadow" x="-10%" y="-10%" width="120%" height="120%">
      <feDropShadow dx="0" dy="1.5" stdDeviation="1.5" flood-color="#000000" flood-opacity="0.35"/>
    </filter>
  </defs>

  <!-- App / Tab Icon Base -->
  <rect x="2" y="2" width="60" height="60" rx="15" fill="url(#bgGrad)" stroke="#1e3a5f" stroke-width="2"/>
  
  <!-- Signature Top Red Accent Bar -->
  <rect x="12" y="13" width="16" height="4" rx="2" fill="#FF4B4B"/>
  
  <!-- "The Lankan" / Nomad Accent Dots -->
  <circle cx="34" cy="15" r="2" fill="#0090ea"/>
  <circle cx="41" cy="15" r="2" fill="#38bdf8"/>
  <circle cx="48" cy="15" r="2" fill="#ffffff" fill-opacity="0.8"/>

  <!-- Bold, Ultra-Crisp Nomad 'N' Mark (Perfect readability at 16x16 and 32x32) -->
  <path d="M16 48 V23 H24.5 L39.5 41 V23 H48 V48 H39.5 L24.5 30 V48 Z" fill="#ffffff" filter="url(#shadow)"/>
  
  <!-- Subtle Cyan Energy Slash on Diagonal -->
  <path d="M26.5 32.5 L39.5 48 H43.5 L29.5 30 Z" fill="url(#blueGrad)" fill-opacity="0.9"/>
</svg>`;

const logoDir = path.join(__dirname, '..', 'public', 'assets', 'images', 'logo');
const publicDir = path.join(__dirname, '..', 'public');

if (!fs.existsSync(logoDir)) {
  fs.mkdirSync(logoDir, { recursive: true });
}

fs.writeFileSync(path.join(logoDir, 'favicon.svg'), svgContent, 'utf8');
console.log('Saved favicon.svg');

// PNG Encoder in Pure Node.js
function encodePNG(width, height, getPixel) {
  const rowSize = 1 + width * 4;
  const rawData = Buffer.alloc(height * rowSize);
  
  for (let y = 0; y < height; y++) {
    const rowOffset = y * rowSize;
    rawData[rowOffset] = 0; // Filter type 0 (None)
    for (let x = 0; x < width; x++) {
      const [r, g, b, a] = getPixel(x, y, width, height);
      const pxOffset = rowOffset + 1 + x * 4;
      rawData[pxOffset] = r;
      rawData[pxOffset + 1] = g;
      rawData[pxOffset + 2] = b;
      rawData[pxOffset + 3] = a;
    }
  }

  const deflated = zlib.deflateSync(rawData);

  function createChunk(type, data) {
    const len = data.length;
    const buf = Buffer.alloc(8 + len + 4);
    buf.writeUInt32BE(len, 0);
    buf.write(type, 4, 4, 'ascii');
    data.copy(buf, 8);
    const crc = zlib.crc32(buf.subarray(4, 8 + len));
    buf.writeUInt32BE(crc, 8 + len);
    return buf;
  }

  const signature = Buffer.from([0x89, 0x50, 0x4e, 0x47, 0x0d, 0x0a, 0x1a, 0x0a]);

  // IHDR
  const ihdrData = Buffer.alloc(13);
  ihdrData.writeUInt32BE(width, 0);
  ihdrData.writeUInt32BE(height, 4);
  ihdrData[8] = 8; // 8-bit depth
  ihdrData[9] = 6; // RGBA
  ihdrData[10] = 0; // Deflate
  ihdrData[11] = 0; // Filter 0
  ihdrData[12] = 0; // No interlace
  const ihdrChunk = createChunk('IHDR', ihdrData);

  // IDAT
  const idatChunk = createChunk('IDAT', deflated);

  // IEND
  const iendChunk = createChunk('IEND', Buffer.alloc(0));

  return Buffer.concat([signature, ihdrChunk, idatChunk, iendChunk]);
}

// Generate pixels for Nomad Title Logo / Favicon
function renderNomadIcon(x, y, w, h) {
  // Normalize coordinates 0..1
  const nx = x / (w - 1);
  const ny = y / (h - 1);

  // Rounded rectangle check for badge
  const radius = 0.22;
  const cx = Math.min(Math.max(nx, radius), 1 - radius);
  const cy = Math.min(Math.max(ny, radius), 1 - radius);
  const dist = Math.hypot(nx - cx, ny - cy);
  
  if (dist > radius) {
    return [0, 0, 0, 0]; // Transparent outside rounded corner
  }

  // Border check
  const borderDist = radius - dist;
  if (borderDist < 0.035) {
    return [30, 58, 95, 255]; // Border #1e3a5f
  }

  // Background deep navy
  let r = 3 + Math.floor(ny * 7);
  let g = 17 + Math.floor(ny * 8);
  let b = 38 + Math.floor(ny * 9);

  // Top Coral Accent Bar (nx: 0.18 .. 0.45, ny: 0.18 .. 0.25)
  if (nx >= 0.18 && nx <= 0.46 && ny >= 0.18 && ny <= 0.25) {
    return [255, 75, 75, 255]; // #FF4B4B
  }

  // Accent Dot (nx: 0.70 .. 0.78, ny: 0.18 .. 0.25)
  const dotDist = Math.hypot(nx - 0.74, ny - 0.215);
  if (dotDist <= 0.04) {
    return [0, 144, 234, 255]; // #0090EA
  }

  // Bold 'N' Mark (nomad)
  // Left vertical column: nx: 0.22 .. 0.36, ny: 0.35 .. 0.78
  // Right vertical column: nx: 0.64 .. 0.78, ny: 0.35 .. 0.78
  // Diagonal: connecting top of left col to bottom of right col
  const inLeftCol = (nx >= 0.22 && nx <= 0.36 && ny >= 0.35 && ny <= 0.78);
  const inRightCol = (nx >= 0.64 && nx <= 0.78 && ny >= 0.35 && ny <= 0.78);
  
  // Diagonal line equation: from (0.28, 0.35) to (0.72, 0.78)
  // slope m = (0.78 - 0.35) / (0.72 - 0.28) = 0.43 / 0.44 ~= 0.977
  const diagX = 0.28 + ((ny - 0.35) / 0.43) * 0.44;
  const inDiag = (ny >= 0.35 && ny <= 0.78 && Math.abs(nx - diagX) <= 0.10);

  if (inLeftCol || inRightCol || inDiag) {
    // If on the lower part of diagonal, give vibrant cyan-blue accent
    if (inDiag && ny >= 0.52 && nx >= 0.44) {
      return [0, 144, 234, 255]; // #0090EA
    }
    return [255, 255, 255, 255]; // Crisp White
  }

  return [r, g, b, 255];
}

// Generate PNGs
const png32 = encodePNG(32, 32, renderNomadIcon);
fs.writeFileSync(path.join(logoDir, 'favicon-32x32.png'), png32);
console.log('Saved favicon-32x32.png (' + png32.length + ' bytes)');

const png16 = encodePNG(16, 16, renderNomadIcon);
fs.writeFileSync(path.join(logoDir, 'favicon-16x16.png'), png16);
console.log('Saved favicon-16x16.png (' + png16.length + ' bytes)');

const png180 = encodePNG(180, 180, renderNomadIcon);
fs.writeFileSync(path.join(logoDir, 'apple-touch-icon.png'), png180);
console.log('Saved apple-touch-icon.png (' + png180.length + ' bytes)');

// Simple ICO file (wrapping 32x32 and 16x16 PNG)
function createICO(images) {
  const count = images.length;
  const header = Buffer.alloc(6);
  header.writeUInt16LE(0, 0); // Reserved
  header.writeUInt16LE(1, 2); // Type 1 = ICO
  header.writeUInt16LE(count, 4);

  const dirEntries = [];
  let currentOffset = 6 + count * 16;

  for (const img of images) {
    const entry = Buffer.alloc(16);
    entry[0] = img.width >= 256 ? 0 : img.width;
    entry[1] = img.height >= 256 ? 0 : img.height;
    entry[2] = 0; // Palette count
    entry[3] = 0; // Reserved
    entry.writeUInt16LE(1, 4); // Color planes
    entry.writeUInt16LE(32, 6); // Bits per pixel
    entry.writeUInt32LE(img.data.length, 8); // Size
    entry.writeUInt32LE(currentOffset, 12); // Offset
    dirEntries.push(entry);
    currentOffset += img.data.length;
  }

  return Buffer.concat([header, ...dirEntries, ...images.map(img => img.data)]);
}

const icoData = createICO([
  { width: 32, height: 32, data: png32 },
  { width: 16, height: 16, data: png16 }
]);

fs.writeFileSync(path.join(publicDir, 'favicon.ico'), icoData);
fs.writeFileSync(path.join(logoDir, 'favicon.ico'), icoData);
console.log('Saved favicon.ico (' + icoData.length + ' bytes)');

