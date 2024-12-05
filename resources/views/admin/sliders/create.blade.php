@extends('template.layout')
@section('title')
 Add New Slider
@endsection
@section('content')
@include('partials._errors')
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Slider</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form action="{{ route('sliders.store')}}" method="post" class="mt-repeater horizontal-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('image') ? ' has-error' : '' }}" >
                                        <label class="control-label">Image <span style="color: red"> * (width mist be 1103 px and height 556 px )</span> </label>
                                        <input type="file" autocomplete="off" required accept="image/*" value="{{ old('image') }}"   name="image" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('linkto') ? ' has-error' : '' }}" >
                                        <label class="control-label">Link To <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('linkto') }}"  required maxlength="100"  name="linkto" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.goto') ? ' has-error' : '' }}" >
                                        <label class="control-label">GoTo Text En<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('en.goto') }}"  required maxlength="100"  name="en[goto]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.goto') ? ' has-error' : '' }}" >
                                        <label class="control-label">GoTo Text AR<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('ar.goto') }}"  required maxlength="100" name="ar[goto]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title En<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('en.title') }}"  required maxlength="100"  name="en[title]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title AR<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('ar.title') }}"  required maxlength="100" name="ar[title]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.top_header') ? ' has-error' : '' }}" >
                                        <label class="control-label">Top Header EN <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('en.top_header') }}" required maxlength="100" name="en[top_header]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.top_header') ? ' has-error' : '' }}" >
                                        <label class="control-label">Top Header AR <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('ar.top_header') }}"  required maxlength="100" name="ar[top_header]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.buttom_header') ? ' has-error' : '' }}" >
                                        <label class="control-label">Buttom Header EN <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('en.buttom_header') }}" required maxlength="100" name="en[buttom_header]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.buttom_header') ? ' has-error' : '' }}" >
                                        <label class="control-label">Buttom Header AR<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ old('ar.buttom_header') }}"  required maxlength="100" name="ar[buttom_header]" class="form-control">
                                    </div>
                                </div>
                            </div>

                       <div class="form-actions right">
                              <button type="submit" class="btn blue" id="add_btn">
                                  <i class="fa fa-check"></i> Add </button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
@endpush
@endsection






