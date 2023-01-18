<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
</head>

<body>
    <h2>Dear <span>{{ $details['name'] }}</span></h2>
    <p>You have request for reset your password, if you want to change your password please click bellow link</p>
    <a style="background-color: green; padding : 8px 5px; color: white"
        href="http://127.0.0.1:8000/api/auth/forgot-password/{{ $details['token'] }}/{{ $details['hashEmail'] }}">Verify
        Here</a>
    <br><br><br>
    <p>Thankyou</p>
</body>

</html>
