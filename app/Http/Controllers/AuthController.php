<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("login");
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("login"));
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string'
        ]);

        $login = $_POST['login'];
        $password = $_POST['password'];


        $data = array(
            'login' => $login,
            'password' => $password
        );


        $ch = curl_init('https://m-api.irgups.ru/eis_abit/login');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, true));
        $res = curl_exec($ch);
        curl_close($ch);
        // echo $res;

        return redirect(route("profileMain"));

        //if(auth("web")->attempt($data)){
        //    return redirect(route("home"));
        //}

        //return redirect(route("login"))->withErrors(["login" => "Пользователь не найден"]);
    }

    public function showRegisterForm()
    {
        return view("register");
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'processing' => 'required',
        ]);

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $processing = $_POST['processing'];


        $data = array(
            'name' => $name,
            'surname' => $surname,
            'patronymic' => $patronymic,
            'email' => $email,
            'phone' => $phone,
            'processing' => $processing,
        );


        $ch = curl_init('https://m-api.irgups.ru/eis_abit/register');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, true));
        $res = curl_exec($ch);
        curl_close($ch);
        echo $res;

    }
}