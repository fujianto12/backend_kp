@extends('layouts.main')

@section('title', 'Modul Kategori: ' . $module->category->name)

@section('content')
<div class="wrapper">

    <a href="{{ url()->previous() }}">
        <i class="fa fa-arrow-left fa-2x wow fadeInRight mb-4">Kembali</i>
    </a>

    <div class="single container">
        <h2 class="mb-4">Modul Kategori: {{ $module->category->name }}</h2>

        @foreach ($module->category->modules as $modul)
            <div class="single-content wow fadeInUp mb-5">

                @if ($modul->image)
                    <img src="{{ asset('storage/' . $modul->image) }}" alt="{{ $modul->title }}" class="img-fluid mb-3" />
                @endif

                <h2>{{ $modul->title }}</h2>
                <p><strong>Kategori:</strong> {{ $modul->category->name }}</p>
                <div>{!! $modul->content !!}</div>

                <hr>
            </div>
        @endforeach
    </div>

    <div class="single-tags wow fadeInUp">
        <a href="{{ route('client.test.category', $module->category->id) }}" class="btn btn-primary">Mulai Kuis</a>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>
@endsection
