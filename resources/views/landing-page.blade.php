<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA 1 Wonosari</title>
    <link rel="shortcut icon" href="{{ asset('img/sma.png') }}" type="image/x-icon">

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
                                <img src="{{ asset('img/sma.png') }}" alt="" srcset="" width="100">
                            </div>
                            <h1 class="text-center text-uppercase fs-1" style=" font-weight:bolder">
                                Pengumuman Kelulusan <br>SMAN 1 Wonosari
                            </h1>
                            <h4 class="text-center text-uppercase fs-1 p-3 mb-3" style=" font-weight:bolder">
                                tahun pelajaran 2021/2022
                            </h4>
                            {{-- <h5 class="text-left text-black-50">Masukkan NISN anda.</h5> --}}
                            {{-- <label for="nisn" class="form-label mt-3">NISN</label> --}}

                            {{-- Countdown --}}
                            <div id="demo" style="font-size: 2em; font-weight:bold;"></div>
                            <div id="pengumuman" hidden>
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
    </div>
    @include('sweetalert::alert')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("may 5 , 2022 22:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + " Hari - " + hours + " Jam - " +
                minutes + " Menit - " + seconds + " Detik";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("pengumuman").removeAttribute("hidden");
                document.getElementById("demo").style.display = "none";
            }
        }, 1000);
    </script>
</body>

</html>
