# Laravel CRUD Application

Welcome to the Laravel CRUD application! This project demonstrates basic CRUD (Create, Read, Update, Delete) operations using Laravel, a powerful PHP framework.

## Getting Started

Follow these steps to set up and run the Laravel CRUD application:

```bash
# Clone the repository
git clone https://github.com/your-username/laravel-crud.git

# Navigate to the project directory
cd laravel-crud

# Install dependencies
composer install

# Copy the .env.example file and configure your database
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start the development server
php artisan serve
