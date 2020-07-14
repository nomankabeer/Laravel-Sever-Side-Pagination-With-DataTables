# Laravel-Sever-Side-Pagination-With-DataTables
 Laravel-Sever-Side-Pagination-With-DataTables

# Run this project on local environemnt.
Run following commands on your terminal
1.  git clone https://github.com/nomankabeer/Laravel-Sever-Side-Pagination-With-DataTables.git
2.  cp .env.example .env
3.  create database name contegris

Open terminal in you project root directory, then run following commands.
1.  composer install
2.  php artisan key:generate
3.  php artisan migrate --seed
4.  php artisan serve

# Hit following on browser
127.0.0.1:8000/

# Worked on following files
1.  routes/web.php
2.  resources\views\customers\index.blade.ogo
3.  database\migrations\2020_07_14_112408_customers
4.  database\seeds\customer
5.  app\DataTables\CustomersDataTable
6.  app\Customers
7.  app\Http\Controllers\CustomerController
