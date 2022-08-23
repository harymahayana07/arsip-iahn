<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> {{ $title }} </title>
    <link href="admin/css/styles.css" rel="stylesheet" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>
<style>
    #shadow-login {
        background-color: white;
        box-shadow: 5px 5px 15px 10px #22269b;
    }
</style>

<body style="background-image: url('/admin/assets/img/bg-login2.png');">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            @yield('main')
        </div>
        <div id="layoutAuthentication_footer">
            @include('includes.auth-footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('admin/js/scripts.js') }}"></script>
</body>

</html>