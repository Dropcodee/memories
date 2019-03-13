<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pius Adesanmi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/et-line.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bs-filestyle.css') }}" type="text/css" />

    <!-- Theme Color Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        #body {
            background-color: black;
        }

        #content {
            background-color: black;
            color: dimgray;
        }

        #page-title {
            background-color: black;
            color: whitesmoke;
        }

        #headMan {
            color: whitesmoke;
            text-align: center;
        }

        #galleryHeader {
            color: whitesmoke !important;
        }

        #header {
            background-color: rgba(0, 0, 0);
        }
    </style>
</head>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    <!-- External JavaScripts
	============================================= -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    <!-- Footer Scripts
	============================================= -->
    <script src="{{ asset('js/functions.js') }}"></script>
    <script>
        (function() {
              /* Define a variável que dá swipe no lightbox */
              var magnificPopup = $.magnificPopup.instance;

              /* Carrega a função quando clica no lightbox (senão não pega a classe utilizada) */
              $('[data-lightbox="gallery"]').click(function(e) {

                /* Espera carregar o lightbox */
                setTimeout(function() {
                    /* Swipe para a esquerda - Próximo */
                    $(".mfp-container").swipe( {
                      swipeLeft:function(event, direction, distance, duration, fingerCount) {
                        console.log("swipe right");
                        magnificPopup.next();
                      },

                    /* Swipe para a direita - Anterior */
                    swipeRight:function(event, direction, distance, duration, fingerCount) {
                      console.log("swipe left");
                      magnificPopup.prev();
                    },
                    });
                }, 500);
              });

            }).call(this);
    </script>
</body>

</html>
