<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Sekolah</title>

    {{-- link css  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- link css native --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>

    <div class="header">
        <div class="judul"><p style="font-size: 20px; padding-top: 10px;">Perpus.<span style="color: blue;">Sekolah</span></p></div>
        <div class="navar">
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>Copyright © 2023 <a href="https://www.instagram.com/bntngsnts_/"><span>Bintang Santosa</span></a></p>
    </div>
</body>
</html>