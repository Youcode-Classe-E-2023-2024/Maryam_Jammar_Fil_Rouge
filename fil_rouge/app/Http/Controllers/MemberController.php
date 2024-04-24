<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterEmail;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->validate([
            'email' => 'required|unique:members,email'
        ]);

        Member::create($email);

        return back();
    }
}
