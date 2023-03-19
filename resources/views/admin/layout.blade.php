@extends('layouts.app')

@section('content')

    <div class="row w-100 m-0 p-0">
        <div class=" col-12 col-md-2 p-0">
            @include('admin.sidebar')
        </div>
        <div class=" col-12 col-md-10 p-3">
            @yield('admin_content')
        </div>
    </div>

@endsection
