@extends('admin.layouts.master')

@section('contents')
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Table</div>
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-rounded"> <i class="fa fa-plus"></i> Create</a>
        </div>
        <div class="ibox-body">
            <table id="example" class="ui celled table" style="width:100%">
                {{ $dataTable->table() }}
            </table>
        </div>
    </div>

</div>

@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
