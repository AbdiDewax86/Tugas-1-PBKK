<?php
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

$customers = DB::select('select * from sales.customers where customer_id between 681 and 700');
dd($customers);
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;
// 
// Route::get('view-records', 'CustViewController@index');
?>