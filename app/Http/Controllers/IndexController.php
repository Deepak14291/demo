<?php

namespace App\Http\Controllers;

use App\Mail\AdminEmailNotification;
use App\Mail\AdminMailNotification;
use Illuminate\Http\Request;
use App\Mail\ContactMeSubmitted;
use ArrayObject;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class IndexController extends Controller
{
    public function index()
    {
        return inertia("Index/Index");
    }
    public function about()
    {
        return inertia("Index/Aboutme", [
            'imageurl' => url('/build/assets/images/my_photo/Deepak.jpg')
        ]);
    }
    public function myprojects()
    {
        return inertia("Index/Projects");
    }
    public function skills()
    {
        return inertia("Index/Skills");
    }
    public function contactme()
    {
        return inertia("Index/Contactme");
    }
    public function contactmesubmitted(Request $request)
    {
        // if (($request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'required|string'
        // ]))) {
        //     throw ValidationException::withMessages([
        //         'email' => 'Please enter valid details'
        //     ]);
        // }
        // return redirect()->route('project.index')
        //     ->with('success', 'project was added');

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to($request->email)->queue(new ContactMeSubmitted());
        Mail::to('deepak.kodi@icloud.com')->queue(new AdminMailNotification($data));

        return inertia("Index/Contactmesubmitted");
    }
    public function viewproject()
    {
        return inertia("Index/FrontEnd/Tesla");
    }
    public function readmore()
    {
        return inertia("Index/Readmore");
    }
}
