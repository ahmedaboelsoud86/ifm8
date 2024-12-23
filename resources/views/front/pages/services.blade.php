@extends('front.pages_template')
@section('title')
    @lang('site.services_solutions')
@endsection
@section('content')
    <section class="map-back"><img src="{{ asset('assets/images/slider/img1.jpg') }}" alt="">
        <div class="container">
            <h1 class="title">@lang('site.services_solutions') </h1>
            <ul class="maplink">
                <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                <li>@lang('site.services_solutions') </li>
            </ul>
        </div>
    </section>
    <section class="servicesiner integrating">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 item">
                    <div class="photo"><img src="{{ asset('assets/images/dec2.jpg') }}" alt=""></div>
                </div>
                <div class="col-sm-7 item">
                    <div>
                        <h2 class="title">@lang('site.services_solutions')</h2>
                        <p> @lang('site.the_importance_integrating')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sustainability">
        <div class="container">
            <h2 class="title text-center">@lang('site.the_importance_integrated')</h2>
            <div class="row">
                <div class="col-sm-3 lnieitem">
                    <div class="inner">
                        <div class="photo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 107.47"
                                style="enable-background:new 0 0 122.88 107.47" xml:space="preserve">
                                <path
                                    d="M36,104.59h-2.88V33.51H2.88v71.08H112.3v2.88H1.44c-0.8,0-1.44-0.65-1.44-1.44V32.74c0-0.58,0.24-1.11,0.62-1.5 c0.38-0.38,0.91-0.62,1.5-0.62h31V2.53c0-0.69,0.28-1.33,0.74-1.78V0.74C34.32,0.28,34.95,0,35.65,0H87c0.7,0,1.33,0.28,1.79,0.74 l0.11,0.12c0.4,0.45,0.64,1.03,0.64,1.67v28.09h31.22c0.58,0,1.11,0.24,1.49,0.62l0.01,0.01c0.38,0.38,0.62,0.91,0.62,1.49v73.29 c0,0.8-0.65,1.44-1.44,1.44h-9.14v-2.88H120V33.51H89.53v71.08h-2.88V2.88H36V104.59L36,104.59z M71.67,81.18h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C71.43,81.29,71.54,81.18,71.67,81.18L71.67,81.18z M57.08,81.18h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24 h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C56.84,81.29,56.95,81.18,57.08,81.18L57.08,81.18z M42.49,81.18h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C42.25,81.29,42.36,81.18,42.49,81.18L42.49,81.18z M97.15,71h15.9c0.13,0,0.24,0.08,0.24,0.17v4.7c0,0.09-0.11,0.18-0.24,0.18 h-15.9c-0.13,0-0.24-0.08-0.24-0.18v-4.7C96.91,71.08,97.02,71,97.15,71L97.15,71z M9.71,71h15.9c0.13,0,0.24,0.08,0.24,0.17v4.7 c0,0.09-0.11,0.18-0.24,0.18H9.71c-0.13,0-0.24-0.08-0.24-0.18v-4.7C9.47,71.08,9.58,71,9.71,71L9.71,71z M42.46,8.47H80.2 c0.63,0,1.15,0.52,1.15,1.15v29.52c0,0.63-0.52,1.15-1.15,1.15H42.46c-0.63,0-1.15-0.52-1.15-1.15V9.62 C41.3,8.99,41.82,8.47,42.46,8.47L42.46,8.47z M97.15,60.73h15.9c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.09-0.11,0.18-0.24,0.18h-15.9 c-0.13,0-0.24-0.08-0.24-0.18v-4.7C96.91,60.8,97.02,60.73,97.15,60.73L97.15,60.73z M97.15,50.45h15.9c0.13,0,0.24,0.08,0.24,0.18 v4.7c0,0.09-0.11,0.18-0.24,0.18h-15.9c-0.13,0-0.24-0.08-0.24-0.18v-4.7C96.91,50.53,97.02,50.45,97.15,50.45L97.15,50.45z M9.71,60.73h15.9c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.09-0.11,0.18-0.24,0.18H9.71c-0.13,0-0.24-0.08-0.24-0.18v-4.7 C9.47,60.8,9.58,60.73,9.71,60.73L9.71,60.73z M9.71,50.45h15.9c0.13,0,0.24,0.08,0.24,0.18v4.7c0,0.09-0.11,0.18-0.24,0.18H9.71 c-0.13,0-0.24-0.08-0.24-0.18v-4.7C9.47,50.53,9.58,50.45,9.71,50.45L9.71,50.45z M71.67,66.29h8.49c0.13,0,0.24,0.11,0.24,0.24 v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C71.43,66.4,71.54,66.29,71.67,66.29L71.67,66.29z M57.08,66.29h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C56.84,66.4,56.95,66.29,57.08,66.29L57.08,66.29z M42.49,66.29h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24 h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C42.25,66.4,42.36,66.29,42.49,66.29L42.49,66.29z M71.67,49.81h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C71.43,49.92,71.54,49.81,71.67,49.81L71.67,49.81z M57.08,49.81h8.49c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24 h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49C56.84,49.92,56.95,49.81,57.08,49.81L57.08,49.81z M42.49,49.81h8.49 c0.13,0,0.24,0.11,0.24,0.24v8.49c0,0.13-0.11,0.24-0.24,0.24h-8.49c-0.13,0-0.24-0.11-0.24-0.24v-8.49 C42.25,49.92,42.36,49.81,42.49,49.81L42.49,49.81z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">@lang('importance_integrated.increased_resource')</h3>
                    </div>
                </div>
                <div class="col-sm-3 lnieitem">
                    <div class="inner">
                        <div class="photo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 109.69"
                                style="enable-background:new 0 0 122.88 109.69" xml:space="preserve">
                                <path
                                    d="M6.7,109.69c-3.7,0-6.7-3-6.7-6.7c0-3.7,3-6.7,6.7-6.7h16.87V78.25H3.45c-3.37,0.31-4.05-2.35-2.61-4.56L13.7,58.62 l-0.37-0.37H6.45c-2.49,0.37-3.42-2.33-1.91-4.23l13.85-16.26h-4.04c-2.53,0.07-3.16-2.26-1.53-4.46l12.61-14.98 c0.86-1.02,1.78-2.52,3.28-2.49c1.29,0.03,2.07,1.25,2.83,2.15l7.22,8.42L31.43,35c-0.18,0.18-0.35,0.37-0.51,0.57 c-1.29,1.62-2,3.51-2.17,5.38c-0.17,1.78,0.16,3.55,0.94,5.09c0.69,1.36,1.7,2.53,3.02,3.4l-5.48,6.42l0,0 c-0.19,0.22-0.37,0.46-0.53,0.71c-1.37,2.11-1.99,4.54-1.78,6.81c0.12,1.32,0.5,2.57,1.14,3.71c0.69,1.21,1.66,2.26,2.9,3.08 c1.59,1.03,3.56,1.63,5.88,1.56c0.07,0,0.14,0,0.21,0h14.2v6.53H33.71v18.04H56V64.98H35.06c-3.51,0.32-4.22-2.45-2.72-4.75 l13.38-15.69l-0.39-0.39h-7.16c-2.59,0.38-3.56-2.43-1.98-4.4L50.6,22.83h-4.21c-2.64,0.07-3.29-2.36-1.6-4.64L57.93,2.59 c0.9-1.06,1.86-2.63,3.42-2.59c1.34,0.03,2.15,1.3,2.95,2.23l13.96,16.28c1.51,2.18,0.22,4.46-2.42,4.46h-3.77l14.31,16.77 c1.72,1.7,0.84,4.42-1.13,4.79h-8.32L89.4,59.18l1.37,1.6c1.04,1.19,0.52,3.93-1.73,4.19H66.55v31.31h21.81V78.25H73.3v-6.53h15.74 v-0.01c0.26,0,0.52-0.02,0.79-0.05c1.99-0.24,3.65-1.05,4.98-2.22c1.29-1.13,2.18-2.53,2.69-3.99c0.48-1.38,0.63-2.87,0.46-4.28 c-0.19-1.55-0.77-3.08-1.75-4.37c-0.1-0.14-0.21-0.27-0.32-0.41l-1.37-1.6l-4.43-5.19c0.43-0.31,0.84-0.66,1.21-1.03 c1.09-1.1,1.89-2.47,2.33-3.94c0.43-1.43,0.52-2.99,0.23-4.54c-0.33-1.72-1.12-3.41-2.47-4.85l-7.77-9.11l6.6-7.83 c0.86-1.02,1.78-2.52,3.28-2.49c1.29,0.03,2.07,1.25,2.83,2.15l13.41,15.64c1.46,2.09,0.21,4.28-2.32,4.28h-3.62l13.75,16.11 c1.65,1.63,0.81,4.25-1.09,4.6h-7.99l11.99,14.06l1.31,1.54c1,1.15,0.5,3.77-1.66,4.03H98.5v18.04h17.68c3.7,0,6.7,3,6.7,6.7 c0,3.7-3,6.7-6.7,6.7H6.7L6.7,109.69z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">@lang('importance_integrated.reduced_environmental')
                        </h3>
                    </div>
                </div>
                <div class="col-sm-3 lnieitem">
                    <div class="inner">
                        <div class="photo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 112.71"
                                style="enable-background:new 0 0 122.88 112.71" xml:space="preserve">
                                <path
                                    d="M66.41,96.48h21.91c1.76-1.75,3.69-3.57,5.65-5.42c4.11-3.89,8.4-7.95,12.81-13.03c5.04-5.81,5.58-7.82,7.11-13.51 c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37c-0.18-0.48-0.41-0.8-0.68-0.97 c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53c-0.07,0.17-0.17,0.33-0.28,0.47 c-0.46,0.83-1.08,1.64-1.88,2.41l-13.8,15.39c-0.75,0.84-2.04,0.91-2.87,0.16c-0.84-0.75-0.91-2.04-0.16-2.87l13.81-15.39 c0.06-0.07,0.12-0.14,0.19-0.2c1.43-1.36,1.88-2.83,1.63-3.9c-0.08-0.33-0.22-0.61-0.42-0.8c-0.19-0.17-0.44-0.29-0.75-0.32v0 c-1.23-0.13-3.05,0.78-5.25,3.39l0,0c-0.06,0.07-0.13,0.14-0.2,0.21l-5.35,4.72l-0.03,0.03c-5.79,5.48-8.28,6.78-12.82,9.15 c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21c-2.4,2.02-3.66,3.66-4.38,5.47 c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.27-0.26,2.52-0.35,3.77C66.47,95.3,66.44,95.9,66.41,96.48L66.41,96.48z M89.86,30.67 c-0.04,0.57-0.06,1.05-0.06,1.27c0,0.53-0.37,0.97-0.86,1.09l-1.45,0.44c-0.11,0.04-0.22,0.06-0.33,0.06h-0.24 c-0.51,0-0.96-0.35-1.07-0.83l-1.27-3.88v-0.02l-0.24-0.74l-2.15,3.88c-0.09,0.17-0.22,0.29-0.37,0.4l-1.12,0.72 c-0.52,0.33-1.2,0.17-1.53-0.35c-0.07-0.13-0.13-0.28-0.17-0.42l-1.1-6.14l-1.65-1.18l-3.88-0.7c0.13,0.2,0.28,0.42,0.4,0.62 c0.7,1.07,1.34,2.06,1.56,3.09c0.35,1.65-0.28,3.03-3.02,4.03c0.07,0.05,0.17,0.09,0.24,0.16c1.07,0.83,1.32,2.02-1.01,5.09 c-0.59,0.77-1.1,1.45-1.53,2.04c-0.33,0.46-0.64,0.92-0.94,1.34l0.53,3.82c0.07,0.51-0.06,1.01-0.39,1.51 c-0.24,0.37-0.61,0.7-1.1,1.01c-0.33,0.2-0.61,0.42-0.83,0.64c-0.09,0.09-0.16,0.17-0.24,0.26l0.24,1.08 c0.11,0.53-0.16,1.05-0.64,1.25l-0.4,0.18c-0.07,0.31-0.2,0.63-0.35,0.92c-0.24,0.48-0.57,0.96-0.99,1.42 c-0.46,0.5-0.96,0.86-1.49,1.12c-0.57,0.26-1.16,0.4-1.78,0.4h-1.95c-0.61,0-1.1-0.5-1.1-1.1c0-0.5-0.05-1.03-0.18-1.6 c-0.13-0.59-0.31-1.21-0.57-1.88c-0.29-0.75-0.52-1.43-0.66-2.04c-0.17-0.64-0.24-1.21-0.24-1.69c0-0.42,0.04-0.81,0.11-1.14 c0.09-0.4,0.22-0.74,0.42-1.03c0.02-0.04,0.04-0.11,0.07-0.26c0.04-0.22,0.05-0.51,0.05-0.88c0-0.29-0.05-0.59-0.15-0.9 c-0.11-0.35-0.28-0.72-0.5-1.12c-0.28-0.5-0.5-0.88-0.63-1.2c-0.2-0.42-0.31-0.77-0.31-1.03c0-1.8-0.63-2.21-1.49-2.21 c-0.52,0-1.1,0.07-1.71,0.17c-0.75,0.11-1.54,0.2-2.32,0.2c-0.59,0-1.16-0.26-1.71-0.79c-0.4-0.39-0.85-0.96-1.29-1.69 c-0.4-0.66-0.7-1.2-0.92-1.6c-0.28-0.55-0.42-0.97-0.42-1.27v-0.85c-0.04-3.07-0.06-5.98,2.91-8.13c1.23-1.75,2.34-2.89,3.66-3.6 c1.38-0.75,2.92-1.01,5.02-1.01c0.61,0,1.1,0.5,1.1,1.1v1.56l1.32,0.59l0.02-0.09c0.13-0.59,0.72-0.97,1.31-0.85 c0.4,0.09,0.79,0.2,1.12,0.31c0.37,0.13,0.68,0.28,0.94,0.46c0.15,0.09,0.39,0.17,0.7,0.22c0.33,0.06,0.7,0.07,1.01,0.02 c0.17-0.04,0.28-0.07,0.31-0.11v-0.04c0.04-0.17,0.05-0.33,0.07-0.5l-1.32,0.11c-0.48,0.04-0.9-0.22-1.08-0.63 c-0.44-0.92-1.34-1.38-2.5-1.97c-1.23-0.63-2.68-1.38-4.27-2.87c-5.3,1.88-6.99,2.13-7.41,0.96c-0.26-0.7,0.11-1.25,0.59-1.99 c0.44-0.68,1.05-1.64,1.05-2.54c0-0.48,0.31-0.88,0.74-1.05l4.45-2.04c-0.48-0.09-1.07-0.18-1.56-2.59 c-0.09-0.5,0.15-0.97,0.57-1.2c0.35-0.18,0.75-0.44,1.23-0.75c0.48-0.31,1.05-0.74,1.71-1.23l0.04-0.04 c-2.26,0.35-4.45,0.97-6.53,1.88c-1.75,0.75-3.37,1.64-4.87,2.63c-1.51,1.01-2.91,2.15-4.19,3.44c-1.29,1.29-2.43,2.68-3.44,4.19 c-1.01,1.51-1.89,3.13-2.63,4.87c0,0.02-0.02,0.04-0.02,0.06c-0.72,1.71-1.27,3.47-1.64,5.3C33.19,26.7,33,28.61,33,30.58 c0,1.97,0.18,3.88,0.55,5.72c0.02,0.09,0.04,0.2,0.06,0.29l5.13,2.45c0.39,0.18,0.61,0.55,0.63,0.96c0.06,1.47-0.33,2.56-0.74,3.66 c-0.29,0.83-0.61,1.67-0.64,2.67c0,0.11-0.02,0.2-0.06,0.29c0.99,1.47,2.11,2.83,3.38,4.08c1.29,1.29,2.68,2.43,4.19,3.44 c1.51,1.01,3.13,1.89,4.87,2.63c0.02,0,0.04,0.02,0.06,0.02c1.71,0.72,3.48,1.27,5.3,1.64c1.84,0.37,3.75,0.55,5.72,0.55 s3.88-0.18,5.72-0.55c1.86-0.37,3.64-0.92,5.35-1.65c1.75-0.75,3.37-1.64,4.87-2.63c1.51-1.01,2.9-2.15,4.19-3.44 c1.29-1.29,2.43-2.68,3.44-4.19c1.01-1.51,1.89-3.13,2.63-4.87c0-0.02,0.02-0.04,0.02-0.05c0.72-1.71,1.27-3.48,1.64-5.3 c0.37-1.84,0.55-3.73,0.55-5.7V30.67L89.86,30.67z M49.48,2.39C53.21,0.79,57.2,0,61.43,0c2.11,0,4.16,0.2,6.16,0.61 c1.97,0.39,3.88,0.99,5.74,1.77c0.02,0,0.04,0.02,0.06,0.02c1.86,0.79,3.59,1.75,5.22,2.83c1.64,1.08,3.14,2.34,4.52,3.71 c1.38,1.38,2.63,2.89,3.71,4.52c1.1,1.64,2.04,3.38,2.83,5.22c0.81,1.88,1.4,3.81,1.8,5.79c0.4,1.99,0.61,4.05,0.61,6.16 c0,2.11-0.2,4.16-0.61,6.16c-0.39,1.97-0.99,3.88-1.77,5.74c0,0.02-0.02,0.04-0.02,0.06c-0.79,1.86-1.75,3.59-2.83,5.22 c-1.08,1.64-2.34,3.14-3.71,4.52c-1.38,1.38-2.89,2.63-4.52,3.71c-1.64,1.1-3.38,2.04-5.22,2.83c-1.88,0.81-3.81,1.4-5.79,1.8 c-1.99,0.4-4.05,0.61-6.16,0.61c-2.11,0-4.16-0.2-6.16-0.61c-1.97-0.39-3.88-0.99-5.74-1.77c-0.02,0-0.04-0.02-0.06-0.02 c-1.86-0.79-3.59-1.75-5.22-2.83c-1.64-1.08-3.14-2.34-4.52-3.71c-1.38-1.38-2.63-2.89-3.71-4.52c-1.1-1.64-2.04-3.38-2.83-5.22 c-0.81-1.88-1.4-3.81-1.8-5.79c-0.4-1.99-0.61-4.05-0.61-6.16c0-2.11,0.2-4.16,0.61-6.16c0.39-1.97,0.99-3.88,1.77-5.74 c0-0.02,0.02-0.04,0.02-0.06c0.79-1.86,1.75-3.59,2.83-5.22c1.08-1.64,2.34-3.14,3.71-4.52c1.38-1.38,2.89-2.63,4.52-3.71 c1.64-1.1,3.38-2.04,5.22-2.83V2.39L49.48,2.39z M35.6,41.74c0.24,0.55,0.5,1.1,0.79,1.65c0.06-0.15,0.09-0.28,0.15-0.42 c0.26-0.72,0.52-1.42,0.59-2.19l-2.32-1.1C35.04,40.38,35.3,41.06,35.6,41.74L35.6,41.74z M74.04,5.35 c-1.03-0.52-2.1-0.97-3.2-1.36c-4.12,0.96-5.3,0.39-6.62-0.26c-0.66-0.31-1.38-0.66-2.96-0.66h-0.94c-0.09,0-0.29,0.07-0.61,0.24 c-0.4,0.22-0.92,0.55-1.53,1.03c-0.66,0.5-1.25,0.94-1.8,1.31c-0.31,0.22-0.61,0.4-0.88,0.57c0.53,0.13,0.94,0.46,1.21,2.92 c0.06,0.46-0.2,0.92-0.64,1.12l-4.19,1.91c-0.2,1.21-0.86,2.24-1.36,3c-0.02,0.02-0.02,0.04-0.04,0.04c0.53-0.31,1.8-1.4,4.85-2.48 c0.4-0.18,0.92-0.09,1.23,0.26c1.49,1.56,2.96,2.3,4.17,2.92c1.29,0.66,2.34,1.2,3.11,2.32l1.78-0.17c0.07-0.02,0.13-0.02,0.2-0.02 c0.61,0,1.1,0.5,1.1,1.1c0,0.35-0.02,0.7-0.05,1.07c-0.04,0.33-0.07,0.68-0.13,1.03v0.04c-0.05,0.29-0.17,0.57-0.31,0.81 c-0.39,0.61-1.03,0.96-1.75,1.1c-0.59,0.11-1.23,0.09-1.82,0c-0.57-0.09-1.12-0.29-1.51-0.55c-0.07-0.06-0.17-0.11-0.28-0.15 l-0.06,0.24c-0.02,0.07-0.04,0.15-0.07,0.22c-0.24,0.55-0.9,0.81-1.45,0.57l-3.16-1.38c-0.44-0.15-0.74-0.57-0.74-1.05v-1.16 c-1.16,0.07-2.08,0.29-2.87,0.72c-1.03,0.55-1.93,1.51-2.98,3.03c-0.07,0.13-0.18,0.24-0.31,0.33c-2.17,1.49-2.13,3.88-2.11,6.4 c0,0.52,0.02,0.72,0.02,0.86c0,0.06,0.06,0.04,0.18,0.26c0.18,0.37,0.46,0.85,0.83,1.47c0.33,0.55,0.64,0.96,0.92,1.21 c0.13,0.13,0.2,0.18,0.2,0.18c0.66,0,1.36-0.09,2.02-0.18c0.7-0.09,1.38-0.18,2-0.18c2.15,0,3.7,0.79,3.7,4.41 c0,0.07,0.04-0.04,0.09,0.09c0.13,0.26,0.31,0.61,0.55,1.05c0.29,0.53,0.53,1.05,0.7,1.56c0.17,0.53,0.26,1.05,0.26,1.54 c0,0.48-0.04,0.92-0.11,1.29c-0.07,0.46-0.22,0.81-0.42,1.1c-0.04,0.04-0.06,0.13-0.07,0.24c-0.04,0.18-0.06,0.4-0.06,0.68 c0,0.31,0.06,0.7,0.17,1.16c0.13,0.5,0.31,1.08,0.57,1.78c0.29,0.75,0.51,1.49,0.66,2.21c0.07,0.33,0.13,0.64,0.17,0.94h0.92 c0.31,0,0.61-0.05,0.86-0.18c0.28-0.13,0.55-0.33,0.81-0.61c0.28-0.29,0.5-0.61,0.64-0.92c0.13-0.28,0.22-0.53,0.24-0.79 c0.02-0.4,0.28-0.77,0.66-0.94l0.11-0.06l-0.15-0.7c-0.05-0.28-0.02-0.57,0.15-0.83c0.22-0.35,0.52-0.7,0.85-1.01 c0.33-0.31,0.7-0.61,1.12-0.88c0.24-0.17,0.4-0.29,0.5-0.42l-0.57-4.14c-0.06-0.28,0-0.57,0.17-0.83c0.31-0.5,0.74-1.08,1.21-1.77 c0.48-0.66,0.99-1.36,1.56-2.1c1.23-1.6,1.45-1.97,1.42-1.99c-0.07-0.05-0.26-0.13-0.46-0.22c-0.75-0.31-1.58-0.64-1.99-1.77 l-0.06-0.17c-0.13-0.59,0.26-1.18,0.86-1.31c3-0.63,3.75-1.29,3.59-2.04c-0.13-0.63-0.66-1.45-1.25-2.34 c-0.57-0.88-1.18-1.82-1.58-2.83c-0.09-0.2-0.13-0.44-0.09-0.66c0.11-0.61,0.68-1.01,1.29-0.9l6.34,1.14 c0.15,0.02,0.31,0.09,0.44,0.18l2.15,1.53c0.28,0.17,0.48,0.44,0.53,0.77l0.81,4.54l2.81-5.04c0.13-0.28,0.37-0.5,0.68-0.59 c0.59-0.18,1.21,0.15,1.4,0.72l1.01,3.18L87.65,31c0.04-0.61,0.09-1.4,0.2-2.19c0.11-0.81,0.26-1.62,0.44-2.22 c0.15-0.46,0.33-0.85,0.57-1.12c-0.17-1.05-0.39-2.1-0.68-3.11c-0.35-1.23-0.79-2.43-1.31-3.59c-0.53-1.18-1.12-2.3-1.8-3.37 c-0.68-1.08-1.4-2.1-2.19-3.05c-0.81-0.96-1.67-1.86-2.59-2.7c-0.92-0.83-1.91-1.6-2.96-2.34c-1.05-0.72-2.13-1.36-3.27-1.93 L74.04,5.35L74.04,5.35z M66.4,44.77v-0.04c0,0.02,0.02,0.07,0.02,0.06L66.4,44.77L66.4,44.77z M50.16,15.21 c0.04,0.11,0.13,0.11,0.31,0H50.16L50.16,15.21z M50.16,15.21L50.16,15.21L50.16,15.21L50.16,15.21z M56.47,96.48H34.55 c-1.76-1.75-3.69-3.57-5.65-5.42c-4.11-3.89-8.4-7.95-12.81-13.03c-5.04-5.81-5.58-7.82-7.11-13.51c-0.29-1.07-0.61-2.27-1.03-3.76 l-2.62-9.21l-0.03-0.1c-1.4-4.1-1.51-6.81-0.93-8.37c0.18-0.48,0.41-0.8,0.68-0.97c0.21-0.14,0.49-0.19,0.78-0.16 c0.68,0.07,1.45,0.5,2.15,1.27l7.78,18.53c0.07,0.17,0.17,0.33,0.28,0.47c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39 c0.75,0.84,2.04,0.91,2.87,0.16c0.84-0.75,0.91-2.04,0.16-2.87L20.96,61.91c-0.06-0.07-0.12-0.14-0.19-0.2 c-1.43-1.36-1.88-2.83-1.63-3.9c0.08-0.33,0.22-0.61,0.42-0.8c0.19-0.17,0.44-0.29,0.75-0.32v0c1.23-0.13,3.05,0.78,5.25,3.39l0,0 c0.06,0.07,0.13,0.14,0.21,0.21l5.35,4.72l0.03,0.03c5.79,5.48,8.28,6.78,12.82,9.15c0.95,0.5,1.99,1.04,3.28,1.74 c0.51,0.28,1.01,0.62,1.5,0.99c0.52,0.4,1.02,0.81,1.49,1.21c2.4,2.02,3.66,3.66,4.38,5.47c0.75,1.88,1.02,4.17,1.39,7.31 c0.15,1.27,0.26,2.52,0.35,3.77C56.41,95.3,56.44,95.9,56.47,96.48L56.47,96.48z M29.45,97.18c-0.31,0.36-0.5,0.83-0.5,1.34v12.14 c0,1.13,0.92,2.04,2.04,2.04h27.58c1.13,0,2.04-0.92,2.04-2.04V98.41c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96 c-0.4-3.43-0.7-5.94-1.66-8.35c-0.99-2.47-2.58-4.6-5.53-7.09c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31 c-1.2-0.65-2.32-1.24-3.34-1.78c-4.2-2.2-6.5-3.4-11.91-8.52c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61 c-3.19-3.73-6.31-4.97-8.71-4.71l-0.01,0v0c-1.17,0.12-2.17,0.58-2.97,1.28l-5.27-12.56l-0.01,0c-0.08-0.18-0.18-0.35-0.31-0.51 c-1.46-1.75-3.31-2.77-5.08-2.95c-1.21-0.12-2.38,0.14-3.4,0.8c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05 l2.6,9.15c0.38,1.32,0.71,2.59,1.02,3.71c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.88,9.33,13.1,13.31 C27.23,95.07,28.33,96.11,29.45,97.18L29.45,97.18z M33.35,100.57c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06H33.35 L33.35,100.57z M93.43,97.18c0.31,0.36,0.5,0.83,0.5,1.34v12.14c0,1.13-0.92,2.04-2.04,2.04H64.32c-1.13,0-2.04-0.92-2.04-2.04 V98.41c0-0.07,0-0.15,0.01-0.22c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96c0.4-3.43,0.7-5.94,1.66-8.35 c0.99-2.47,2.58-4.6,5.53-7.09c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31c1.2-0.65,2.32-1.24,3.34-1.78 c4.2-2.2,6.5-3.4,11.91-8.52c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61c3.19-3.73,6.31-4.97,8.7-4.71l0.01,0v0 c1.17,0.12,2.17,0.58,2.97,1.28l5.27-12.56l0.01,0c0.08-0.18,0.18-0.35,0.31-0.51c1.46-1.75,3.31-2.77,5.08-2.95 c1.21-0.12,2.38,0.14,3.4,0.8c0.97,0.63,1.77,1.61,2.27,2.96c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15 c-0.38,1.32-0.71,2.59-1.02,3.71c-1.7,6.35-2.3,8.6-7.97,15.12c-4.49,5.17-8.88,9.33-13.1,13.31 C95.65,95.07,94.55,96.11,93.43,97.18L93.43,97.18z M89.53,100.57c-0.27,0.06-0.55,0.06-0.83,0H66.36v8.06h23.49v-8.06H89.53 L89.53,100.57z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">@lang('importance_integrated.improved_quality')</h3>
                    </div>
                </div>
                <div class="col-sm-3 lnieitem">
                    <div class="inner">
                        <div class="photo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 98.05 122.88"
                                style="enable-background:new 0 0 98.05 122.88" xml:space="preserve">
                                <path class="st0"
                                    d="M40.42,61.1h4.25c-1.33-4.29-5.5-10.69-10.24-7.04c-7.45,10.66-16.92-0.51-9.96-6.64 c-7.9-10.14-3.29-20.08,6.39-21.71c-1.3-1.15-2.76-2.51-4.39-4.12c5.57-1.39,9.65-1.26,12.74,0.21c4.95-6.87,14.88-6.24,20.04-0.18 c3.04-1.3,7.01-1.37,12.35-0.04c-1.36,1.34-2.6,2.5-3.72,3.52c8.63,2.14,13.96,11.69,5.38,21.62c8.84,6.85-2.82,20.03-10.87,7.76 c-3.7-1.03-6.85,1.53-8.14,6.61h3.77c1.43,0,2.68,0.79,3.33,1.96l36.1,53.95c1.14,1.77,0.62,4.12-1.15,5.26 c-0.64,0.41-1.35,0.6-2.06,0.6v0.01H3.81c-2.11,0-3.81-1.71-3.81-3.81c0-0.88,0.3-1.69,0.8-2.33l36.44-53.88 c0.73-1.12,1.95-1.73,3.19-1.73V61.1L40.42,61.1z M47.99,4.58c0.96,0,1.84,0.39,2.47,1.03l0,0c0.63,0.63,1.03,1.51,1.03,2.47 c0,0.96-0.39,1.84-1.03,2.47l0,0c-0.63,0.63-1.51,1.03-2.47,1.03c-0.97,0-1.84-0.39-2.47-1.03l-0.07-0.07 c-0.59-0.63-0.96-1.47-0.96-2.4c0-0.96,0.39-1.83,1.03-2.47l0.01-0.01C46.16,4.97,47.03,4.58,47.99,4.58L47.99,4.58z M23.29,22.27 c0.69,0.62,0.74,1.68,0.12,2.37c-0.62,0.69-1.68,0.74-2.37,0.12l-9.5-8.59c-0.69-0.62-0.74-1.68-0.12-2.37 c0.62-0.69,1.68-0.74,2.37-0.12L23.29,22.27L23.29,22.27z M79.54,24.75c-0.69,0.62-1.75,0.57-2.37-0.12 c-0.62-0.69-0.57-1.75,0.12-2.37l9.5-8.59c0.69-0.62,1.75-0.57,2.37,0.12c0.62,0.69,0.57,1.75-0.12,2.37L79.54,24.75L79.54,24.75z M38.35,15.23c0.28,0.88-0.2,1.83-1.08,2.11c-0.88,0.28-1.83-0.2-2.11-1.09L30.61,2.19c-0.28-0.88,0.2-1.83,1.09-2.11 c0.88-0.28,1.83,0.2,2.11,1.09L38.35,15.23L38.35,15.23z M61.85,16.28c-0.3,0.88-1.25,1.35-2.13,1.05 c-0.88-0.3-1.35-1.25-1.05-2.13l3.56-10.43c0.3-0.88,1.25-1.35,2.13-1.05c0.88,0.3,1.35,1.25,1.05,2.13L61.85,16.28L61.85,16.28z M73.26,1.4c0.97,0,1.84,0.39,2.47,1.03L75.8,2.5c0.59,0.63,0.96,1.47,0.96,2.4c0,0.96-0.39,1.84-1.03,2.47l0,0 C75.1,8,74.23,8.4,73.26,8.4c-0.96,0-1.84-0.39-2.47-1.03l0,0c-0.63-0.63-1.03-1.51-1.03-2.47c0-0.97,0.39-1.84,1.03-2.47 l0.07-0.07C71.49,1.76,72.33,1.4,73.26,1.4L73.26,1.4z M74.15,4.01c-0.23-0.23-0.54-0.37-0.89-0.37c-0.33,0-0.63,0.12-0.85,0.32 l-0.04,0.04c-0.23,0.23-0.37,0.54-0.37,0.89c0,0.35,0.14,0.66,0.37,0.89v0c0.22,0.22,0.54,0.36,0.89,0.36 c0.35,0,0.66-0.14,0.89-0.37h0c0.22-0.22,0.36-0.54,0.36-0.89c0-0.33-0.12-0.63-0.32-0.85L74.15,4.01L74.15,4.01z M14.73,34.37 c0.96,0,1.84,0.39,2.47,1.03l0,0c0.63,0.63,1.02,1.51,1.02,2.47s-0.39,1.84-1.02,2.47l-0.07,0.07c-0.63,0.59-1.47,0.96-2.4,0.96 c-0.97,0-1.84-0.39-2.47-1.02l-0.07-0.07c-0.59-0.63-0.96-1.47-0.96-2.4c0-0.96,0.39-1.84,1.03-2.47l0,0 C12.89,34.76,13.77,34.37,14.73,34.37L14.73,34.37z M85.22,34.37c0.97,0,1.84,0.39,2.47,1.03l0.07,0.07 c0.59,0.63,0.96,1.47,0.96,2.4c0,0.96-0.39,1.84-1.03,2.47l0,0c-0.63,0.63-1.51,1.02-2.47,1.02c-0.96,0-1.84-0.39-2.47-1.03l0,0 c-0.63-0.63-1.03-1.51-1.03-2.47s0.39-1.84,1.03-2.47l0.07-0.07C83.44,34.74,84.29,34.37,85.22,34.37L85.22,34.37z M86.1,36.98 c-0.23-0.23-0.54-0.37-0.89-0.37c-0.33,0-0.63,0.12-0.85,0.32l-0.04,0.04c-0.23,0.23-0.37,0.54-0.37,0.89 c0,0.35,0.14,0.66,0.37,0.89v0c0.22,0.22,0.54,0.36,0.89,0.36c0.35,0,0.66-0.14,0.89-0.37h0c0.22-0.22,0.36-0.54,0.36-0.89 c0-0.33-0.12-0.63-0.32-0.85L86.1,36.98L86.1,36.98z M15.62,36.98c-0.22-0.22-0.54-0.36-0.89-0.36c-0.35,0-0.66,0.14-0.89,0.37h0 c-0.22,0.22-0.36,0.54-0.36,0.89c0,0.33,0.12,0.62,0.32,0.85l0.04,0.04c0.23,0.23,0.54,0.37,0.89,0.37c0.33,0,0.63-0.12,0.85-0.32 l0.04-0.04c0.23-0.23,0.37-0.54,0.37-0.89C15.99,37.52,15.85,37.21,15.62,36.98L15.62,36.98L15.62,36.98z M20.68,97.03L40.63,65.6 h17.03L73.04,89.5c-9.77,4.84-0.69,13.54-18.04,13.39C35.81,102.73,47.59,79.43,20.68,97.03L20.68,97.03z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">@lang('importance_integrated.enhanced_emergency')</h3>
                    </div>
                </div>
                <div class="col-sm-3 lnieitem">
                    <div class="inner">
                        <div class="photo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 82.86 122.88"
                                style="enable-background:new 0 0 82.86 122.88" xml:space="preserve">
                                <path class="st0"
                                    d="M44.59,115.61C60.43,121.69,84.32,99,82.79,73.9c-17.12-0.7-31.77,10.01-38.2,21.74v-22 c18.89-1.6,33.73-17.45,33.73-36.75C78.32,16.52,61.81,0,41.43,0C21.06,0,4.54,16.52,4.54,36.89c0,19.31,14.83,35.15,33.72,36.75 v19.54c-7.6-10.94-22.19-20.43-38.2-19.78c-1.46,24.03,22.14,46.25,38.2,42.81v6.65h6.33V115.61L44.59,115.61z M55.47,26.19 l-9.08,1.43c-0.46-1.15-0.86-1.94-1.23-2.38c-0.37-0.44-0.96-0.89-1.81-1.34v7.04c4.93,1.32,8.22,2.71,9.88,4.16 c2.19,1.97,3.28,4.45,3.28,7.48c0,1.76-0.39,3.39-1.18,4.86c-0.79,1.48-1.8,2.71-3.02,3.71c-1.22,0.99-2.53,1.7-3.91,2.15 c-1.38,0.45-3.07,0.71-5.06,0.79v4.59h-3.54v-4.59c-2.39-0.21-4.32-0.59-5.81-1.15c-1.48-0.56-2.77-1.33-3.85-2.32 c-1.07-0.98-1.91-2.04-2.49-3.18c-0.58-1.14-1.02-2.52-1.31-4.13l9.82-1.14c0.29,1.6,0.69,2.75,1.19,3.46 c0.49,0.71,1.31,1.34,2.45,1.89v-8.61c-3.29-0.91-5.62-1.7-6.99-2.36c-1.37-0.66-2.56-1.74-3.57-3.21 c-1.01-1.47-1.51-3.26-1.51-5.37c0-2.89,1.01-5.31,3.03-7.25c2.03-1.94,5.04-3.03,9.03-3.23V15.1h3.54v2.39 c3.64,0.22,6.42,1.08,8.35,2.58C53.62,21.56,54.89,23.59,55.47,26.19L55.47,26.19z M39.81,23.78c-1.05,0.34-1.77,0.76-2.18,1.26 c-0.41,0.5-0.61,1.1-0.61,1.78c0,0.71,0.21,1.33,0.62,1.85c0.42,0.53,1.14,0.97,2.17,1.33V23.78L39.81,23.78z M43.35,47.76 c1.38-0.31,2.39-0.82,3.03-1.53c0.64-0.71,0.96-1.5,0.96-2.38c0-0.76-0.27-1.47-0.81-2.12c-0.54-0.64-1.6-1.24-3.17-1.79V47.76 L43.35,47.76z M43.66,109.94c5.01-8.41,14.53-15.11,21.62-20.6c0.84-0.65,1.68-1.3,2.36-1.83c0.47-0.36,1.14-0.28,1.5,0.18 c0.36,0.47,0.28,1.14-0.18,1.5c-0.88,0.69-1.61,1.26-2.36,1.84c-6.59,5.1-15.54,11.36-20.39,18.9H43.66L43.66,109.94z M13.22,86.25 c-0.45-0.42-0.48-1.12-0.06-1.57c0.42-0.45,1.12-0.48,1.57-0.06c8.58,7.94,16.69,14.99,22.36,25.32h-2.55 C29.01,100.32,21.3,93.72,13.22,86.25L13.22,86.25z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="title">@lang('importance_integrated.enabled_sustainable') </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="facilities">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 item">
                    <div class="w-100">
                        <h2 class="title">@lang('site.principles_of_integrated')</h2>
                        <ul class="list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <rect width="24" height="24" opacity="0"></rect>
                                    <path
                                        d="M9.71 11.29a1 1 0 0 0-1.42 1.42l3 3A1 1 0 0 0 12 16a1 1 0 0 0 .72-.34l7-8a1 1 0 0 0-1.5-1.32L12 13.54z">
                                    </path>
                                    <path
                                        d="M21 11a1 1 0 0 0-1 1 8 8 0 0 1-8 8A8 8 0 0 1 6.33 6.36 7.93 7.93 0 0 1 12 4a8.79 8.79 0 0 1 1.9.22 1 1 0 1 0 .47-1.94A10.54 10.54 0 0 0 12 2a10 10 0 0 0-7 17.09A9.93 9.93 0 0 0 12 22a10 10 0 0 0 10-10 1 1 0 0 0-1-1z">
                                    </path>
                                </svg>@lang('site.integrated_planning')
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <rect width="24" height="24" opacity="0"></rect>
                                    <path
                                        d="M9.71 11.29a1 1 0 0 0-1.42 1.42l3 3A1 1 0 0 0 12 16a1 1 0 0 0 .72-.34l7-8a1 1 0 0 0-1.5-1.32L12 13.54z">
                                    </path>
                                    <path
                                        d="M21 11a1 1 0 0 0-1 1 8 8 0 0 1-8 8A8 8 0 0 1 6.33 6.36 7.93 7.93 0 0 1 12 4a8.79 8.79 0 0 1 1.9.22 1 1 0 1 0 .47-1.94A10.54 10.54 0 0 0 12 2a10 10 0 0 0-7 17.09A9.93 9.93 0 0 0 12 22a10 10 0 0 0 10-10 1 1 0 0 0-1-1z">
                                    </path>
                                </svg>@lang('site.leveraging_green')
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <rect width="24" height="24" opacity="0"></rect>
                                    <path
                                        d="M9.71 11.29a1 1 0 0 0-1.42 1.42l3 3A1 1 0 0 0 12 16a1 1 0 0 0 .72-.34l7-8a1 1 0 0 0-1.5-1.32L12 13.54z">
                                    </path>
                                    <path
                                        d="M21 11a1 1 0 0 0-1 1 8 8 0 0 1-8 8A8 8 0 0 1 6.33 6.36 7.93 7.93 0 0 1 12 4a8.79 8.79 0 0 1 1.9.22 1 1 0 1 0 .47-1.94A10.54 10.54 0 0 0 12 2a10 10 0 0 0-7 17.09A9.93 9.93 0 0 0 12 22a10 10 0 0 0 10-10 1 1 0 0 0-1-1z">
                                    </path>
                                </svg>@lang('site.achieving_resource')
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <rect width="24" height="24" opacity="0"></rect>
                                    <path
                                        d="M9.71 11.29a1 1 0 0 0-1.42 1.42l3 3A1 1 0 0 0 12 16a1 1 0 0 0 .72-.34l7-8a1 1 0 0 0-1.5-1.32L12 13.54z">
                                    </path>
                                    <path
                                        d="M21 11a1 1 0 0 0-1 1 8 8 0 0 1-8 8A8 8 0 0 1 6.33 6.36 7.93 7.93 0 0 1 12 4a8.79 8.79 0 0 1 1.9.22 1 1 0 1 0 .47-1.94A10.54 10.54 0 0 0 12 2a10 10 0 0 0-7 17.09A9.93 9.93 0 0 0 12 22a10 10 0 0 0 10-10 1 1 0 0 0-1-1z">
                                    </path>
                                </svg>@lang('site.focusing_quality')
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <rect width="24" height="24" opacity="0"></rect>
                                    <path
                                        d="M9.71 11.29a1 1 0 0 0-1.42 1.42l3 3A1 1 0 0 0 12 16a1 1 0 0 0 .72-.34l7-8a1 1 0 0 0-1.5-1.32L12 13.54z">
                                    </path>
                                    <path
                                        d="M21 11a1 1 0 0 0-1 1 8 8 0 0 1-8 8A8 8 0 0 1 6.33 6.36 7.93 7.93 0 0 1 12 4a8.79 8.79 0 0 1 1.9.22 1 1 0 1 0 .47-1.94A10.54 10.54 0 0 0 12 2a10 10 0 0 0-7 17.09A9.93 9.93 0 0 0 12 22a10 10 0 0 0 10-10 1 1 0 0 0-1-1z">
                                    </path>
                                </svg>@lang('site.enhancing_resilience')
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="tp-about">
                        <div class="tp-about-3"><img src="{{ asset('assets/images/p-1.jpg') }}" alt=""></div>
                        <div class="tp-about-4"><img src="{{ asset('assets/images/shape-2-2.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="minservices">
        <div class="container">
            <h2 class="title text-center">@lang('site.latest_services')</h2>
            <p class="text-center mt-3">@lang('site.whether_considering')</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                @if($category_services)
                    @foreach ($category_services as $index=>$category_item)

                    <li class="nav-item"> <a class="nav-link{{ $index == '0' ? " active show" : "" }}" id="item-{{$index+1}}-tab" data-toggle="tab" href="#item-{{$index+1}}"
                            role="tab" aria-controls="item-{{$index+1}}" aria-selected="true">{{ Str::words($category_item->title, 3, '')}} </a></li>

                  @endforeach
                @endif
            </ul>
            <div class="tab-content" id="myTabContent">
                @if($category_services)
                @foreach ($category_services as $index=>$category_item)
                <div class="tab-pane fade {{ $index == '0' ? " show active " : "" }}" id="item-{{$index+1}}" role="tabpanel" aria-labelledby="item-{{$index+1}}-tab">
                    <h3 class="title text-center mt-5">@lang('site.choose_a') {{ Str::words($category_item->title, 3, '')}} </h3>
                    <div class="row">

                        @if($category_item->services)
                        @foreach ($category_item->services as $index=>$service_item)
                        <div class="col-sm-4 item-servs"><a class="inner" href="{{ route('services-inner',[$service_item->id , str_replace(' ','-',$service_item->title)])}}">
                                <div class="photo"><img src="{{ asset('assets/images/'.$service_item->image) }}" alt="{{ $service_item->title }}"></div>
                                <div class="p-4">
                                    <h3 class="title"> {{ Str::words($service_item->title, 3, '')}}</h3>
                                    <p>{{ Str::words($service_item->description, 50, '')}}.</p>
                                </div>
                            </a></div>
                        @endforeach
                        @endif

                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>
    @include('components._help_services')
@endsection
