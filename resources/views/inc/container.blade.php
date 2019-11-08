<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>Blog Laravel</title>

				<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />

				<link rel="stylesheet" href="{{asset("/css/app.css")}}"/>
    </head>
    <body>
			@include('layout.header')
		 	<div class="container pt-4">
				@include('inc.messages')
				@yield('content')
		 	</div>
    </body>
</html>
