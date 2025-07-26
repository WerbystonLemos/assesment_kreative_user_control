<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public static function getAllUsers()
    {
        return User::all();
    }

    public function getUser(Request $request)
    {
        $user = User::find($request->id);

        if (!$user)
        {
            return response()->json(['error' => 'Usuário não encontrado.'], 404);
        }

        return response()->json($user);
    }

    public function deleteUser($id)
    {
        return User::destroy($id);
    }
}
