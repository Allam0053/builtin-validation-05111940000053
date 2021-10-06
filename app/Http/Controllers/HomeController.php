<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;
    
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        User::create($request->all());
        return back()->with('success', 'User created successfully.');
    }
}