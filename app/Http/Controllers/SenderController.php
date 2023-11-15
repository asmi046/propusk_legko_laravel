<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\RecollMail;
use App\Mail\SalesMail;
use App\Mail\BuyMail;

class SenderController extends Controller
{

    public function send_tg($text) {
        $t_token = "6020376437:AAGppdUrXq_0WAK87-aur-I8kiK-P7F62ns";
        $arr_chat = "381762556, 57815731, 951892721, 1064906416";

        if($arr_chat) {

            $output = "";
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

                $output .= curl_exec($ch);
            }
        }

        return $output;
    }

    public function send_salses(Request $request) {

        $data = $request->validate([
            "name" => [],
            "phone" => ['required','string'],
            "truck_count" => ['required','string']
        ]);

        $content_tg = "<b>Запрос на скидку:</b>\n\r";
        $content_tg .= "Имя: ".$request->get("name")."\n\r";
        $content_tg .= "Телефон: ".$request->get("phone")."\n\r";
        $content_tg .= "Количество грузовиков: ".$request->get("truck_count")."\n\r";

        $tt = $this->send_tg("$content_tg");

        // dd($tt);

        // Mail::to(["asmi046@gmail.com"])->send(new SalesMail($data));

        return view('thencs');
    }

    public function send_pay(Request $request) {

        $data = $request->validate([
            "name" => [],
            "phone" => ['required','string'],
            "zone" => ['required','string'],
            "day_time" => ['required','string'],
            "diurnal_pass" => ['required','string'],
        ]);

        $content_tg = "<b>Заказ пропуска:</b>\n\r";
        $content_tg .= "Имя: ".$request->get("name")."\n\r";
        $content_tg .= "Телефон: ".$request->get("phone")."\n\r";
        $content_tg .= "Тип пропуска: ".$request->get("diurnal_pass")."\n\r";
        $content_tg .= "Пропуск на: ".$request->get("zone")."\n\r";
        $content_tg .= "Период: ".$request->get("day_time")."\n\r";

        $tt = $this->send_tg("$content_tg");

        // dd($tt);

        Mail::to(["asmi046@gmail.com"])->send(new BuyMail($data));

        return view('thencs');
    }

    public function send_consultation(Request $request) {
        $data = $request->validate([
            "name" => [],
            "phone" => ['required','string']
        ]);

        $content_tg = "<b>Новое сообщение с сайта:</b>\n\r";
        $content_tg .= "Имя: ".$request->get("name")."\n\r";
        $content_tg .= "Телефон: ".$request->get("phone")."\n\r";

        $this->send_tg($content_tg);
        // Mail::to(["asmi046@gmail.com"])->send(new RecollMail($data));


        return ["Сообщение отправлено"];
    }

    public function show_thencs() {
        return view('thencs');
    }

    public function show_buy() {
        return view('buy');
    }
}
