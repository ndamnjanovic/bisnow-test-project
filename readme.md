# Test Project

## Requirements

- PHP >= 5.3.7
  - check your php version with **php -v** from command line
- MySQL

## Installation

- Clone the repository
- Install dependencies (from console)
    - run ```composer install```
- To set permissions: ```chmod -R 777 app/storage```
- Create databases: ```mysqladmin -u root -p password YOUR PASSWORD create test_project_db1```
                    ```mysqladmin -u root -p password YOUR PASSWORD create test_project_db2```
- Run migrations: ```php artisan migrate```
- Run seeder: ```php artisan db:seed --env=local```

