@extends('template.layout')
@section('title')
 Add New Client
@endsection
@section('content')
@include('partials._errors')
<style>
textarea {
  resize: none;
}
</style>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Client</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <form action="{{ route('clients.store')}}" method="post" class="mt-repeater horizontal-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group{{ $errors->has('image') ? ' has-error' : '' }}" >
                                        <label class="control-label">Image <span style="color: red"> *</span> </label>
                                        <input type="file" autocomplete="off" required accept="image/*"  value="{{ old('image') }}"   name="image" class="form-control">
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






