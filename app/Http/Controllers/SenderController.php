<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\RecollMail;
use App\Mail\ProjectMail;

class SenderController extends Controller
{

    public function send_tg() {
        $t_token = "6020376437:AAGppdUrXq_0WAK87-aur-I8kiK-P7F62ns";
        $arr_chat = "381762556, 951892721, 1064906416";

        if($arr_chat) {

            $arr_chat = explode(",",$arr_chat);
            $ch = curl_init();

            for ($i = 0; $i<count($arr_chat); $i++) {
                curl_setopt_array(
                    $ch,
                    array(
                        CURLOPT_URL => 'https://api.telegram.org/bot' . $t_token . '/sendMessage',
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_TIMEOUT => 10,
                        CURLOPT_POSTFIELDS => array(
                            'chat_id' => trim($arr_chat[$i]),
                            'text' => $text,
                            'parse_mode' => "HTML",
                        ),
                    )
                );

                $output = curl_exec($ch);
            }
        }
    }

    public function send_project(Request $request) {

        $data = $request->validate([
            "title" => ['string'],
            "name" => [],
            "phone" => ['required','string'],
            "file" => []
        ]);


        Mail::to(["asmi046@gmail.com"])->send(new ProjectMail($data));

        return ["Сообщение отправлено"];
    }

    public function send_consultation(Request $request) {
        $data = $request->validate([
            "name" => [],
            "phone" => ['required','string']
        ]);

        Mail::to(["asmi046@gmail.com"])->send(new RecollMail($data));


        return ["Сообщение отправлено"];
    }

    public function show_thencs() {
        return view('thencs');
    }
}
