<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::with('role')->paginate(4);
        $roles = Role::all();
        return view('admin.users', compact('users', 'roles'));
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
        $request->validate([
            'role' => 'required'
        ]);

        $user = User::find($id);
        $user->role = $request->role;
        $user->save();

        return redirect('/users')->with('success', 'Role Updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function deleteUser($id)
//    {
//        $user = User::find($id);
//        $user->delete();
//        return redirect()->back()->with('success', 'User deleted successfully!');
//
//    }
//
//    public function restoreUser($id)
//    {
//        $user = User::withTrashed()->find($id);
//        $user->restore();
//        return redirect()->back()->with('success', 'User restored successfully!');
//
//    }
//
//    public function showDeletedUsers()
//    {
//        $users = User::onlyTrashed()->get();
//
//        return view('admin.deletedUsers', compact('users'));
//    }

}
