<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/semantic-ui/semantic.css">
	<link rel="stylesheet" href="/semantic-ui/components/dropdown.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
</head>

<body>
	<div id="app" class="ui container" style="padding-top:40px;">
		@section('content') @show()
	</div>
	<script src="/js/app.js"></script>
	<script src="/semantic-ui/semantic.min.js"></script>
	<script src="/semantic-ui/components/dropdown.js"></script>
	<script src="/semantic-ui/components/checkbox.js"></script>

	<script>
		$('.ui.checkbox')
			.checkbox()
		  ;
	</script>
</body>

</html>