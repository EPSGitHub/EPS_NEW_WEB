<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendViewManagement extends Controller
{
    public function HomePage(){
        return view('frontend.index');
    }


    public function ContactUs(){
        return view('frontend.contact');
    }

    public function AboutUs(){
        return view('frontend.about');
    }

    //Single Details
    public function AboutUs_singleDetails(){
        return view('frontend.single_details');
    }
    public function AboutUs_singleDetails_Mohsin(){
        return view('frontend.single_details.mohsin');
    }
    public function AboutUs_singleDetails_shahAlam(){
        return view('frontend.single_details.shahalam');
    }
    public function AboutUs_singleDetails_nasirUddin(){
        return view('frontend.single_details.nasir');
    }
    public function AboutUs_singleDetails_Faruq(){
        return view('frontend.single_details.faruq');
    }
    public function AboutUs_singleDetails_nasimul(){
        return view('frontend.single_details.nasimul');
    }


    //End Single Details
    public function AboutUs_Team(){
        return view('frontend.team');
    }
    public function TermsAndCondition(){
        return view('frontend.terms-condition');
    }
    public function PrivacyPage(){
        return view('frontend.privacy');
    }
    public function CookiePage(){
        return view('frontend.cookie');
    }
    public function FaqPage(){
        return view('frontend.faq');
    }
}
