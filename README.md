# Laravel Todo App

This Laravel application provides an API backend for a React.js Todo App (`part1-fe-fundamentals`).

## Dependencies

- [XAMPP](https://www.apachefriends.org/) (always use the latest version)
- [Composer](https://getcomposer.org/) (temporarily disable antivirus software to prevent installation errors)

## Installation

Install necessary packages by running:

```bash
composer install
```

## Configuration

If using MySQL, ensure your `.env` file includes:

```env
# Do not modify
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306

# Modify these values accordingly
DB_DATABASE=your_database_name
DB_USERNAME=root

# If using XAMPP, leave blank unless you set a password
DB_PASSWORD=
```

## Database Migration

Run migrations with:

```bash
php artisan migrate
```

## Seeding Data

Populate fake data using the seeder:

```bash
php artisan db:seed --class=TodoSeeder
```

## Running the Application

Start the Laravel development server with:

```bash
php artisan serve
```

After running the server, you can interact with the React frontend [`part2-be-fundamentals`](https://github.com/raymundenso784/part2-be-fundamentals).

## PHP Fundamentals Folder

The `php-fundamentals` folder contains examples of standard PHP coding conventions. Always refer to the official [Laravel Documentation](https://laravel.com/docs) for guidance and best practices.

