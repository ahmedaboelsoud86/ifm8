@extends('template.layout')
@section('title')
Edit Team
@endsection
@section('content')
@include('partials._errors')
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Edit Team</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form  action="{{ route('teams.update',$team->id) }}" class="mt-repeater horizontal-form"  enctype="multipart/form-data"  method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group{{ $errors->has('image') ? ' has-error' : '' }}" >
                                        <label class="control-label">Image <span style="color: red"> </span> </label>
                                        <input type="file" autocomplete="off"  accept="image/*"   name="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title En<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ $team->translate('en')->title ?? '' }}"  required maxlength="100"  name="en[title]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.title') ? ' has-error' : '' }}" >
                                        <label class="control-label">Title AR<span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ $team->translate('ar')->title ?? '' }}"   required maxlength="100" name="ar[title]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('en.username') ? ' has-error' : '' }}" >
                                        <label class="control-label">User Name EN <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"  value="{{ $team->translate('en')->username ?? '' }}"  required maxlength="100" name="en[username]" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('ar.username') ? ' has-error' : '' }}" >
                                        <label class="control-label">User Name AR <span style="color: red"> * </span> </label>
                                        <input type="text" autocomplete="off"   value="{{ $team->translate('ar')->username ?? '' }}"  required maxlength="100" name="ar[username]" class="form-control">
                                    </div>
                                </div>
                            </div>







                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('instagram') ? ' has-error' : '' }}" >
                                        <label class="control-label">Instagram </label>
                                        <input type="text" autocomplete="off"  value="{{ $team->instagram  }}"   maxlength="100" name="instagram" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('facebook') ? ' has-error' : '' }}" >
                                        <label class="control-label">Facebook  </label>
                                        <input type="text" autocomplete="off"   value="{{ $team->facebook }}"   maxlength="100" name="facebook" class="form-control">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('twitter') ? ' has-error' : '' }}" >
                                        <label class="control-label">Twitter  </label>
                                        <input type="text" autocomplete="off"  value="{{ $team->twitter }}"   maxlength="100" name="twitter" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}" >
                                        <label class="control-label">Linkedin </label>
                                        <input type="text" autocomplete="off"   value="{{ $team->linkedin }}"   maxlength="100" name="linkedin" class="form-control">
                                    </div>
                                </div>
                            </div>


                       <div class="form-actions right">
                              <button type="submit" class="btn blue" id="add_btn">
                                  <i class="fa fa-check"></i> Update </button>
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






