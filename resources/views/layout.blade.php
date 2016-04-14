<!DOCTYPE html>
<html>
<head>
    <title>DOZ Candidate Registry</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#doz-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">DOZ Candidates</a>
        </div>

        <div class="collapse navbar-collapse" id="doz-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('listCandidates')}}">View all</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')


<script src="http://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" rel="script" type="text/javascript"></script>
<script src="js/sweetalert.min.js" rel="script" type="text/javascript"></script>
@if(session()->has('flash_message'))
    <script type="text/javascript">
        swal({
            title: '{{session('flash_message.title')}}',
            text: '{{ session('flash_message.message') }}',
            type: '{{ session('flash_message.level') }}',
            timer: 2000,
            confirmButtonText: false
        });
    </script>
@endif
@yield('scripts')
</body>
</html>
