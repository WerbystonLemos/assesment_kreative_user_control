<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

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
        if($id == Auth::id())
        {
            throw new Execption();
            return "Não podes deletar seu próprio usuário logado";
        }
        return User::destroy($id);
    }
}
