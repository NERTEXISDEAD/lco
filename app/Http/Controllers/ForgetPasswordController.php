<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view("forget_password");
    }

    public function forget_password(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $phone = $_POST['phone'];


        $data = array(
            'phone' => $phone,
        );


        $ch = curl_init('https://m-api.irgups.ru/eis_abit/forget_password');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, true));
        $res = curl_exec($ch);
        curl_close($ch);
        echo $res;

        //if(auth("web")->attempt($data)){
        //    return redirect(route("home"));
        //}

        //return redirect(route("login"))->withErrors(["login" => "Пользователь не найден"]);
    }
}
