<?php

namespace App\Http\Controllers;

use App\Customers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\DataTables\CustomersDataTable;
use Yajra\DataTables\Html\Button;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CustomersDataTable $dataTable)
    {
        return $dataTable->render('customers.index');
    }
}
