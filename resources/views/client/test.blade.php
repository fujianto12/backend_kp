@extends('layouts.main')

@section('title', 'Test Kategori')

@section('content')
<div class="container mt-4">
    <h1>Mulai Test</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($categories->isEmpty())
        <p>Tidak ada kategori atau soal yang tersedia.</p>
    @else
        <form action="{{ route('client.test.store', $categories->first()->id) }}" method="POST">
            @csrf

            @foreach ($categories as $category)
                <h2>Kategori: {{ $category->name }}</h2>

                @foreach ($category->questions as $question)
                    <div class="mb-4">
                        <p><strong>{{ $loop->iteration }}. {{ $question->question_text }}</strong></p>

                        @foreach ($question->options as $option)
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       name="questions[{{ $question->id }}]"
                                       id="option{{ $option->id }}"
                                       value="{{ $option->id }}"
                                       required>
                                <label class="form-check-label" for="option{{ $option->id }}">
                                    {{ $option->option_text }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endforeach

            <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
        </form>
    @endif
</div>
@endsection
