<?php

namespace App\Http\Controllers\Frontend;

use App\Events\ContactUsFeedBack;
use App\Http\Controllers\Controller;
use App\Jobs\SendContactUsEmailJob;
use App\Mail\SendContactUsEmail;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('frontend');
    }

    public function welcome()
    {
        $sliders = Slider::where('is_active', true)->take(5)->get();
        $testimonials = Testimonial::latest()->get();
        return view('frontend.welcome', compact('sliders', 'testimonials'));
    }

    public function about()
    {
        return view('frontend.about');
    }


    public function contact(Request $request)
    {
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), array(
                'firstname' => 'bail | required | string | min:3 | max:30',
                'lastname' => 'bail | required | string | min:3 | max:30',
                'email' => 'bail | required | email | max:30',
                'subject' => 'bail | required | string | min:3 | max:30',
                'message' => 'bail | required | string | min:3| max:500'
            ));

            if ($validator->fails()) {
                return response()->json(['status' => Response::HTTP_BAD_REQUEST, 'error' => $validator->errors()->toArray()]);
            }

            $data = [
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'message' => $request->get('message')
            ];

            // sending email to admin
            SendContactUsEmailJob::dispatch($data)->delay(now()->addSeconds(10));

            return response()->json(['status' => Response::HTTP_OK, 'message' => 'Thank you for contacting us, we\'ll get back to you soon']);
        }
        return view('frontend.contact');
    }

    public function download__strategy__pdf()
    {
        $file_path = public_path('uploads/nafau__strategy__plan/NAFAU-STRATEGIC-PLAN-2020-2025.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = 'NAFAU.-STRATEGIC-PLAN-2020-2025' . '.' . 'pdf';

        return response()->download($file_path, $fileName, $headers);
    }

}
