@extends('layout.default')


@section('page-title', 'DC Comics')


@dump($comicsList)        


@section('comics-gallery')

    <section class="comics-gallery dark-bg">
        <div class="wrapper">

            <div class="row gallery-title">
                <h1>
                    Current series
                </h1>
            </div>

            <ul class="row">

                @foreach($comicsList as $comic)
                    
                    <li class="col">

                        <a href="#">

                            <div class="card">
                            
                                <div class="cover-container">
                                    <img src="{{ $comic['thumb'] }}" alt="">
                                </div>
                                <h6> {{ $comic['series'] }} </h6>

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