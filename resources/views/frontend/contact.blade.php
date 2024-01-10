<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/mixtape/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 19:52:42 GMT -->

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mixtape template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url ('frontend/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{ url ('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('frontend/styles/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('frontend/styles/contact_responsive.css')}}">
    <script nonce="5c004af2-5fa1-4106-a4e0-6cccd44be4b7">
        (function(w, d) {
            ! function(j, k, l, m) {
                j[l] = j[l] || {};
                j[l].executed = [];
                j.zaraz = {
                    deferred: [],
                    listeners: []
                };
                j.zaraz.q = [];
                j.zaraz._f = function(n) {
                    return async function() {
                        var o = Array.prototype.slice.call(arguments);
                        j.zaraz.q.push({
                            m: n,
                            a: o
                        })
                    }
                };
                for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                j.zaraz.init = () => {
                    var q = k.getElementsByTagName(m)[0],
                        r = k.createElement(m),
                        s = k.getElementsByTagName("title")[0];
                    s && (j[l].t = k.getElementsByTagName("title")[0].text);
                    j[l].x = Math.random();
                    j[l].w = j.screen.width;
                    j[l].h = j.screen.height;
                    j[l].j = j.innerHeight;
                    j[l].e = j.innerWidth;
                    j[l].l = j.location.href;
                    j[l].r = k.referrer;
                    j[l].k = j.screen.colorDepth;
                    j[l].n = k.characterSet;
                    j[l].o = (new Date).getTimezoneOffset();
                    if (j.dataLayer)
                        for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                ...x[1],
                                ...y[1]
                            })), {}))) zaraz.set(w[0], w[1], {
                            scope: "page"
                        });
                    j[l].q = [];
                    for (; j.zaraz.q.length;) {
                        const z = j.zaraz.q.shift();
                        j[l].q.push(z)
                    }
                    r.defer = !0;
                    for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                        try {
                            j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                        } catch {
                            j[l]["z_" + B.slice(7)] = A.getItem(B)
                        }
                    }));
                    r.referrerPolicy = "origin";
                    r.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                    q.parentNode.insertBefore(r, q)
                };
                ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="super_container">

        @include('frontend/header')

        <div class="menu">
            <div>
                <div class="menu_overlay"></div>
                <div class="menu_container d-flex flex-column align-items-start justify-content-center">
                    <div class="menu_log_reg">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                    <nav class="menu_nav">
                        <ul class="d-flex flex-column align-items-start justify-content-start">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="music.html">Music</a></li>
                            <li><a href="blog.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="home">
            <div class="home_inner">

                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_subtitle">Just us</div>
                        <div class="home_title">Contact</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <div class="contact_title">Send us a message</div>
                            @include('layouts/errormessage')
                            <form action="{{route ('send')}}" method="post"  class="contact_form" id="contact_form">
                                @csrf
                                <input type="text" class="contact_input" name="name" placeholder="Name" >
                                <input type="email" class="contact_input" name="email" placeholder="E-mail" >
                                <input type="text" class="contact_input" placeholder="Subject" name="subject">
                                <textarea class="contact_input contact_textarea" name="message" placeholder="Message" ></textarea>
                                <button class="contact_button">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 contact_col">
                        <div class="contact_info">
                            <div class="contact_title">Where to find us</div>
                            <div class="contact_text">
                                <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
                            </div>
                            <div class="contact_info_list">
                                <ul>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>Address</div>
                                        </div>
                                        <div>GHAZI TOWN PHASE 2 MALIR KARACHI PAKISTAN</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>Phone</div>
                                        </div>
                                        <div>+92-322-330544-2</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>E-mail</div>
                                        </div>
                                        <div><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f980968c8b94989095b99e94989095d79a9694">[aneesdc890@gmail.com&#160;]</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend/footer')
    </div>
    <script src="{{ url ('frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ url ('frontend/styles/bootstrap-4.1.2/popper.js')}}"></script>
    <script src="{{ url ('frontend/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{ url ('frontend/plugins/easing/easing.js')}}"></script>
    <script src="{{ url ('frontend/plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/jPlayer/jquery.jplayer.min.js')}}"></script>
    <script src="{{ url ('frontend/plugins/jPlayer/jplayer.playlist.min.js')}}"></script>
    <script src="{{ url ('frontend/js/contact.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82f61bfdbe0e7028","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/mixtape/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 19:52:44 GMT -->

</html>