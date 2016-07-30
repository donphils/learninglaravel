<?php

namespace App\Http\Controllers ;

use Request;

use App\Http\Requests;

use App\curd;

class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=curd::all();
        return view("read", compact("user"));
		
		//Newer Version of doing
		//$user=curd::all();
		//$user['roles'] = '';
        //return view("read")->withUser($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('create');
    }
	
	 public function createCustomer()
    {
        //
		return view('createcustomer');
    }
	
	 public function Customer()
    {
        //
		return view('createcustomer');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		curd::create(Request::all());
		return redirect("read");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //To View detail of a particular record
		$user=curd::find($id);
		return view('show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To edit the content of the Database
		$user=curd::find($id);
		return view('update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Updating your Record
		curd::update(Request::all());
		return redirect("read");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
