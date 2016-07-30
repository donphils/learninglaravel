<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
	echo "You are welcome to Laravel Class";
});

Route::get('hello/{name}', function($name){
	echo "you want to open".$name;
}
);

Route::POST('test', function(){
	echo "POST";
});
Route::get('test', function(){
	echo "<form action='test' method='POST'>";
	echo "<input type='submit' name='submit' value='Submit'>";
	echo "<input type='hidden' name='_token' value='".csrf_token()."'>";
	echo "</form>";
});

Route::get('customer',function(){
	
});


//Laravel Video tutorial script started  here 

//---Geting customer Name with the help of passed ID---
Route::get('customer/{id}', function($id){
	$customer=App\Customer::find($id);
	echo "Hello your name is".$customer -> Name;
});

// ---Checking custome id with the name Philip--
Route::get('get_customer', function(){
	$customer=App\Customer::where('Name', '=', 'Philip')->first();
	echo "Customer ID is ".$customer -> id;
});


//Getting all Order in relationship with Customer table
Route::get('getorder', function(){ //This Page is generating error
	$orders=App\Order::all();
	foreach($orders as $order){
		// 1: $customer=App\Customer::find($order->customers_id);
		echo "Order ID is " . $order->id;
		// 1: echo " Customer name  is " . $customer->Name;
		echo " Customer name  is " . $order->customer->Name; 
		echo " Order Name is " . $order->name . '<br />'; 
	}
});

// using array to collect record in a database
Route::get('mypage', function(){
	$customers=App\Customer::all();
	$data=array('customer'=>$customers);
	return view('mypage', $customers);
});

//Study about blade templating



//Laravel Video tutorial script ended here


Route::get('create', 'testing@create');
Route::get('create/customer', 'testing@createCustomer');
Route::post('create/customer', 'testing@storeCustomer');
Route::post('store', 'testing@store');
Route::get('read', 'testing@index');
Route::get('show/{id}', 'testing@show');
Route::get('edit/{id}', 'testing@edit');