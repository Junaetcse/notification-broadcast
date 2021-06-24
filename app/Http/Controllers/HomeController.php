<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use App\Notifications\InvoicePaid;
use Mail;

class HomeController extends Controller
{
    //
    public function notificationSent()
    {
        $user = \App\Models\User::first();

        $offerData = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
  
        Notification::send($user, new InvoicePaid($offerData));
        dd('Task completed!');
   
    }
}
