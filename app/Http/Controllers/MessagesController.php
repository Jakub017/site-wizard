<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Models\Client as DashboardClient;
use Illuminate\Support\Facades\Mail;
use App\Mail\GroupEmail;

class MessagesController extends Controller
{
    
    public function index()
    {
        $groups = Group::get();
        return view('dashboard.messages.messages-index', compact('groups'));
    }

   public function sendMessage(Request $request)
    {
        $groups = $request->input('group'); // Groups IDs
        $message = $request->input('body'); // Message body
        $media = $request->file('media'); // file
        
        $twilioAccountSid = env('TWILIO_AUTH_SID'); 
        $twilioAuthToken = env('TWILIO_AUTH_TOKEN');     
        $twilioPhoneNumber = env('TWILIO_WHATSAPP_FROM');

        $twilio = new Client($twilioAccountSid, $twilioAuthToken);

        $users = DashboardClient::where(function ($query) use ($groups) {
        foreach ($groups as $group) {
        $query->orWhereHas('groups', function ($query) use ($group) {
            $query->where('group_id', $group);
        });
    }})->get();

        foreach ($users as $user) {
            $client = DashboardClient::where('id', $user->id)->first();

            $messageOptions = [
                'from' => "whatsapp:" . $twilioPhoneNumber,
                'body' => $message,
            ];

            if($media && $media->isValid()) {
                $path = $media->store('media', 'public');
                $mediaPath = asset('storage/' . $path);
                $messageOptions['mediaUrl'] = $mediaPath;
            }

            $twilio->messages->create("whatsapp:" . $client->phone, $messageOptions);
            
        }

        return redirect()->route('messages.index')->with('success', 'Wiadomości Whatsapp zostały wysłane.');
    }



   public function sendMail(Request $request)
{
    $groups = $request->input('group'); // Groups IDs
    $message = $request->input('body'); // Message body

    $users = DashboardClient::where(function ($query) use ($groups) {
    foreach ($groups as $group) {
        $query->orWhereHas('groups', function ($query) use ($group) {
            $query->where('group_id', $group);
        });
    }})->get();

    foreach ($users as $user) {
        Mail::to($user->email)->send(new GroupEmail($message));
    }

    return redirect()->route('messages.index')->with('success', 'Wiadomości Email zostały wysłane.');
}

}
