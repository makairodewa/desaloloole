<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'us_name' => 'required|string|max:255',
            'us_email' => 'required|string|email|max:255|unique:users',
            'us_password' => 'required|string|min:6',
            'rs_id' => 'required|exists:roles,rs_id',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        User::create([
            'us_name' => $request->input('us_name'),
            'us_email' => $request->input('us_email'),
            'password' => Hash::make($request->input('us_password')),
            'rs_id' => $request->input('rs_id'),
        ]);
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'rs_id' => 'required|exists:roles,rs_id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password') ? Hash::make($request->input('password')) : $user->password,
            'rs_id' => $request->input('rs_id'),
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function login(Request $request)
    {
        $credential = $request->validate(
            [
                'email' => 'required|email:dns',
                'password' => 'required'

            ]
        );
        if (Auth::attempt(['us_email' => $credential['email'], 'password' => $credential['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return redirect()->back()->with('error', 'Email or password are incorrect');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('auth.index');
    }
}