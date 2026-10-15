# Avenora - UI/UX Design System Plan

## Overview
Avenora is envisioned as an inspiring, trustworthy, and modern tourism web platform. The UI/UX architecture emphasizes visual clarity, responsive performance, smooth navigation, and reusable component tokens without external CSS frameworks.

## Core Design Principles
- **Visual Appeal & Inspiration:** High-impact destination imagery, curated color palette reflecting nature, luxury, and adventure.
- **Content Hierarchy:** Clear typography scale guiding visitors effortlessly from highlights to booking inquiries.
- **Accessibility (a11y):** WCAG AA compliance, semantic HTML5 landmarks, clear contrast ratios, and keyboard navigability.
- **Mobile-First Responsiveness:** Seamless browsing experience across mobile handsets, tablets, and desktop displays.

## Design Token Structure (`public/assets/css/variables.css`)
- **Color Palette:**
  - Primary / Accent colors (deep ocean blues, warm sunlight/amber, natural greens).
  - Neutrals (off-whites, cool slates, deep charcoal for typography).
  - Feedback states (success, warning, error, info).
- **Typography Scale:**
  - Distinct modern font families for headings and body.
  - Fluid font sizes, line heights, and letter spacing tokens.
- **Spacing & Layout:**
  - Consistent 4px/8px modular spacing grid.
  - Breakpoints for mobile (`<640px`), tablet (`640px-1024px`), desktop (`>1024px`), and ultra-wide.
- **Elevation & Corners:**
  - Subtle box-shadow tokens for depth.
  - Standardized border radii for cards, buttons, badges, and modals.

## Component Directory
- `buttons.css`: Primary, secondary, outline, and icon button variants.
- `cards.css`: Destination showcase cards and travel package pricing cards.
- `navbar.css`: Sticky responsive header with desktop menu and mobile sliding navigation.
- `footer.css`: Comprehensive footer with brand summary, quick links, and contact details.
