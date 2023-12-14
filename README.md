<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD - README</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 50px;
        }

        h1 {
            color: #3498db;
        }

        h2 {
            color: #2ecc71;
        }

        p {
            color: #34495e;
        }

        code {
            background-color: #ecf0f1;
            padding: 2px 5px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
            color: #e74c3c;
        }

        pre {
            background-color: #ecf0f1;
            padding: 10px;
            border-radius: 8px;
            overflow-x: auto;
        }
    </style>
</head>
<body>

    <h1>Laravel CRUD - README</h1>

    <p>
        Welcome to the Laravel CRUD application! This project demonstrates basic CRUD (Create, Read, Update, Delete) operations using Laravel, a powerful PHP framework.
    </p>

    <h2>Getting Started</h2>

    <p>
        Follow these steps to set up and run the Laravel CRUD application:
    </p>

    <pre>
        <code>
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
        </code>
    </pre>

    <h2>Features</h2>

    <p>
        The Laravel CRUD application provides the following features:
    </p>

    <ul>
        <li>Create, Read, Update, and Delete operations on a resource.</li>
        <li>Responsive design using Bootstrap for optimal viewing on various devices.</li>
        <li>Utilizes Laravel Eloquent for database operations.</li>
    </ul>

    <h2>Contributing</h2>

    <p>
        Contributions are welcome! If you have suggestions or find issues, please open a GitHub issue or submit a pull request.
    </p>

    <h2>License</h2>

    <p>
        This Laravel CRUD application is open-sourced software licensed under the MIT license.
    </p>

</body>
</html>
