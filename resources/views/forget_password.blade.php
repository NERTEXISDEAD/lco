<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium text-center">Забыли пароль</h1>

            <form method="POST" action="{{ route('forget_password_process') }}" class="space-y-5 mt-5">
                @csrf

                <input name="phone" type="text"
                    class="w-full h-12 border border-gray-800 rounded px-3 @error('phone') border-red-500 @enderror"
                    placeholder="Введите номер телефона" />

                @error('phone')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="{{ route('login') }}" class=" font-medium text-blue-900 hover:bg-blue-300 rounded-md
                        p-2">Страница входа</a>
                </div>

                <button type="submit"
                    class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Отправить</button>
            </form>
        </div>
    </div>
</body>




</html>