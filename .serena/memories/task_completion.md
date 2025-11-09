# Task Completion Checklist

When completing a task, follow these steps:

## 1. Code Quality Checks
- [ ] **Format code**: Run `./vendor/bin/pint` or `php artisan pint` to format PHP code
- [ ] **Check linting**: Run `./vendor/bin/pint --test` to verify code style
- [ ] **Fix any linting errors**: Address all Pint warnings/errors

## 2. Testing
- [ ] **Run tests**: Execute `php artisan test` or `vendor/bin/phpunit`
- [ ] **Verify all tests pass**: Ensure no regressions introduced
- [ ] **Add tests if needed**: Write tests for new functionality

## 3. Frontend Assets (if modified)
- [ ] **Build assets**: Run `npm run build` for production or `npm run dev` for development
- [ ] **Verify assets compile**: Check for build errors

## 4. Database Changes (if applicable)
- [ ] **Create migrations**: If database schema changed, create migration files
- [ ] **Test migrations**: Run `php artisan migrate` to verify migrations work
- [ ] **Update seeders**: If needed, update or create seeders

## 5. Git Operations
- [ ] **Check status**: Run `git status` to see all changes
- [ ] **Review changes**: Use `git diff` to review modifications
- [ ] **Stage files**: Add modified files with `git add <file>` or `git add .`
- [ ] **Commit**: Create descriptive commit message: `git commit -m "Description of changes"`
- [ ] **Verify clean state**: Ensure working tree is clean after commit

## 6. Documentation (if needed)
- [ ] **Update README**: If project setup or usage changed
- [ ] **Add code comments**: Document complex logic or important functions
- [ ] **Update API docs**: If API endpoints changed

## 7. Verification
- [ ] **Test manually**: Verify functionality works as expected
- [ ] **Check for errors**: Review Laravel logs in `storage/logs/`
- [ ] **Verify no breaking changes**: Ensure existing functionality still works

## Common Commands Summary
```bash
# Format and lint
./vendor/bin/pint

# Test
php artisan test

# Build frontend
npm run build

# Database
php artisan migrate

# Git
git status
git add .
git commit -m "Description"
```
