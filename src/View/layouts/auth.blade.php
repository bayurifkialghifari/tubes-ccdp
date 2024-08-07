<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ url('admin/img/icons/icon-48x48.png') }}" />

	<title>@yield('title')</title>

	<link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<div class="main">
			<main class="content">
                @yield('content')
			</main>
		</div>
	</div>

    <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js" data-navigate-once="true"></script>

</body>

</html>
