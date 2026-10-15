# Avenora - Database Plan

## Overview
Avenora will utilize MySQL managed locally via phpMyAdmin and XAMPP. Database interactions will be conducted through PHP Data Objects (PDO) with prepared statements to guarantee security and performance.

## Planned Future Entities

### 1. Destinations (`destinations`)
Planned storage for travel locations, regions, and attractions.
- Core attributes: Unique identifier, name, slug, description, region/country, thumbnail/hero image URL, popularity rating, active status, timestamps.

### 2. Travel Packages (`packages`)
Planned storage for curated travel packages and itineraries.
- Core attributes: Unique identifier, title, slug, destination reference (foreign key), duration (days/nights), price, package tier/category, highlights/inclusions, availability status, timestamps.

### 3. Contact Messages (`contact_messages`)
Planned storage for customer inquiries, feedback, and tour consultation requests.
- Core attributes: Unique identifier, sender full name, email address, phone number, subject, message body, status (new, reviewed, archived), submission timestamp.

## Migration & Seeding Strategy
- `database/schema.sql`: Authoritative DDL schema definition for initial database setup in phpMyAdmin or CLI.
- `database/migrations/`: Future incremental database versioning scripts.
- `database/seeders/`: Future sample data generators for destinations and tour packages for development testing.

## Connection Guidelines
- Driver: `mysql` (PDO)
- Charset: `utf8mb4` with collation `utf8mb4_unicode_ci`
- Error Mode: `PDO::ERRMODE_EXCEPTION`
- Fetch Mode: `PDO::FETCH_ASSOC`
- Emulated Prepares: `false`
