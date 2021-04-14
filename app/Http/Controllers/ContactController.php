<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Feedback;

class ContactController extends Controller
{
    //

        public function index()
            {
                return view ('frontend.contact.index');    
            }

    //inquiry form submitted        
        public function saveInquiry(Request $request)
            {

                $contact = new Contact();

                $contact = $request->validate([
                                            'name' => 'required|string',
                                            'email' => 'required|email',
                                            'phone' => 'required|integer',
                                            'message' => 'required|string'
                                        ]);

                $contact=Contact::create($request->all());
                return redirect('contact')->with('success','Form Submitted Success');

            }    

    //feedback form submitted
        public function saveFeedback(Request $request)
            {

                $feedback = new Feedback();
                    
                $feedback = $request->validate([
                                                'message' => 'required|string'
                                                ]);

                $feedback=Feedback::create($request->all());
                return redirect('contact')->with('success','Feedback Submitted Success');

            }        

}
