<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA 1 Wonosari</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="text-center py-5">
    <form class="form-signin" action="{{ route('login.auth') }}" method="POST">
        @csrf
        <img class="mb-4" src="{{ asset('img/Logo_Kemendikbud.svg') }}" alt="" width="72" height="72">
        <h1 class="h5 mb-3 font-weight-normal">Selamat Datang di Sistem Kurikulum <br> <span class="h4 font-weight-bold">
                SMAN 1 Wonosari</span></h1>
        <h1 class="h5 mb-3 font-weight-normal">Silahkan Login</h1>
        @if (session()->has('pesan'))
            <div class="alert alert-danger text-left">
                {{ session()->get('pesan') }}
            </div>
        @endif
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="User Name" required
            autofocus value="{{ old('username') }}">
        @error('username')
            <div class="text-danger text-left">{{ $message }}</div>
        @enderror
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
            required>
        @error('password')
            <div class="text-danger text-left">{{ $message }}</div>
        @enderror
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">SMAN 1 Wonosari &copy; 2022</p>
    </form>
</body>

</html>
