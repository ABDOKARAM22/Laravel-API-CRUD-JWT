# Laravel API CRUD with JWT Authentication

This Laravel project is a simple API with CRUD operations and JWT authentication. It allows you to perform basic Create, Read, Update, and Delete operations on resources, secured with JSON Web Token (JWT) authentication.

## Table of Contents

- [Installation](#installation)
- [API Documentation](#api-documentation)
- [JWT Authentication](#jwt-authentication)
- [Testing the API](#testing-the-api)

## Installation

To get started with this Laravel project, follow these steps:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/your-laravel-api.git

2. **Install dependencies:**

   ```bash
   composer install

3. Create a copy of the .env.example file and rename it to .env. Update the database configuration, and set up your JWT secret key.

   ```bash
   cp .env.example .env

4. **Generate application key:**

   ```bash
   php artisan key:generate


5. **Migrate the database:**

   ```bash
   php artisan migrate

6. **Seed the database:**

   ```bash
   php artisan db:seed


## API Documentation

The API documentation is available at [API Documentation](https://documenter.getpostman.com/view/32688996/2s9YywdeYw).
The documentation link contains a description of each endpoint

Alternatively, you can import the Postman collection provided in the repository:

`postman_collection.json`

This collection contains all the necessary API requests and can be used to test the endpoints.

## JWT Authentication

This project uses JWT for authentication. Make sure to set the correct values for `JWT_SECRET` in your `.env` file.


## Testing the API

You can use the Postman collection mentioned above to test the API endpoints. Ensure that you have a valid JWT token by authenticating first.

1. Authenticate using the /api/auth/login endpoint.
2. Copy the JWT token from the response.
3. Set the token in the Authorization header for subsequent requests.

Feel free to explore and modify the code to suit your needs. If you encounter any issues or have questions, please check the documentation or open an issue on the GitHub repository.
