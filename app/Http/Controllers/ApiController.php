<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Givebutter\LaravelKeyable\Auth\AuthorizesKeyableRequests;

class ApiController extends Controller
{
    use AuthorizesKeyableRequests;

    public function createUser(Request $request)
    {
        $user = $request->keyable;
        $user = new users();
        $user->Firstname = $request->Firstname;
        $user->Surname = $request->Surname;
        $user->DateOfBirth = $request->DateOfBirth;
        $user->PhoneNumber = $request->PhoneNumber;
        $user->Email = $request->Email;
        $user->save();

        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln('User record created.');
        return redirect('/');
    }

    public function getAllUsers()
    {
        $users = users::get()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getUserbyid($id)
    {
        if (users::where('id', $id)->exists()) {
            $users = users::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($users, 200);
        } else {
            return response()->json([
                "message" => "User not found."
            ], 404);
        }
    }

    public function updateUserbyid(Request $request)
    {
        if (users::where('id', $request->id)->exists()) {
            $user = users::find($request->id);
            $user->Firstname = $request->Firstname;
            $user->Surname = $request->Surname;
            $user->DateOfBirth = $request->DateOfBirth;
            $user->PhoneNumber = $request->PhoneNumber;
            $user->Email = $request->Email;
            $user->save();

            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln('User record updated successfully');
            return redirect('/');
        } else {
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln('User not found.');
            return redirect('/');
        }
    }

    public function deleteUserbyid($id)
    {
        if (users::where('id', $id)->exists()) {
            $user = users::find($id);
            $user->delete();

            return response()->json([
                "message" => "User record deleted."
            ], 202);
        } else {
            return response()->json([
                "message" => "User not found."
            ], 404);
        }
    }
}
