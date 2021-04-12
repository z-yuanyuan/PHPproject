<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Http\Controllers\Adjustment;

class ApiController extends Controller
{
    public function createUser(Request $request)
    {
        $user = new users();
        $user->Firstname = $request->Firstname;
        $user->Surname = $request->Surname;
        $user->DateOfBirth = $request->DateOfBirth;
        $user->PhoneNumber = $request->PhoneNumber;
        $user->Email = $request->Email;
        $user->save();

        return response()->json([
            "message" => "User record created."
        ], 201);
    }

    public function getAllUsers()
    {
        $users = users::get()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getUser($id)
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

    public function updateUser(Request $request, $id)
    {
        if (users::where('id', $id)->exists()) {
            $user = users::find($id);
            $user->Firstname = $request->Firstname;
            $user->Surname = $request->Surname;
            $user->DateOfBirth = $request->DateOfBirth;
            $user->PhoneNumber = $request->PhoneNumber;
            $user->Email = $request->Email;
            $user->save();

            return response()->json([
                "message" => "User record updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "User not found."
            ], 404);
        }
    }

    public function deleteUser($id)
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
