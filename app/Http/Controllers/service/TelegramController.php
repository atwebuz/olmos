<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class TelegramController extends Controller
{

    public string $call_api = "https://api.telegram.org/bot";
    private string $token = "5882085552:AAHkn4ZmEmm0wrw4FyqxC0NVlJRpcZhWCWo";
    private string $admin = "-1001856767252";

    public $headers = [
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',
        'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    ];

    public function callback(){
        //
    }

    public function bot($method, $datas=[]){
        $url = $this->call_api.$this->token."/".$method;
        $client = new Client();
        try {
            $request = $client->requestAsync('POST', $url, ['form_params' => $datas]);
            $response = $request->wait();
            $statusCode = $response->getStatusCode();
        } catch (RequestException $e) {
            $statusCode = 0;
        }

        if ($statusCode == 200){
            $query = $response->getBody()->getContents();
            $result = json_decode($query);
        }else{
            $result = 'Error sending request, error_code: '.$statusCode;
        }

        return $result;
    }

    public function sendAction($chat_id, $action){
        $this->bot('sendChatAction',[
            'chat_id'=>$chat_id,
            'action'=>$action
        ]);
    }

    public function sendMessage($chat_id, $text, $parse_mod = 'html', $reply_markup = NULL){
        $this->bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'html',
            //'reply_markup' => $reply_markup
        ]);
    }

    public function sendMessageTest($chat_id, $text, $parse_mod = 'html', $reply_markup = NULL){
        $response = $this->bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'html',
            //'reply_markup' => $reply_markup
        ]);

        if(!(int)isset($response->result)){
            sendTelegram('me', json_encode($response)." \n\nChatID: ".$chat_id);
            return json_encode($response);
        }

        return 1;
    }


    // Qoshimcha ish bajaruvchi funksiyalar

    public function index(Request $request){

        $data = '[{"id":3,"name":"Tovuqli achchiq lavash","price":"23000","image":"\/food\/achchiq_lavash.png"},{"id":2,"name":"Tovuq va pishloqli lavash","price":"26000","image":"\/food\/lavash.png"}]';

        $result = json_decode($data);

        dd($result);

        return 1;

        $this->sendMessage($this->admin, "Test Laravel Request");
        return 1;
    }

    public function alertOrder($data){

        $products = json_decode($data->products);
        $products_field = "";

        foreach ($products as $key => $product){
            $products_field .= ++$key.". ".$product->name." (".$product->price.")\n";
        }

$message = "Buyurtma raqami: <b>#".$data->id."</b>\n\n
Name: " . $data->name . "\n
Phone: " . $data->phone . "\n
Address: " . $data->address . "

\n\n".$products_field."

🤑 Total Price: " . $data->total;

        $this->sendMessage($this->admin, $message);

        return 1;
    }

}
