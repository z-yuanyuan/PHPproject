<?php

namespace App\Http\Controllers;

use App\Models\users;


class appUserController extends Controller
{
    function userList()
    {
        $usersData = users::all();
        return view('viewUser', ['userData' => $usersData]);
    }

    function createUser()
    {

        return view('users');
    }

    function getUserbyid($id)
    {
        $userdata = users::find($id);
        return view('updateUser', ['userdata' => $userdata]);
    }

    function deleteUserbyid($id)
    {
        $userdata = users::find($id);
        $userdata->delete();
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln('User record deleted.');
        return redirect('/');
    }
}
