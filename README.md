# Laravel Oil Change Checker

Laravel 12 application to check if a car needs an oil change.

## Inputs
- Current Odometer
- Previous Odometer
- Date of Last Oil Change

## Logic
An oil change is required if:
- More than 5000 km have been driven, OR
- More than 6 months have passed since the last oil change

The result page shows whether an oil change is required along with the entered values.

Install dependencies: composer install

Create SQLite file: touch database/database.sqlite

Set in .env: DB_CONNECTION=sqlite, DB_DATABASE=database/database.sqlite

Run migrations: php artisan migrate

Start server: php artisan serve

Open browser: http://127.0.0.1:8000

Notes:

All fields are required.

Odometer values must be positive; current ≥ previous.

Previous oil change date must be in the past.

Reset database: php artisan migrate:fresh

Open-source and free to use.


## Storage
- Uses SQLite to store submitted data

---
