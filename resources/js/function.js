// custom navbar header
const Header = {
    init: function () {
        let header = document.querySelector("#header");
        let contact = document.querySelector("#header-contact");
        let navbar = document.querySelector("#navbars");
        let text = document.querySelector("#header-contact small");
        let logoW = document.querySelector("#logo-white");
        let logoO = document.querySelector("#logo-orange");
        let btnCovid = document.querySelector("#btn-covid");
        let navbarTheme = header.getAttribute("data-theme");

        if (window.screen.width <= 767) {
            window.addEventListener("scroll", function (e) {
                if (this.window.scrollY > 32.5) {
                    contact.classList.add("header-contact-hidden");
                    contact.classList.remove("py-1.5", "visible", "h-auto");
                    text.classList.add("hidden");
                } else {
                    contact.classList.remove("header-contact-hidden");
                    contact.classList.add("py-1.5", "visible", "h-auto");
                    text.classList.remove("hidden");
                }
            });
            header.classList.add("bg-white", "text-black/90");
            text.classList.add("text-black/90");
            bgWhite();
        } else {
            if (navbarTheme.trim() == "white") {
                window.addEventListener("scroll", function (e) {
                    if (this.window.scrollY > 32.5) {
                        contact.classList.add("header-contact-hidden");
                        contact.classList.remove("py-1.5", "visible", "h-auto");
                        text.classList.add("hidden");
                    } else {
                        contact.classList.remove("header-contact-hidden");
                        contact.classList.add("py-1.5", "visible", "h-auto");
                        text.classList.remove("hidden");
                    }
                });
                header.classList.add("bg-white", "text-black/90");
                text.classList.add("text-black/90");
                bgWhite();
                console.log("asda");
            } else {
                window.addEventListener("scroll", function (e) {
                    if (this.window.scrollY > 32.5) {
                        contact.classList.add("header-contact-hidden");
                        contact.classList.remove("py-1.5", "visible", "h-auto");
                        text.classList.add("hidden");
                    } else {
                        contact.classList.remove("header-contact-hidden");
                        contact.classList.add("py-1.5", "visible", "h-auto");
                        text.classList.remove("hidden");
                    }

                    if (this.window.scrollY > 100) {
                        bgWhite();
                    } else {
                        bgTransparent();
                    }
                });
                text.classList.add("text-white");
            }
        }

        function bgTransparent() {
            navbar.classList.remove("bg-white", "text-black", "shadow-md");
            navbar.classList.add("bg-transparent", "text-white");
            logoW.classList.remove("hidden");
            logoW.classList.add("block");
            logoO.classList.remove("block");
            logoO.classList.add("hidden");
            btnCovid.classList.add("border-gray-100");
            btnCovid.classList.remove("border-gray-500");
        }

        function bgWhite() {
            navbar.classList.add("bg-white", "text-black", "shadow-md");
            navbar.classList.remove("bg-transparent", "text-white");
            logoW.classList.add("hidden");
            logoW.classList.remove("block");
            logoO.classList.add("block");
            logoO.classList.remove("hidden");
            btnCovid.classList.remove("border-gray-100");
            btnCovid.classList.add("border-gray-500");
        }

        // scroll to target
        const hash = window.location.hash;
        if (hash) {
            const target = document.querySelector(window.location.hash);
            if (target) {
                var top = target.offsetTop - 100;
                window.scrollTo({
                    top: top,
                    behavior: "smooth"
                });
            }
        }
    },
};

const Lazyload = {
    init: function () {
        $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            effectTime: 500,
            threshold: 0,
            visibleOnly: true,
            // beforeLoad: function (element) {
            //     console.log("on Load "+ element.data("src"));
            // },
            onError: function (element) {
                console.log("error loading " + element.data("src"));
            },
        });
    },
};

export { Header, Lazyload };
