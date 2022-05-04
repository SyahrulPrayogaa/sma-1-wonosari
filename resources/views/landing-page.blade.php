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

    <style>
        .hero {
            height: 100vh;
            position: relative;
            background-size: cover;
            background-image: url('{{ asset('img/bg.jpg') }}');

        }

        .hero::after {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0;
            /* background-image: linear-gradient(to top,
                    rgba(0, 0, 0, 0.9),
                    rgba(0, 0, 0, 0.9)); */
            /* background-color: rgb(255, 255, 255, 0.5) */
            background-color: rgba(0, 0, 0, 0.7)
        }

        .hero .container {
            display: relative;
            z-index: 999;
        }

    </style>
</head>

<body>
    <div class=" hero d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <div class="card mx-auto text-white bg-dark">
                        <div class="card-body text-center">
                            <div class="logo p-3 mb-3">
                                <img src="{{ asset('img/Logo_Kemendikbud.svg') }}" alt="" srcset="" width="100">
                                {{-- <img src="{{ asset('img/logo.png') }}" alt="" srcset="" width="100"> --}}
                            </div>
                            <h1 class="text-center text-uppercase fs-1 p-3 mb-3" style=" font-weight:bolder">
                                Pengumuman Kelulusan SMA 1 Wonosari
                            </h1>
                            {{-- <h5 class="text-left text-black-50">Masukkan NISN anda.</h5> --}}
                            {{-- <label for="nisn" class="form-label mt-3">NISN</label> --}}
                            <form action="{{ route('pengumuman.index') }}" method="get">
                                @csrf
                                <div class="input-group mb-3 px-5">
                                    <input type="text" class="form-control" id="nisn" name="nisn"
                                        aria-describedby="basic-addon3" placeholder="Masukkan 10 digit NISN anda"
                                        required>
                                </div>
                                <button class="btn btn-primary mt-2">LIHAT HASIL PENGUMUMAN</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
