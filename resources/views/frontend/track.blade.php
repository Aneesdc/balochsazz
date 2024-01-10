<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/mixtape/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 19:52:13 GMT -->

<head>
    <title>Mixtape</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mixtape template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{url ('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url ('frontend/styles/responsive.css')}}">
    <script nonce="50bd01e5-7d0e-4505-9ded-209ec5d47e16">
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


        <div class="featured_album">
            <div class="background_image featured_background" style="background-image:url('frontend/images/featured.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="section_title_container">
                            <div class="section_title">
                                <h1>Tracks</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured_row row-lg-eq-height">

                    <div class="col-md-6">
                        <div class="featured_album_image">
                            <div class="image_overlay"></div>
                            <div class="background_image" style="background-image:url('frontend/images/featured_album.jpg')"></div>

                        </div>
                    </div>

                    <div class="col-md-6 featured_album_col">
                        <div class="featured_album_player_container d-flex flex-column align-items-start justify-content-center">
                            <div class="featured_album_player">
                                <div class="featured_album_title_bar d-flex flex-row align-items-center justify-content-start">
                                    <div class="featured_album_title_container">
                                        <div class="featured_album_artist">Maria Smith</div>
                                        <div class="featured_album_title">Love is all Around</div>
                                    </div>
                                    <div class="featured_album_link ml-auto"><a href="#">buy it on itunes</a></div>
                                </div>
                                <!-- music start -->
                                <div id="jplayer_1" class="jp-jplayer"></div>
                                <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                    <div class="jp-type-playlist">
                                        <div class="jp-playlist">
                                            <ul>
                                                @foreach($tracks as $track)
                                                <li>
                                                    <div><?php echo $track->track_title; ?></div>
                                                    <!--     <div class="jp-title" aria-label="title"><?php /* echo $song['artist']; */ ?></div> -->
                                                    <div class="jp-mp3" data-media="{{$track->audio_file}}"></div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="player_details d-flex flex-row align-items-center justify-content-start">
                                            <div class="jp-details">
                                                <div>playing</div>
                                                <div class="jp-title" aria-label="title">&nbsp;</div>
                                            </div>
                                            <div class="jp-controls-holder ml-auto">
                                                <button class="jp-play" tabindex="0"></button>
                                            </div>
                                        </div>
                                        <div class="player_controls">
                                            <div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
                                                <div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
                                                    <div>
                                                        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                                    </div>
                                                    <div class="jp-progress">
                                                        <div class="jp-seek-bar">
                                                            <div class="jp-play-bar"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
                                                    <button class="jp-mute" tabindex="0"></button>
                                                    <div class="jp-volume-bar">
                                                        <div class="jp-volume-bar-value"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-no-solution">
                                            <span>Update Required</span>
                                            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end music  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shows">
            <div class="container">
                <div class="row" style="z-index:10;">
                    <div class="col">
                        <div class="section_title_container">
                            <div class="section_subtitle">Events</div>
                            <div class="section_title">
                                <h1>Upcoming Shows</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shows_row">

                    <div class="col-lg-8 order-lg-1 order-2 shows_list_col">
                        <div class="shows_list_container">
                            <ul class="shows_list">

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">18/07</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Electric Castle Festival</a></div>
                                        <div class="show_location">Cluj, Romania</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">20/07</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Ultra Music Festival</a></div>
                                        <div class="show_location">Miami, USA</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">03/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Untold Festival</a></div>
                                        <div class="show_location">Cluj, Romania</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">11/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Sun Kissed Festival</a></div>
                                        <div class="show_location">Paris, France</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">18/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Spanish Festival</a></div>
                                        <div class="show_location">Madrid, Spain</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <div class="show_date">25/08</div>
                                    </div>
                                    <div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
                                        <div class="show_name"><a href="#">Vikings Festival</a></div>
                                        <div class="show_location">Oslo, Norway</div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="show_shop trans_200"><a href="#">Buy Tickets</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="shows_image">
                            <div class="image_overlay"></div>
                            <img src="{{url ('frontend/images/shows.jpg')}}" alt="https://unsplash.com/@anthonydelanoix">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="extra">
            <div class="extra_container">
                <div class="background_image" style="background-image:url('frontend/images/extra.jpg')"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="extra_content d-flex flex-column align-items-start justify-content-center">
                                <div class="extra_title">
                                    <h1>Get your tickets now!</h1>
                                </div>
                                <div class="extra_text">
                                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum</p>
                                </div>
                                <div class="extra_button"><a href="#">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend/footer')
    </div>
    <script src="{{url ('frontend/js/jquery-3.2.1.min.js')}}"></script>
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
    <script src="{{url ('frontend/js/custom.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js"></script>
    <script>
        $(document).ready(function() {
            new jPlayerPlaylist({
                jPlayer: "#jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, [
          
            ], {
                swfPath: "/path/to/jplayer",
                supplied: "mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true
            });
        });
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82f61be1bb5c7028","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/mixtape/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 19:52:28 GMT -->

</html>