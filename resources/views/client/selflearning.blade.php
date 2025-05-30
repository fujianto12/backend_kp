@extends('layouts.main')

@section('title', 'Self Learning')

@section('content')
    <!-- selflearning Start -->
    <div class="selflearning">
        <div class="container">
            <div class="section-header text-center">
                <h2>Menu Self Learning</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="selflearning-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $category)
                            <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row selflearning-container">
                @foreach ($categories as $index => $category)
                    @php
                        $firstModule = $category->modules->first(); // modul pertama di kategori
                        $classes = ['first', 'second', 'third'];
                        $class = $classes[$index % count($classes)];
                        $delay = 0.1 * ($index + 1);
                        $imgNumber = $index + 1;
                    @endphp

                    <div class="col-lg-4 col-md-6 col-sm-12 selflearning-item {{ $class }} wow fadeInUp"
                        data-wow-delay="{{ $delay }}s">
                        <div class="selflearning-warp {{ $class === 'second' && $index % 6 == 4 ? 'border-2' : '' }}">
                            <div class="selflearning-img">
                                <img src="img/selflearning-{{ $imgNumber }}.jpg" alt="Image">
                                <div class="selflearning-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare
                                        velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="selflearning-text">
                                <h3>{{ $category->name }}</h3>
                                <a href="{{ $firstModule ? route('modules.show', $firstModule->id) : '#' }}"
                                    class="btn">></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-12 load-more">
                    <a class="btn" href="#">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- selflearning End -->
@endsection
