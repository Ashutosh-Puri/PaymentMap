@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Geust Dashboard') }}</div>

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

                   @livewire('index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
