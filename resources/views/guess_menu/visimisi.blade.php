@extends('layouts.main')

@section('title', 'VISI MISI')

@section('content')
<div class="section-vision-mission">
    <img src="{{asset('img/exca.jpg')}}"
         alt="Vision Mission Background"
         class="background-vision-mission">

    <div class="container-vision-mission">
        <h1 class="title-vision-mission text-white text-shadow">VISION<br>&<br>MISSION</h1>
        <div class="line-vision-mission"></div>
    </div>
</div>

<div class="teks-vision-mision">
    <div class="container">
    <div class="icon-vision-mission">
        <div class="icon-top"></div>
        <div class="icon-bottom"></div>
    </div>
    <div class="content-vision">
        <h2 class="title-vision">Vision</h2>
        <p class="text-vision">
            Menjadi sebagai salah satu perusahaan kelas nasional dengan menyediakan jasa dan solusi yang terbaik bagi konsumen.
        </p>
    </div>

     <div class="icon-vision-mission">
        <div class="icon-top"></div>
        <div class="icon-bottom"></div>
    </div>
    <div class="content-mission">
        <h2 class="title-mission">Mission</h2>
        <ul class="list-mission">
            <li>Menyediakan jasa dengan efisiensi dan kualitas kerja yang tinggi. Baik dengan menjaga kondisi alat yang prima dan mengembangkan kualitas Sumber Daya Manusia secara berkesinambungan.</li>
                    <li>Menciptakan lingkungan kerja yang sehat dan menjalin kerjasama yang harmonis.</li>
                    <li>Mengembangkan perusahaan dengan terus menambah customer base yang ada.</li>
                    <li>Menjaga kelangsungan perusahaan di berbagai bidang industri seperti pertambangan, minyak bumi dan gas, perkebunan, dan infrastruktur.</li>
        </ul>
    </div>
</div>

</div>
</div>

</div>

@endsection
