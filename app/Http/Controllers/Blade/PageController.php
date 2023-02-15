<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Orders;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
  
    public function store(Request $request){
        $data = array(
            'fullname' => $request->get('fullname'),
            'email'    => $request->get('email'),
            'subject'  => $request->get('subject'),
            'time'     => $request->get('time'),
            'message'  => $request->get('message'),
        );

        $message = "<b>Education center !!!</b>\n\n🙎‍♂️ ".$data['fullname']."\n☎️ ".$data['email']."\n🎯 ".$data['subject']."\n🕔".$data['time']."\n📧".$data['message'];
        $this->sendByTelegram($message);
        return redirect()->back()->with('message', 'IT WORKS!');
    }

    function sendByTelegram($message,$chatID = '-1001857659202')//-1001540563062 //1371980494
    {
        $token = '5859655976:AAGEzYorgGKSEhwIHm4_4WV0xMwXwCaF-R4';

        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?parse_mode=HTML&chat_id=" . $chatID;
        $url = $url . "&text=" . urlencode($message);

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-type:application/json']);

        //ssl settings
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
