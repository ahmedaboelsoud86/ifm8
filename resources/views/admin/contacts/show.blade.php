@extends('template.layout')
@section('title')
Message
@endsection
<style>
    .x{
        background-color: lightblue;
        padding:  25px;
        border : 1px solid #177593;
        color: #626262; font-size: 17px;
    }
</style>
@section('content')
@include('partials._session')
<div class="row">
    <div class="col-md-12  col-sm-12">
        <h1>Message : </h1>
        <hr>
        <div class="x">
            <p>{{$message->message}}</p>
        </div>
    </div>
</div>
@endsection


