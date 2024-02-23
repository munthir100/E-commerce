# Laravel E-Commerce Project

Welcome to the Laravel E-Commerce project! This platform allows you to effortlessly create and manage your online store, providing features for product creation, order management, and seamless communication with your clients.

## Prerequisites

Before you begin, ensure that you have the following installed:

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) (Version 8.1.16 or higher)
- [Laravel](https://laravel.com/docs/10.x/installation) (Version 10)

## Installation

### 1. Clone the Repository:

```bash
git clone https://github.com/munthir100/api-SAAS.git
```

### 2. Navigate to the Project Directory:

```bash
cd api-SAAS
```

### 3. Install Dependencies:

```bash
composer install
```

### 4. Copy the Environment File:

```bash
cp .env.example .env
```

### 5. Generate Application Key:

```bash
php artisan key:generate
```

### 6. Run Migrations:
```bash
php artisan migrate
```
### 7. Run Seeders:
```bash
php artisan module:seed Shipping
```
```bash
php artisan module:seed Acl
```
```bash
php artisan module:seed Admin
```
```bash
php artisan module:seed Store
```
```bash
php artisan module:seed Customer
```bash
```

### 8. Run the Development Server:

```bash
php artisan serve
```

### 9. Access the Application:

Open your browser and go to [http://localhost:8000](http://localhost:8000)

## Usage

1. **Login and Registration:**
   - Use the provided authentication modules for secure login and registration.

2. **Manage Shipping Information:**
   - Seed shipping data for cities, countries, and other relevant information.

3. **Manage Admin, Store, and Customer Data:**
   - Utilize the provided modules to seed necessary data for the respective entities.

4. **Run Development Server:**
   - Start the development server to access the application locally.

5. **Access the Application:**
   - Open your browser and navigate to [http://localhost:8000](http://localhost:8000)

## About the Project

This e-commerce project empowers you to create your online store with ease, providing flexibility in designing your store and efficiently managing interactions with your clients, orders, and products.

## Contributors

- [Your Name]
- [Other Contributors]

Feel free to contribute to the project and make it even better!

Happy coding!
