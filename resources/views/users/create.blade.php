@extends('layouts.master')

@section('content')
 
    <h1 style="color: #470062">Register New User</h1>
 
    <h1 style="color:#470062;">Register New User</h1>

    <h1 style="color:#470062;">Register New User</h1>
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
