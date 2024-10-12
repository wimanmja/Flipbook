<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
	<head>
		<meta name="viewport" content="width = 1050, user-scalable = no" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('../turnjs/extras/modernizr.2.5.3.min.js') }}"></script>
	</head>
	<body>
		<a href="{{ route('flipbook.index') }}" style="padding: 10px; top: 35px; left: 35px; position: absolute;">
			<button id="add_files" class="btn btn-medium btn-general input-block-level" type="submit">Back</button>
		</a>
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
				@foreach($content as $page)
					<div style="background-image:url({{ asset($page) }})"></div>
				@endforeach
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function loadApp() {
				$('.flipbook').turn({
						width:922,
						height:600,
						elevation: 1,
						gradients: true,
						autoCenter: true
				});
			}
			// Load the HTML4 version if there's not CSS transform
			yepnope({
				test : Modernizr.csstransforms,
				yep: ['{{ asset('../turnjs/lib/turn.js') }}'],
				nope: ['{{ asset('../turnjs/lib/turn.html4.min.js') }}'],
				both: ['{{ asset('../turnjs/css/basic.css') }}'],
				complete: loadApp
			});
		</script>
	</body>
</html>