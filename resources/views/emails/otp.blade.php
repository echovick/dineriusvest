<!DOCTYPE html>
<html>
<head>
    <title>OTP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Your OTP</h3>
                <p>Hello {{ $email }}, Your OTP for verification is: {{ $otp }}</p>
                <p class="mt-3">Best Regards</p>
                <p>Dineriusvest Team</p>
            </div>
        </div>
    </div>
</body>
</html>
