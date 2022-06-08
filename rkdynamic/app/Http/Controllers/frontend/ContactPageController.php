<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Validator;

class ContactPageController extends Controller
{
    public function showIndex(){

        return view('contactPage');
    }

    public function saveContact(Request $request){

//        $validator = $request->validate([
//
//            'name'      => 'required',
//            'email'     => 'required',
//            'subject'   => 'required',
//            'message'   => 'required'
//
//        ],
//        [
//            'name.required' => 'You Must Fill Name Field',
//            'email.required'    => 'You Must Fill Email Field',
//            'subject.required'  => 'You Must Provide a Subject',
//            'message.required'  => 'You Must Write Something'
//        ]
//
//        );

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ],

        [
            'name.required' => 'You Must Fill Name Field',
            'email.required'    => 'You Must Fill Email Field',
            'subject.required'  => 'You Must Provide a Subject',
            'message.required'  => 'You Must Write Something'
        ]

        );


        if (!$validator->passes()){

            return response()->json(['status' =>0, 'error'=>$validator->errors()->toArray()]);


        }else{

            $contact_name = $request->name;
            $contact_email = $request->email;
            $contact_subject = $request->subject;
            $contact_message = $request->message;

            $save_data = ContactForm::insert([

                'name' =>$contact_name,
                'email' =>$contact_email,
                'subject' =>$contact_subject,
                'message' =>$contact_message,
                'created_at'    =>Carbon::now()
            ]);

            if ($save_data){

                return response()->json(['status' =>1, 'success_message' => 'Contact Form Has Been Sent!']);
            }

        }


    }
}
