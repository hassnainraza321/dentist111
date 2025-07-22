<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ContactUs;
use Helper;
use Mail;
use Cache;

class ContactController extends Controller
{
    public function contactUs(Request $request)
    {
        if (request()->method() === 'GET')
        {
            return view('contact-us');
        }

        $validations = [
            'first_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ];

        if (!empty($request->phone))
        {
           $validations['phone'] = 'max:15';
        }

        $validator = \Validator::make($request->all(), $validations);

        if ($validator->fails())
        {
            return response()->json(['status' => -1, 'message' => $validator->messages()->toArray()]);
        }

        $contact_us = new ContactUs();

        $contact_us->first_name = $request->first_name;
        $contact_us->last_name = $request->last_name;
        $contact_us->email = $request->email;
        $contact_us->phone = isset($request->phone) ? $request->phone : null;
        $contact_us->message = $request->message;
        $contact_us->ip = Helper::getIp();
        $contact_us->user_agent = $request->header('User-Agent');
        $contact_us->save();

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'inquiry_message' => $request->message,
            'ip' => Helper::getIp()
        ];

        $to = Helper::$admin_mail_address;
        $subject = 'Appointment Message';

        Helper::sendEmail('emails.contact-email', $data, $to, $subject);

        return response()->json(['status' => 1, 'message' => 'Your inquiry has been recieved, we will response shortly. Thanks for contacting us. For emergency call or WhatsApp ' . Helper::$admin_phone_number]);
    }
}


