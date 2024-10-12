<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
  <head>
    <meta name="viewport" content="width = 1200, user-scalable = no" />
    <script type="text/javascript" src="../turnjs/extras/jquery.min.1.7.js"></script>
    <script type="text/javascript" src="../turnjs/extras/modernizr.2.5.3.min.js"></script>
  </head>
  <body>
    <div class="flipbook-viewport">
        <div class="container">
            <div class="flipbook">
                <div style="background-image:url(../turnjs/pages/1.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/2.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/3.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/4.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/5.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/6.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/7.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/8.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/9.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/10.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/11.jpg)"></div>
                <div style="background-image:url(../turnjs/pages/12.jpg)"></div>
            </div>
        </div>
    </div>

    <div class="navigation" style="display: block;"></div>

    <script type="text/javascript">
        function loadApp() {
            $('.flipbook').turn({
                    width:922,
                    height:600,
                    elevation: 50,
                    gradients: true,
                    autoCenter: true
            });
        }

        yepnope({
            test : Modernizr.csstransforms,
            yep: ['../turnjs/lib/turn.js'],
            nope: ['../turnjs/lib/turn.html4.min.js'],
            both: ['../turnjs/css/basic.css'],
            complete: loadApp
        });
    </script>
  </body>
</html>