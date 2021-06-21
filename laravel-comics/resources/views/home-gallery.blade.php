@extends('layout.default')


@section('page-title', 'DC Comics')


{{-- @dump($comicsList)         --}}


@section('main-content')

    <section class="comics-gallery dark-bg">
        <div class="wrapper">

            <div class="row gallery-title">
                <h1>
                    Current series
                </h1>
            </div>

            <ul class="row">

                @foreach($comicsList as $key => $comic)
                    
                    <li class="col">

                        <a href="{{ route('comicbook', ['index' => $key]) }}">

                            <div class="card">
                            
                                <div class="cover-container">
                                    <img src="{{ $comic['thumb'] }}" alt="">
                                </div>
                                <h5> {{ $comic['series'] }} </h5>

                            </div>

                        </a>
                    
                    </li>

                @endforeach
            
            </ul>

            <div class="primary-btn btn">
                Load more
            </div>
        
        </div>
    </section>

@endsection

@section('buy-nav')

    <section class="blue-bg buy-nav">

        <div class="wrapper">
        
            <ul>

                <li v-for="link in buyNav">
                    <a :href="link.link">

                        <img class="buy-icon" :src="'/images/buy-comics' + link.src" :alt="link.text">
                        <span>@{{ link.text }}</span>

                    </a>
                </li>
            
            </ul>
        
        </div>

    </section>

@endsection