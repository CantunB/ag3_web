<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>404 {{ config('app.name', 'Laravel') }}</title>
	<link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}" />


    <style>
        * {
            -webkit-box-sizing: border-box;
                    box-sizing: border-box;
          }

          body {
            padding: 0;
            margin: 0;
          }

          #notfound {
            position: relative;
            height: 100vh;
          }

          #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
          }

          .notfound {
            max-width: 767px;
            width: 100%;
            line-height: 1.4;
            text-align: center;
            padding: 15px;
          }

          .notfound .notfound-404 {
            position: relative;
            height: 220px;
          }

          .notfound .notfound-404 h1 {
            font-family: 'Kanit', sans-serif;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
            font-size: 186px;
            font-weight: 200;
            margin: 0px;
            background: linear-gradient(130deg, #ffa34f, #FFCA68);
            color:transparent;
            -webkit-background-clip: text;
            background-clip: text;
            text-transform: uppercase;
          }

          .notfound h2 {
            font-family: 'Kanit', sans-serif;
            font-size: 33px;
            font-weight: 200;
            text-transform: uppercase;
            margin-top: 0px;
            margin-bottom: 25px;
            letter-spacing: 3px;
          }


          .notfound p {
            font-family: 'Kanit', sans-serif;
            font-size: 16px;
            font-weight: 200;
            margin-top: 0px;
            margin-bottom: 25px;
          }


          .notfound a {
            font-family: 'Kanit', sans-serif;
            color: #FFCF68;
            font-weight: 200;
            text-decoration: none;
            border-bottom: 1px dashed #FFD768;
            border-radius: 2px;
          }

          .notfound-social>a {
            display: inline-block;
            height: 40px;
            line-height: 40px;
            width: 40px;
            font-size: 14px;
            color: #FFCF68;
            border: 1px solid #efefef;
            border-radius: 50%;
            margin: 3px;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
          }
          .notfound-social>a:hover {
            color: #fff;
            background-color: #FFCF68;
            border-color: #FFCF68;
          }

          @media only screen and (max-width: 480px) {
            .notfound .notfound-404 {
              position: relative;
              height: 168px;
            }

            .notfound .notfound-404 h1 {
              font-size: 142px;
            }

            .notfound h2 {
              font-size: 22px;
            }
          }

    </style>
</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>Oops! Nothing was found</h2>
			<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable. <a href="{{ route('index', app()->getlocale()) }}">Return to homepage</a></p>
			<div class="notfound-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>

</body>

</html>
