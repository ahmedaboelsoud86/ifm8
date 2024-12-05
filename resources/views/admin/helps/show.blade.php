@extends('template.layout')
@section('title')
Helps
@endsection
<style>
    .m_title { display: inline-block;  text-transform: lowercase ;color: #3b3b3b; font-weight: bold}
    .m_title::first-letter { text-transform: uppercase }
    .title::first-letter {text-transform: uppercase}
    .forrow{ padding:  25px; }
    .x{ background-color: lightblue; padding:  25px; border : 1px solid #177593; color: #626262; font-size: 17px }
</style>
@section('content')
@include('partials._session')
<div class="row forrow">
    <div class="col-md-12 col-sm-12 x">
        <ul>
        @foreach (json_decode($help->message) as $key=>$val)
            @if($val != 'takamul' && $val != 'enquiry')
                <li><p><span class="m_title">{{ str_replace('select_',' ',$key) }}</span>  </p><p> {{ $val }}<p></li>
            @endif
        @endforeach
        </ul>
    </div>
</div>
@endsection


