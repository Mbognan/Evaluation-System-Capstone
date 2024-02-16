@extends('admin.layouts.master')

@section('contents')
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title"><a href="{{ route('admin.category.index') }}" class="fa fa-arrow-left"></a>  Create Category</div>
        </div>
    </div>


        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Category Form</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                </div>
            </div>
            <div class="ibox-body">
                <form  action="{{ route('admin.category.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Category Title" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                                <select name="status" class="form-control">
                                    <option  value="">Select</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>

                                </select>

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                           <button type="submit" class="btn btn-primary btn-rounded">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection
@push('scripts')

@endpush
