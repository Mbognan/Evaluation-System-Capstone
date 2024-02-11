@extends('admin.layouts.master')

@section('contents')
<div class="container">
    <div class="card">
        <div class="card-header">Manage Users</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
{{-- <div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Table</div>
        </div>
        <div class="ibox-body">
            {{-- <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%"> --}}

            {{-- </table> --}}
        </div>
    </div>

</div> --}}
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
