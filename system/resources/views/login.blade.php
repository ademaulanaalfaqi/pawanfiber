<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pawan Fiber</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ url('public/admin') }}/html/dist/csslogin/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/html/dist/csslogin/css/style.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <h2>Pawan Fiber</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Your Email" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" placeholder="Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info form-submit"><i class="fa fa-save"></i>login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ url('public/admin') }}/html/dist/csslogin/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('public/admin') }}/html/dist/csslogin/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>