<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role_id', 9)->get();
        return view('admin.student.index', compact('students'));
    }

    public function create()
    {
        return view('register-student'); // Make sure this view file exists
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed', // Confirmed for password confirmation
        'firstname' => 'required|string|max:50',
        'lastname' => 'required|string|max:50',
        'username' => 'required|string|max:25|unique:users,username',
        'phone' => 'required|string|max:19|unique:users,phone',
        'course_id' => 'required|exists:courses,id', // Ensure course exists in courses table
    ]);

    // Create new user with role_id = 9 for students
    User::create([
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'role_id' => 9, // Student role ID
        'firstname' => $validatedData['firstname'],
        'lastname' => $validatedData['lastname'],
        'username' => $validatedData['username'],
        'phone' => $validatedData['phone'],
        'status' => 1, // Default status if needed
    ]);

    return redirect()->route('student.index')->with('success', 'Student registered successfully!');
}

}
