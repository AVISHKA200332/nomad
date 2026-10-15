# Avenora - Software Architecture

## Overview
Avenora is structured around a lightweight Model-View-Controller (MVC) architectural pattern tailored for PHP 8+ and Apache (XAMPP). The architecture focuses on separation of concerns, modularity, high performance, and security without introducing heavy external frameworks.

## Core Architectural Layers

### 1. Presentation Layer (Views & Assets)
- Located in `app/Views/` and `public/assets/`.
- Component-driven view organization:
  - **Layouts (`app/Views/layouts/`):** Master document templates (`main.php`).
  - **Partials (`app/Views/partials/`):** Reusable page segments (`head.php`, `header.php`, `navbar.php`, `footer.php`, `scripts.php`).
  - **Components (`app/Views/components/`):** Reusable UI cards and widgets (`destination-card.php`, `package-card.php`, `breadcrumb.php`).
  - **Pages (`app/Views/pages/`):** View templates specific to the five primary pages.
- Pure CSS3 styling separated by scope (design tokens, reset, global, layout, responsive, components, and pages).
- Vanilla JavaScript structured into global handlers and domain modules.

### 2. Application Layer (Controllers & Routing)
- **Public Entry Point (`public/index.php`):** Central front controller capturing all incoming HTTP requests.
- **Router (`app/Core/Router.php` & `routes/web.php`):** Dispatches request URIs and HTTP methods to appropriate controller actions.
- **Controllers (`app/Controllers/`):** Thin orchestrators that handle request flow, invoke models or services, and render views.

### 3. Domain & Data Layer (Models & Database)
- **Models (`app/Models/`):** Encapsulate data structure and entity-level operations for Destinations, Packages, and Contact Messages.
- **Database Abstraction (`app/Core/Database.php`):** Manages secure PDO database connections, error handling, and prepared statement execution.

### 4. Supporting Infrastructure
- **Services (`app/Services/`):** Future home for business logic (e.g., inquiry email dispatch, search filtering).
- **Validators (`app/Validators/`):** Future home for input validation and sanitization.
- **Configuration (`app/Config/`):** Centralized configuration files for application settings and database credentials.

## Security Principles
- All PHP application logic resides outside the web server's public root (`public/`).
- Database credentials and secrets are managed via environment configuration (`.env`).
- Database queries will strictly use PDO prepared statements to protect against SQL injection.
