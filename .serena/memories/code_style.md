# Code Style and Conventions

## Framework and Architecture
- **Framework**: Laravel 11 (PHP 8.2+)
- **Architecture Pattern**: Repository Pattern (using prettus/l5-repository)
- **Service Layer**: Services extend `BaseService` and use repositories
- **PSR-4 Autoloading**: Standard Laravel structure

## Naming Conventions
- **Controllers**: PascalCase, e.g., `OrderController`, `AdminOrderController`
- **Models**: PascalCase, singular, e.g., `Order`, `User`, `Post`
- **Services**: PascalCase with "Service" suffix, e.g., `OrderService`
- **Repositories**: PascalCase with "Repository" suffix, e.g., `OrderRepository`
- **Methods**: camelCase, e.g., `list()`, `accept()`, `complete()`
- **Variables**: camelCase, e.g., `$orderService`, `$orders`
- **Database tables**: snake_case, plural, e.g., `orders`, `users`

## Code Organization
- **Controllers**: Located in `app/Http/Controllers/` with subdirectories for `Admin`, `User`, `Api`
- **Services**: Located in `app/Services/` with subdirectories by domain
- **Repositories**: Located in `app/Repositories/` with subdirectories by domain
- **Models**: Located in `app/Models/`
- **Helpers**: Located in `app/Helpers/` (autoloaded via composer.json)

## Code Style Guidelines
- **Type Hints**: Use type hints for method parameters and return types where applicable
- **Docstrings**: Follow Laravel conventions (minimal, clear)
- **Indentation**: 4 spaces (Laravel standard)
- **Line Length**: Follow Laravel Pint defaults
- **Formatting**: Use Laravel Pint for code formatting

## Design Patterns
- **Repository Pattern**: All data access through repositories
- **Service Layer**: Business logic in services, not controllers
- **Dependency Injection**: Use constructor injection for dependencies
- **Query Filters**: Custom query filters in `app/Services/_QueryFilter/`

## Database Conventions
- **Migrations**: Located in `database/migrations/`
- **Seeders**: Located in `database/seeders/`
- **Factories**: Located in `database/factories/`
- **Model Fillable**: Define `$fillable` array in models
- **Casts**: Use `$casts` array for type casting (e.g., JSON, dates)

## Frontend Conventions
- **Views**: Blade templates in `resources/views/`
- **Assets**: CSS/JS in `resources/css/` and `resources/js/`
- **Build Tool**: Vite (configured in `vite.config.js`)
- **Admin UI**: AdminLTE theme

## Testing
- **Test Location**: `tests/Unit/` and `tests/Feature/`
- **Test Naming**: `ExampleTest.php` with test methods like `test_example()`
- **PHPUnit Config**: `phpunit.xml`
