@extends('layout.default')

@section('page-title', 'Fumetto')



@section('main-content')

    <section class="comic-page">
    
        <div class="blue-bg cover-sect">
            <div class="wrapper">
                <img class="comic-cover" src="{{ $comic['thumb'] }}" alt="">
            </div>

        </div>

        <div class="main-sect">

            <div class="wrapper row">
            
                <div class="col-8">
                    <div class="description-box">
                        <h3>
                            {{ $comic['title'] }}
                        </h3>
                        <table>
                            <tr>
                                <td>
                                    <span>U.S. Price: {{ $comic['price'] }}</span>
                                    <span>Available</span>
                                </td>
                                
                                <td>Check Availability</td>
                            </tr>
                        </table>

                        <p>
                            {{ $comic['description'] }}
                        </p>
                    
                    </div>
                </div>

                <div class="col-4">
                    <div class="advs-box">
                        <span class="advs-tag">Advertisement</span>
                        <img src="{{asset('images/superman.jpg')}}" alt="">

                    </div>
                </div>
            
            </div>
    

        </div>

        <div class="details-sect gray-bg">

            <div class="wrapper">

                <div class="row">

                    <div class="talent-box col-6">

                        <div class="card">
                            <h4>Talent</h4>

                            <div class="details-row">
                                <span class="col-4">Art by:</span>
                                
                                <ul class="col-8">
                                    
                                    @foreach($comic['artists'] as $artist)
                                    <li>
                                       
                                       {{ $artist }}
                                       
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="details-row">
                                <span class="col-4">Written by:</span>
                                
                                <ul class="col-8">
                                    
                                    @foreach($comic['writers'] as $writer)
                                    <li>
                                       
                                       {{ $writer }}
                                       
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="specs-box col-6">

                        <div class="card">
                            <h4>Specs</h4>
                            
                            <div class="details-row">
                                <span class="col-4">Series:</span>
                                
                                <p>
                                    {{ $comic['series'] }}
                                </p>
                            </div>
                            <div class="details-row">
                                <span class="col-4">US Price:</span>
                                
                                <p>
                                    {{ $comic['price'] }}
                                </p>
                            </div>
                            <div class="details-row">
                                <span class="col-4">On Sale Date:</span>
                                
                                <p>
                                    {{ $comic['sale_date'] }}
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



@endsection

@section('buy-nav')

    {{-- <section class="blue-bg buy-nav-comic">

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

    </section> --}}

@endsection