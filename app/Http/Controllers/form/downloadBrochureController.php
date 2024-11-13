<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\DownloadBrochure;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class DownloadBrochureController extends Controller
{
    /**
     * Send a brochure to the user based on the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendBrochure(Request $request)
    {
        // Validate data
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated->errors())->withInput();
        }

        $data = $validated->validated();

        //Rate limiting (allow 3 requests per hour per email)
        $key = 'send-brochure:' . $data['email'];
        if (RateLimiter::tooManyAttempts($key, 3)) {
            return redirect()->back()->with('error', 'You have exceeded the rate limit. Please try again later.');
        }

        // Hit the rate limiter (1 hour = 3600 seconds)
        RateLimiter::hit($key, 3600);

        // Send email
        $mail = Mail::to($data['email']);
        if (env('MAIL_CC')) {
            $mail->cc(env('MAIL_CC'));
        }
        if (env('MAIL_BCC')) {
            $mail->bcc(env('MAIL_BCC'));
        }
        $mail->send(new DownloadBrochure($data['name']));

        return redirect()->back()->with('success', 'Brochure sent successfully.');
    }
}
