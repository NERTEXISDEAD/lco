<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium text-center">Регистрация</h1>

            <form action="{{ route('register_process') }}" class="space-y-5 mt-5" method="POST">
                @csrf

                <input name="name" type="text"
                    class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border border-red-500 @enderror"
                    placeholder="Введите имя" />

                @error('name')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <input name="surname" type="text"
                    class="w-full h-12 border border-gray-800 rounded px-3 @error('surname') border border-red-500 @enderror"
                    placeholder="Введите фамилию" />

                @error('surname')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <input name="patronymic" type="text"
                    class="w-full h-12 border border-gray-800 rounded px-3 @error('patronymic') border border-red-500 @enderror"
                    placeholder="Введите отчество" />

                @error('patronymic')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <input name="email" type="text"
                    class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border border-red-500 @enderror"
                    placeholder="Введите email" />

                @error('email')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <input name="phone" type="text" class="w-full h-12 border border-gray-800 rounded px-3"
                    placeholder="Введите телефон" />

                @error('phone')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="true" name="processing" id="accept_2"
                        onclick="checkaccept(1);">
                    <label class="form-check-label" for="accept_2">Даю
                        <a href="https://www.irgups.ru/abitcab/download_document.php?mode=templates&templates=1"
                            target="_blank">согласие на обработку персональных данных</a>
                    </label>
                </div>

                @error('processing')
                <p class="text-red 500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="{{ route('login') }}"
                        class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>
                </div>

                <button type="submit"
                    class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>


</html>