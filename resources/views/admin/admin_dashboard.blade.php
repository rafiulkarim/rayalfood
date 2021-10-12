@extends('layouts.backend_layout.admin_backend_layout')

@section('admin_header_script')
@endsection



@section('admin_content')
    @if (session('success'))
        <div class="text text-success text-center">
            <h3>{{ session('success') }}</h3>
        </div>
    @endif
@endsection



@section('admin_footer_script')
@endsection