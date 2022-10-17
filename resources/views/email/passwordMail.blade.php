{{-- <!DOCTYPE html>
<html Lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Password Reset</title>
</head>
<body>
{{-- <h2>The reset code for email {{ $link ['email'] }} is:</h2> --}}
{{-- <h5><a href="{{ $link }}" class="col btn btn-primary w-100 py-3">click here to reset your password</a></h5> --}}
{{-- <h3>{{ $data['token'] }}</h2> --}}
{{-- </body> --}}
{{-- </html> --}}

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