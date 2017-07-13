<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi Blog</title>

 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md12">
				<h1 class="h1">Bitacora de Vuelo</h1>
			</div>
		</div>
		
		<hr>

		<table class="table table-striped">

			@yield('content')
		
		</table>
	</div>

	<footer class="page-footer">
      <div class="container text-center">
        <div class="copy-right mt-50">
                <a href="{{ route('about') }}" class="alt-font">© Dev for Yamila Marucci 2017</a>
        </div>
      </div>
    </footer>

</body>
</html>