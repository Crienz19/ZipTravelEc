<?php

namespace App\Http\Controllers;

use App\Notifications\InquiryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class InquiryController extends Controller
{
    public function sendInquiry(Request $request)
    {
        $request->validate([
            'full_name' =>  'required',
            'email'     =>  'required',
            'message'   =>  'required'
        ]);

        Notification::route('mail', 'info@ziptravel.com.ph')
            ->notify(new InquiryNotification($request->all()));
    }
}
