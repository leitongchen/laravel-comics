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
        ]
    },

})