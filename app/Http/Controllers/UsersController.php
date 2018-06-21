<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Role;
use App\Site;
use App\User;
use function redirect;
use function view;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('admin.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id');
        $sites = Site::pluck('name', 'id');
        
        return view('admin.users.create', compact('roles', 'sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        if(trim($request->password)==''){
            $input = $request->except('password');
        }else{
        $input = $request->all();
        $input['password'] = bcrypt($request->password); 
        }
        $user = User::create($input);
        $site = Site::find($request->site_id);
        $user->sites()->save($site);
        
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id');
        $sites = Site::pluck('name', 'id');
        
        return view('admin.users.edit', compact('user', 'roles', 'sites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);
        
        if(trim($request->password)==''){
            $input = $request->except('password');
        }else{
        $input = $request->all();
        $input['password'] = bcrypt($request->password); 
        }
        
        $user->update($input);
        $site = Site::find($request->site_id);
        $user->sites()->sync($site);
        
        return redirect('/admin/users');
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
    
    public function deactivate($id){
        $user = findOrFail($id);
        $user->status = 0;
        $user->save();
        
        return redirect('/admin/users');
    }
    
    public function activate($id){
        $user = findOrFail($id);
        $user->status = 1;
        $user->save();
        
        return redirect('/admin/users');
    }
}
