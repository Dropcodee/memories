<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Prof Pius Adesanmi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Theme Color Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />

    <!-- News Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/news.css') }}" type="text/css" />
    <!-- / -->

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navigation.css') }}">
    <style>
        .demos-filter {
            margin: 0;
            text-align: right;
        }

        .demos-filter li {
            list-style: none;
            margin: 10px 0px;
        }

        .demos-filter li a {
            display: block;
            border: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444;
        }

        .demos-filter li a:hover,
        .demos-filter li.activeFilter a {
            color: #1ABC9C;
        }

        @media (max-width: 991px) {
            .demos-filter {
                text-align: center;
            }

            .demos-filter li {
                float: left;
                width: 33.3%;
                padding: 0 20px;
            }
        }

        @media (max-width: 767px) {
            .demos-filter li {
                width: 50%;
            }
        }

        .revo-slider-emphasis-text {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }

        .tp-video-play-button {
            display: none !important;
        }

        .tp-caption {
            white-space: nowrap;
        }
    </style>
</head>

<body class="stretched">
    <div id="app wrapper" class="clearfix">
        <main>
            @yield('content')
        </main>
    </div>
    <!-- External JavaScripts
	============================================= -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{{ asset('js/functions.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>

	<script type="text/javascript">
		var tpj=jQuery;
		var revapi50;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_50_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_50_1");
			}else{
				revapi50 = tpj("#rev_slider_50_1").show().revolution({
					sliderType:"carousel",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						onHoverStop:"off",
					},
					carousel: {
						maxRotation: 5,
						vary_rotation: "off",
						minScale: 15,
						vary_scale: "off",
						horizontal_align: "center",
						vertical_align: "center",
						fadeout: "on",
						vary_fade: "on",
						maxVisibleItems: 3,
						infinity: "off",
						space: -80,
						stretch: "off"
					},
					responsiveLevels:[1240,1024,778,480],
					gridwidth:[1024,900,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		}); /*ready*/
	</script>

</body>

</html>
