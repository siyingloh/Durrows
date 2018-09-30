<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Mail;
use App\Templates;
use App\Configuration;
class ContactusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('./frontend/contactus');
    }
    
    public function save(Request $request){
        // dd($request);
        $template = Templates::where('temp_key', 'like', 'contact_us_admin')->first();
        $subject = $template->temp_subject;
        $template = $template->temp_text;
        
        
        $bgImageUrl = asset("images/emailBg.jpg"); 
        $template = str_replace('{emailBg}', "$bgImageUrl", $template);
        $template = str_replace('{site_logo}', url('images/headerLogo.png'), $template);
        $template = str_replace('{site_title}', env('APP_NAME'), $template);
        $template = str_replace('{black_img}', url('images/blackBg.png'), $template);
        $template = str_replace('{user_name}', $request->guest_name, $template);
        $template = str_replace('{guest_name}', $request->guest_name, $template);
        $template = str_replace('{guest_email}', $request->guest_email, $template);
        $template = str_replace('{guest_phone}', $request->guest_phone, $template);
        $template = str_replace('{guest_subject}', $request->guest_subject, $template);
        $template = str_replace('{guest_message}', $request->guest_message, $template);
         $template = str_replace('{year}', date("Y"), $template);
        $sender_email = $request->guest_email;
        $data['subject'] = $subject;
        $data['content'] = $template;
        $data['from'] = $sender_email;
        
        Mail::send([], [], function($message) use ($data) {
            $message->from($data['from']);
            $message->to(env('ADMIN_MAIL'));
            $message->subject($data['subject']);
            $message->setBody($data['content'], 'text/html');
        });
       
       $template = Templates::where('temp_key', 'like', 'contact_us_user')->first();
         $subject = $template->temp_subject;
         $template = $template->temp_text;
       
        $template = str_replace('{emailBg}', "$bgImageUrl", $template);
        $template = str_replace('{site_logo}', url('images/headerLogo.png'), $template);
        $template = str_replace('{site_title}', env('APP_NAME'), $template);
        $template = str_replace('{user_name}', $request->guest_name, $template);
        $sender_email = $request->guest_email;
        $data['subject'] = $subject;
        $data['content'] = $template;
        $data['to'] = $sender_email;
        
        Mail::send([], [], function($message) use ($data) {
            $message->from(env('ADMIN_MAIL'));
            $message->to( $data['to']);
            $message->subject($data['subject']);
            $message->setBody($data['content'], 'text/html');
        });
        
        //dd($request);
        $contact_detail = array(
            'name' => $request->guest_name,
            'email' => $request->guest_email,
            'phone' => $request->guest_phone,
            'subject' => $request->guest_subject,
            'message' => $request->guest_message
        );
        // new ContactUs($contact_detail);
        return redirect()->back();
    }
}
