# Taxi Booking Application - Project Overview

## Project Purpose
A Laravel-based taxi booking application with:
- **User Frontend**: Public-facing website for booking taxis
- **Admin Panel**: Management interface for orders, contacts, posts, and configuration
- **API**: RESTful API for order management (JWT authentication)
- **Features**: Order management, contact forms, blog posts, promotions, Telegram notifications

## Tech Stack

### Backend
- **PHP**: 8.2+
- **Framework**: Laravel 11.44.2
- **Authentication**: JWT (tymon/jwt-auth)
- **Repository Pattern**: prettus/l5-repository
- **External APIs**:
  - Telegram Bot SDK (irazasyed/telegram-bot-sdk)
  - Google Distance API (pnlinh/laravel-google-distance)

### Frontend
- **Build Tool**: Vite 5.0
- **CSS Framework**: AdminLTE (for admin panel)
- **JavaScript**: Vanilla JS with Axios
- **Templating**: Blade (Laravel)

### Development Tools
- **Code Formatter**: Laravel Pint
- **Testing**: PHPUnit 11
- **Package Manager**: Composer (PHP), npm (JavaScript)

## Project Structure

### Key Directories
- `app/Http/Controllers/`: Controllers (Admin, User, Api subdirectories)
- `app/Services/`: Business logic layer
- `app/Repositories/`: Data access layer (Repository pattern)
- `app/Models/`: Eloquent models
- `app/Jobs/`: Queue jobs (notifications)
- `app/Mail/`: Mail classes
- `app/Helpers/`: Helper functions (autoloaded)
- `resources/views/`: Blade templates
- `routes/`: Route definitions (web.php, admin.php, user.php)
- `database/migrations/`: Database migrations
- `database/seeders/`: Database seeders

### Key Features
1. **Order Management**: Create, accept, reject, complete taxi orders
2. **Contact Management**: Handle contact form submissions
3. **Content Management**: Blog posts and promotions
4. **Configuration**: Admin-configurable settings
5. **Notifications**: Email and Telegram notifications
6. **Distance Calculation**: Google Distance API integration

## Entry Points
- **Web Application**: `php artisan serve` (typically http://localhost:8000)
- **Artisan CLI**: `php artisan` for various commands
- **Queue Worker**: `php artisan queue:work` for background jobs

## Environment Setup
- **Configuration**: `.env` file (copy from `.env.example`)
- **Key Generation**: `php artisan key:generate`
- **Database**: Configure in `.env`, then run migrations

## Important Notes
- Uses Repository Pattern for data access abstraction
- Services contain business logic, not controllers
- Custom query filters in `app/Services/_QueryFilter/`
- Helper functions autoloaded from `app/Helpers/`
- Admin panel uses AdminLTE theme
- Frontend assets compiled with Vite
