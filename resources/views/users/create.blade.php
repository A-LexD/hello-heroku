@extends('layouts.master')

@section('content')
<<<<<<< HEAD
    <h1 style="color: blueviolet">Register New User</h1>
=======
    <h1 style="color:yellow;">Register New User</h1>
>>>>>>> 9e45c8e03daee1af3548611f52a80c998e65cfa6
    <hr/>

    {!! Form::open(['url' => '/user', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        @include('users._form')

        <!-- submit button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
@endsection
