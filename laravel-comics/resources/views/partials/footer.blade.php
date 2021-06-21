<footer>

    <section class="upper-footer">
        <div class="wrapper">
        
            <div class="left-sect">

                <ul>
                    <h6>DC Comics</h6>  
                    <li v-for="link in navLinks">
                        <a :href="link.link" :class="{'title-style': link.child}">
                            @{{link.text}}
                        </a>

                        <ul>

                            <li v-for="childLink in link.child">
                                <a :href="childLink.link">
                                    @{{ childLink.text }}
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

                <ul>
                    <h6>
                        DC
                    </h6>
                    <li v-for="link in dcLinks">
                        <a :href="link.link">
                            @{{ link.text }}
                        </a>
                    </li>
                
                </ul>

                <ul>
                    <h6>
                        Sites
                    </h6>
                    <li v-for="link in sitesLinks">
                        <a :href="link.link">
                            @{{ link.text }}
                        </a>
                    </li>
                
                </ul>
                
            </div>
            <div>
                <span>All Site Content TM and © 2020 DC Entertainment, unless otherwise noted here. All rights reserved. Cookies Settings</span>
            </div>

        </div>
    </section>
    
    <section class="below-footer">
        <div class="wrapper">
            <button class="btn secondary-btn">
                Sign-up now
            </button>
            <div class="social-links">
                <h6>Follow us</h6>

                <ul>
                    <li>
                        <a href="#">
                            <img src="{{asset('images/footer-facebook.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('images/footer-twitter.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('images/footer-youtube.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('images/footer-pinterest.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('images/footer-periscope.png')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</footer>