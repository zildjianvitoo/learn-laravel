<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index(): View
    {
        return view("users", ["title" => "Users", "active" => "users", "users" => User::all()]);
    }

    public function show(User $user): View
    {
        return view("users-update", ["title" => $user->name, "user" => User::find($user->id)]);
    }

    public function showPost(User $user): View
    {
        return view(
            "posts",
            [
                "title" => "Posts by User: $user->name",
                "posts" => $user->posts
            ]
        );
    }

    public function store(Request $request)
    {

        if (isNull($request->name) || isNull($request->email) || isNull($request->password)) {
            return
                redirect()->route("users.index")->with(['failed' => 'Data tidak boleh kosong!']);
        }

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        return redirect()->route("users.index")->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route("users.index")->with(["succes" => "Data Berhasil dihapus!"]);
    }

    // public function update(Request $user){
    //     $user = User::find($user->id);

    //     $user->update([
    //         "name" =>
    //     ])
    // }
}
