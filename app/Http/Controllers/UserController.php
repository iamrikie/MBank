<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->view('user.index', [
            'users' => User::orderBy('user_id', 'desc')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response()->view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rank'         => ['required', 'string', 'max:255'],
            'first_name'   => ['required', 'string', 'max:255'],
            'last_name'    => ['required', 'string', 'max:255'],
            'id_number'    => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'username'     => ['required', 'string', 'max:255', 'unique:users,user_username'],
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:users,user_email'],
            'password'     => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'user_rank'         => $validatedData['rank'],
            'user_first_name'   => $validatedData['first_name'],
            'user_last_name'    => $validatedData['last_name'],
            'user_id_number'    => $validatedData['id_number'],
            'user_phone_number' => $validatedData['phone_number'],
            'user_username'     => $validatedData['username'],
            'user_email'        => $validatedData['email'],
            'user_password'     => $validatedData['password'],
        ]);

        return response()->view('user.show', ['user' => $user]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return response()->view('user.show', [
            'user' => User::findOrfail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return response()->view('user.edit', [
            'user' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'first_name'   => ['required', 'string', 'max:255'],
            'last_name'    => ['required', 'string', 'max:255'],
            'id_number'    => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'username'     => ['required', 'string', 'max:255'],
            'email'        => ['required', 'string', 'email', 'max:255'],
        ]);

        $user->update([
            'user_first_name'   => $validatedData['first_name'],
            'user_last_name'    => $validatedData['last_name'],
            'user_id_number'    => $validatedData['id_number'],
            'user_phone_number' => $validatedData['phone_number'],
            'user_username'     => $validatedData['username'],
            'user_email'        => $validatedData['email'],
        ]);

        return response()->view('user.show', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('status', [
            'alert-success',
            "$user->first_name $user->last_name's user record (#$user->id) has been deleted.",
        ]);

        return redirect()->route('users.index');
    }
}
