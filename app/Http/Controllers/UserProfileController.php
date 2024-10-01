<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
class UserProfileController extends Controller
{
    //


    public function store(Request $request)
    {
        // Validate the request data
     
        try {
            // Save the data to the database or perform necessary actions here
            UserProfile::create($request->all());
            return redirect('/')->with('success', 'تم إرسال المعلومات بنجاح.');
        } catch (\Exception $e) {
            // Handle any errors
            return redirect('/')->with('error', 'حدث خطأ أثناء إرسال المعلومات. حاول مرة أخرى.');
        }
        // Create a new user profile record in the database


        // Redirect or return a response

    }
}
