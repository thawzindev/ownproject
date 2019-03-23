<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
		@foreach($employee->transactions as $tran)
			<li>{{ $tran->amount }}</li>
		@endforeach
</body>
</html>