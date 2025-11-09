# Suggested Commands for Taxi Project

## Development Commands

### PHP/Laravel Commands
- **Run Laravel development server**: `php artisan serve`
- **Run queue worker**: `php artisan queue:work`
- **Clear cache**: `php artisan cache:clear`
- **Clear config cache**: `php artisan config:clear`
- **Clear route cache**: `php artisan route:clear`
- **Clear view cache**: `php artisan view:clear`
- **Optimize**: `php artisan optimize`

### Database Commands
- **Run migrations**: `php artisan migrate`
- **Rollback migrations**: `php artisan migrate:rollback`
- **Run seeders**: `php artisan db:seed`
- **Fresh migration with seeding**: `php artisan migrate:fresh --seed`

### Testing Commands
- **Run all tests**: `php artisan test` or `vendor/bin/phpunit`
- **Run specific test file**: `php artisan test tests/Feature/ExampleTest.php`
- **Run with coverage**: `php artisan test --coverage`

### Code Quality Commands
- **Format code with Laravel Pint**: `./vendor/bin/pint` or `php artisan pint`
- **Check code style**: `./vendor/bin/pint --test`

### Frontend Commands
- **Start Vite dev server**: `npm run dev`
- **Build assets for production**: `npm run build`
- **Install dependencies**: `npm install`

### Composer Commands
- **Install dependencies**: `composer install`
- **Update dependencies**: `composer update`
- **Dump autoload**: `composer dump-autoload`

## Git Commands (Windows)
- **Check status**: `git status`
- **Add files**: `git add .` or `git add <file>`
- **Commit**: `git commit -m "message"`
- **Push**: `git push`
- **Pull**: `git pull`
- **Checkout branch**: `git checkout <branch>`
- **Create branch**: `git checkout -b <branch>`

## System Commands (Windows PowerShell)
- **List files**: `Get-ChildItem` or `ls` (alias)
- **Change directory**: `cd <path>`
- **Find files**: `Get-ChildItem -Recurse -Filter "*.php"` or use `grep` equivalent
- **Search in files**: `Select-String -Pattern "pattern" -Path "*.php"`
