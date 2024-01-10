<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/mixtape/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 19:52:32 GMT -->

<head>
    <title>Albums</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mixtape template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{url ('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/styles/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/styles/about_responsive.css')}}">
    <script nonce="51eede58-8cc0-4156-8d64-d9fcf7361e01">
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

        @include('frontend/header');
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

                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{url ('frontend/images/about.jpg')}}" data-speed="0.8"></div>
                <div class="home_container">
                    <div class="home_content text-center">
                        <div class="home_title">Albums</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="discs">
            <div class="container">
                <div class="row discs_row">
                    @foreach($albums as $alb)
                    <div class="col-xl-4 col-md-6">
                        <div class="disc">
                            <a href="{{route  ('track',$alb->id)}}">
                                <div class="disc_image"><img src="{{url ('storage/album_image/'.$alb->album_image)}}" width="350px" height="350px" alt="https://unsplash.com/@alicemoore"></div>
                                <div class="disc_container">
                                    <div>
                                        <div class="disc_content_5">
                                            <div class="disc_title">{{$alb->album_name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="milestones">
            <div class="milestones_container">
                <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{url ('frontend/images/milestones.jpg')}}" data-speed="0.8"></div>
                <div class="container">
                    <div class="row milestones_row">

                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="{{url ('frontend/images/icon_1.svg')}}" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="298" data-sign-after="k">0</div>
                                    <div class="milestone_text">Albums sold</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="{{url ('frontend/images/icon_2.svg')}}" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="183">0</div>
                                    <div class="milestone_text">Live Concerts</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="{{url ('frontend/images/icon_3.svg')}}" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="37">0</div>
                                    <div class="milestone_text">Awards won</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 milestone_col">
                            <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                <div class="milestone_icon"><img src="{{url ('frontend/images/icon_4.svg')}}" alt="https://www.flaticon.com/authors/smashicons"></div>
                                <div class="milestone_content">
                                    <div class="milestone_counter" data-end-value="14">0</div>
                                    <div class="milestone_text">New Singles</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend/footer')
    </div>
    <script src="{{url ('frontend/js/jquery-3.2.1.min.js')}}">
    </script>
    <script src="{{url ('frontend/styles/bootstrap-4.1.2/popper.js')}}"></script>
    <script src="{{url ('frontend/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{url ('frontend/plugins/easing/easing.js')}}"></script>
    <script src="{{url ('frontend/plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/jPlayer/jquery.jplayer.min.js')}}"></script>
    <script src="{{url ('frontend/plugins/jPlayer/jplayer.playlist.min.js')}}"></script>
    <script src="{{url ('frontend/js/about.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82f61bf85a116f82","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/mixtape/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 19:52:38 GMT -->

</html>