@extends('admin.layout')
@push('dashboard')
btn-primary text-white
@endpush
@section('admin_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('s-status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('s-status') }}
                        </div>
                    @endif
                    @if (session('d-status'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('d-status') }}
                    </div>
                @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
