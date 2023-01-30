<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Format</title>
</head>
<body>
	<form action="#" method="POST">
		@csrf
		<textarea rows="20" name="code"></textarea>
		<button>Format</button>
	</form>
	<br/><br/>
	{{$formattedCode}}
</body>
</html>