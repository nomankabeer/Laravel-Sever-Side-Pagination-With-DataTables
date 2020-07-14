# Laravel-Sever-Side-Pagination-With-DataTables
 Laravel-Sever-Side-Pagination-With-DataTables

# Run this project on local
Run following commands on your terminal
1.  git clone https://github.com/nomankabeer/Laravel-Sever-Side-Pagination-With-DataTables.git
2.  cp .env.example .env
3.  create database name contegris
4.  composer install
5.  php artisan key:generate
6.  php artisan migrate --seed
7.  php artisan serve

# Hit following on browser
127.0.0.1:8000/

# Worked on following files
routes/web.php
resources\views\customers\index.blade.ogo
database\migrations\2020_07_14_112408_customers
database\seeds\customer
app\DataTables\CustomersDataTable
app\Customers
app\Http\Controllers\CustomerController
