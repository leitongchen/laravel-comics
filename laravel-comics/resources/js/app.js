require('./bootstrap');

const app = new Vue({

    el: "#app",
    data: {
        navLinks: [
            {
                text: "Characters",
                link: "#",
            },
            {
                text: "Comics",
                link: "#",
            },
            {
                text: "Movies",
                link: "#",
            },
            {
                text: "TV",
                link: "#",
            },
            {
                text: "Games",
                link: "#",
            },
            {
                text: "Collectibles",
                link: "#",
            },
            {
                text: "Videos",
                link: "#",
            },
            {
                text: "Fans",
                link: "#",
            },
            {
                text: "News",
                link: "#",
            },
            {
                text: "Shop",
                link: "#",
                child: [
                    {
                        text: "Shop DC",
                        link: "#",
                    },
                    {
                        text: "Shop DC Collectibles",
                        link: "#",
                    },
                ]
            },



        ],

        buyNav: [
            {
                text: "digital comics",
                src: "-digital-comics.png",
                link: "#"
            },
            {
                text: "dc merchandise",
                src: "-merchandise.png",
                link: "#"
            },
            {
                text: "subscription",
                src: "-subscriptions.png",
                link: "#"
            },
            {
                text: "comic shop locator",
                src: "-shop-locator.png",
                link: "#"
            },
            {
                text: "dc power visa",
                src: "-power-visa.svg",
                link: "#"
            },
        ],

        dcLinks: [
            {
                text: "Terms of use",
                link: "#"
            },
            {
                text: "Privacy policy",
                link: "#"
            },
            {
                text: "Ad choices",
                link: "#"
            },
            {
                text: "Advertising",
                link: "#"
            },
            {
                text: "Jobs",
                link: "#"
            },
            {
                text: "Subscriptions",
                link: "#"
            },
            {
                text: "Talent Workshops",
                link: "#"
            },
            {
                text: "CPSC Certificates",
                link: "#"
            },
            {
                text: "Ratings",
                link: "#"
            },
            {
                text: "Shop help",
                link: "#"
            },
            {
                text: "Contact us",
                link: "#"
            },
        ],
        
        sitesLinks: [
            {
                text: "DC",
                link: "#"
            }, 
            {
                text: "MAD Magazine",
                link: "#"
            }, 
            {
                text: "DC Kids",
                link: "#"
            }, 
            {
                text: "DC Universe",
                link: "#"
            }, 
            {
                text: "DC Power Visa",
                link: "#"
            }, 
        ]
        
    },

})