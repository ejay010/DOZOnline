<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
                <a class="navbar-brand" href="#">DOZ Candidates</a>
            </div>

            <div class="collapse navbar-collapse" id="doz-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">View all</a></li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container">
            <div class="content">
                <div class="title">Add new Candidate</div>
                <hr>
                {!! Form::open(['route' => 'saveCandidate']) !!}
                {!! Form::label('fname', 'First Name: ') !!}
                {!! Form::text('fname', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('lname', 'Last Name: ') !!}
                {!! Form::text('lname', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('home', 'Home Number: ') !!}
                {!! Form::text('home', null, ['class' => 'form-control']) !!}
                {!! Form::label('cell', 'Cell Number: ') !!}
                {!! Form::text('cell', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('address', 'Address: ') !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('dob', 'Date of birth: ') !!}
                {!! Form::date('dob', null, ['class' => 'form-control', 'required']) !!}
                {!! Form::label('twiterId', 'Twitter ID: ') !!}
                {!! Form::text('twiterId', null, ['class' => 'form-control']) !!}
                {!! Form::label('facebookID', 'Facebook ID: ') !!}
                {!! Form::text('facebookID', null, ['class' => 'form-control']) !!}
                {!! Form::label('anniversary', 'Anniversary: ') !!}
                {!! Form::date('anniversary', null, ['class' => 'form-control']) !!}
                {!! Form::label('notes', 'Notes: ') !!}
                {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
                <hr/>
                {!! Form::submit('Save', ['class' => 'btn btn-primary col-lg-12']) !!}
                {!! Form::close() !!}
            </div>
        </div>
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
    </body>
</html>
