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
                <form  action="{{ route('admin.category.update',$category->id) }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Category Title" name="title" value="{{ $category->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                                <select name="status" class="form-control">
                                    <option  value="">Select</option>
                                    <option @selected($category->status === 1)  value="1">Active</option>
                                    <option @selected($category->status === 0)  value="0">Inactive</option>

                                </select>

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                          <button type="submit" class="btn btn-primary">Update</button>
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
