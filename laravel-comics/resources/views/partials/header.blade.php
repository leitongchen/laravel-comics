<header>

    <div class="upper-nav blue-bg">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        DC POWER VISA
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>Additional DC Sites</span>  
                        <i class="fas fa-sort-down"></i>
                    </a>
                </li>
            </ul>
        
        </div>
    </div>

    <nav>
        <div class="container nav-container">
            
            <div class="logo-container">
                <img src="{{asset('images/dc-logo.png')}}" alt="">
            </div>

            <ul>
                <li v-for="link in navLinks">
                    <a :href="link.link"> @{{ link.text }} </a>
                </li>
            </ul>

            <div class="input-container">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>

        </div>
    </nav>

    <div class="hero">
        
    </div>

</header>