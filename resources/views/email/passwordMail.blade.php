<!DOCTYPE html>
<html Lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Password Reset</title>
</head>
<body>
<h2>The reset code for email {{ $data['email'] }} is:</h2>
<h3>{{ $data['token'] }}</h2>
</body>
</html>