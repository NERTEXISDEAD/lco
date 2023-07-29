<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel с upread.ru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Отправка</h1>
        </div>
        <div class="row">
            <form action=" " method="post" style="text-align: center; margin: auto;">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Ошибка!
                </div>
                @endif
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        placeholder="Title" value="{{ old('title') }}" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Отправить!</button>
            </form>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>