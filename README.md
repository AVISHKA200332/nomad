# Avenora - Tourism and Travel Web Platform

## 1. Project Overview
**Avenora** is a modern tourism and travel web platform designed to connect travelers with extraordinary destinations, curated travel packages, and responsive travel inquiry services. The application emphasizes clean software architecture, high maintainability, future database scalability, and intuitive visitor experiences.

---

## 2. Technology Stack
- **Backend Language:** PHP 8+
- **Architecture Pattern:** Lightweight Model-View-Controller (MVC)
- **Database Engine:** MySQL (administered via phpMyAdmin)
- **Web Server:** Apache (via XAMPP)
- **Frontend Stack:** HTML5 (semantic markup), CSS3 (modular, custom design tokens), Vanilla JavaScript (modular ES6+)
- **Dependency Management:** Zero external CSS/JS framework dependencies in initial phase

---

## 3. Project Directory Structure

```text
avenora/
│
├── app/
│   ├── Config/
│   │   ├── app.php
│   │   └── database.php
│   │
│   ├── Core/
│   │   ├── Router.php
│   │   ├── Controller.php
│   │   └── Database.php
│   │
│   ├── Controllers/
│   │   ├── HomeController.php
│   │   ├── DestinationController.php
│   │   ├── PackageController.php
│   │   ├── AboutController.php
│   │   └── ContactController.php
│   │
│   ├── Models/
│   │   ├── Destination.php
│   │   ├── Package.php
│   │   └── ContactMessage.php
│   │
│   ├── Services/
│   │   └── .gitkeep
│   │
│   ├── Validators/
│   │   └── .gitkeep
│   │
│   └── Views/
│       ├── layouts/
│       │   └── main.php
│       │
│       ├── partials/
│       │   ├── head.php
│       │   ├── header.php
│       │   ├── navbar.php
│       │   ├── footer.php
│       │   └── scripts.php
│       │
│       ├── components/
│       │   ├── destination-card.php
│       │   ├── package-card.php
│       │   └── breadcrumb.php
│       │
│       └── pages/
│           ├── home.php
│           ├── destination.php
│           ├── package.php
│           ├── about.php
│           └── contact.php
│
├── bootstrap/
│   └── app.php
│
├── public/
│   ├── index.php
│   ├── .htaccess
│   │
│   └── assets/
│       ├── css/
│       │   ├── variables.css
│       │   ├── reset.css
│       │   ├── global.css
│       │   ├── layout.css
│       │   ├── responsive.css
│       │   │
│       │   ├── components/
│       │   │   ├── navbar.css
│       │   │   ├── footer.css
│       │   │   ├── buttons.css
│       │   │   └── cards.css
│       │   │
│       │   └── pages/
│       │       ├── home.css
│       │       ├── destination.css
│       │       ├── package.css
│       │       ├── about.css
│       │       └── contact.css
│       │
│       ├── js/
│       │   ├── main.js
│       │   ├── navigation.js
│       │   └── modules/
│       │       ├── destinations.js
│       │       └── packages.js
│       │
│       ├── images/
│       │   ├── branding/
│       │   ├── destinations/
│       │   ├── packages/
│       │   ├── banners/
│       │   └── icons/
│       │
│       └── fonts/
│
├── routes/
│   └── web.php
│
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── schema.sql
│
├── storage/
│   ├── logs/
│   ├── cache/
│   └── uploads/
│
├── tests/
│   ├── Unit/
│   └── Integration/
│
├── docs/
│   ├── architecture.md
│   ├── database-plan.md
│   ├── design-system.md
│   └── pages.md
│
├── .env.example
├── .gitignore
└── README.md
```

---

## 4. Responsibilities of Main Directories

- **`app/Config/`**: Central application and database configuration files.
- **`app/Core/`**: Core framework abstractions (Router, Base Controller, Database PDO wrapper).
- **`app/Controllers/`**: HTTP controllers coordinating application flow and view presentation.
- **`app/Models/`**: Domain entities and data access definitions (Destinations, Packages, Contact Messages).
- **`app/Services/`**: Business logic isolated from controller and database layers.
- **`app/Validators/`**: Input validation and data sanitization logic.
- **`app/Views/`**: PHP view templates, separated into layouts, partials, reusable components, and individual pages.
- **`bootstrap/`**: Application bootstrapping, environment initialization, and service registration.
- **`public/`**: Web server public root; contains the front controller (`index.php`), `.htaccess`, and static assets.
- **`public/assets/`**: Static CSS styles, JavaScript modules, fonts, and image directories.
- **`routes/`**: Application web route definitions.
- **`database/`**: SQL schema definitions, migrations, and seed scripts.
- **`storage/`**: Internal runtime storage for application logs, cache, and user uploads.
- **`tests/`**: Automated unit and integration test directories.
- **`docs/`**: Project documentation, architectural guides, and database plans.

---

## 5. Intended XAMPP Installation Location
The project is located in the standard XAMPP web server directory:
```text
C:\xampp\htdocs\avenora\
```
*(or your custom XAMPP installation directory)*

---

## 6. Intended Future Local Development URL
The application uses `public/` as its web document root. During local development, the intended URL is:
```text
http://localhost/avenora/public/
```

Planned future primary routes:
- `http://localhost/avenora/public/` — Home Page
- `http://localhost/avenora/public/destinations` — Destinations Page
- `http://localhost/avenora/public/packages` — Packages Page
- `http://localhost/avenora/public/about` — About Page
- `http://localhost/avenora/public/contact` — Contact Page

---

## 7. Planned MySQL Database Configuration
The local environment will connect to MySQL via PDO using parameters defined in `.env`:
```ini
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=avenora
DB_USER=root
DB_PASSWORD=
```
Database schema will be managed via `database/schema.sql` and phpMyAdmin.

---

## 8. Basic Setup Prerequisites
1. **XAMPP** with PHP 8.0 or newer and MySQL.
2. Apache `mod_rewrite` enabled for clean URL routing.
3. Web server DocumentRoot or alias pointing to the project.
4. Copy `.env.example` to `.env` to configure local environment variables.

---

## 9. Current Project Status: Phase 01 — Structure Only
- **Status:** **PHASE 01 COMPLETED**
- Directory hierarchy, placeholder files, `.gitkeep` placeholders, and documentation structures have been established.
- Architectural boundaries and conventions have been established.

---

## 10. Features Intentionally Not Implemented Yet
As strictly scoped in Phase 01, the following features are deliberately deferred to future development phases:
- Page layouts, HTML markups, and visual UI designs.
- CSS styling, custom color variables, and responsive animations.
- Client-side JavaScript interactions, sliders, and navigation behaviors.
- PHP routing execution, request dispatching, and controller action logic.
- Active MySQL database connections, migrations, tables, and SQL queries.
- Booking inquiry submission handling, validation, and email notification.
- Media assets, stock photos, and banner images.