<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Project Management Tool</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>

  	<nav class="_nav--wrapper open">

  		<div class="_nav--topbar">
  			<div class="_nav--toogle-btn">
  				<img class="_nav--icon-menu" src="{{ URL::asset('icons/ic_menu_white_24px.svg')}}">
  				<img class="_nav--icon-back" src="{{ URL::asset('icons/ic_arrow_back_white_24px.svg')}}">
  			</div>	
  		</div>
  		<div class="_nav--sidebar ">

  			<div class="_nav--cover">
  				<div class="_nav--cover-image">
  					<img src="{{ URL::asset('backgrounds/google-material-design-wallpaper-10.jpg') }}">		
  				</div>

  				<div class="_nav--cover-info">
  					<div>Signar Kristiansen</div>
  				</div>
  			</div>

  			<div class="_nav--navitems">

  				<div class="_nav--navitem">
  					<a href="/">
  						<span class="icon">
  							<img src="{{ URL::asset('icons/ic_account_circle_white_24px.svg')}}">
						</span>
						Dashboard
					</a>
  				</div>

  				<div class="_nav--navitem">
  					<a href="/team">
  						<span class="icon">
  							<img src="{{ URL::asset('icons/ic_group_work_white_24px.svg')}}">
						</span>
						My Team
					</a>
  				</div>

  				<div class="_nav--navitem">
  					<a href="/projects">
  						<span class="icon">
							<img src="{{ URL::asset('icons/ic_work_white_24px.svg')}}">
						</span>
						Projects
					</a>
  				</div>
  			</div>

  		</div>

  	</nav>

  	<div class="_master--container open">
	  	@yield('body')
  	</div>


  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

  	<script type="text/javascript">
  		new Vue({
  			el: '#app',
  			data: {
  				projects: [
  				{
  					"title": "Project 1",
  					"short": "Blakd laklkajs fakljs dlfk jasd",
  					tasks: [
  					{
  						"title": "Task 1"
  					}
  					],
  					"members": [
  					{ "name": "Signar" },
  					{ "name": "Signar" },
  					{ "name": "Signar" }
  					]

  				}, 
  				{
  					"title": "Project 2",
  					"short": "Jslkj dwoij ada owidj alwjd ",
  					tasks: [
  					{
  						"title": "Task 1"
  					}
  					],
  					"members": [
  					{ "name": "Signar" },
  					{ "name": "Signar" }
  					]

  				}]
  			}
  		})
  	</script>

  	<script type="text/javascript">
  		$(document).ready(function() {


  		});

  		$("._nav--toogle-btn").on("click", function() {
  			console.log("Toggle Menu");

  			$("._nav--wrapper").toggleClass("open");
  		});

  	</script>
  	<body>
  		</html>