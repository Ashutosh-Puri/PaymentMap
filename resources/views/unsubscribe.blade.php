@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Unsubscribe Newsletter') }}</div>

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
                <form action="{{ url('unsubscribe') }}" method="post">
                    @csrf
                    <input class="form-control   py-3 ps-4 pe-5 @error('email') is-validated @enderror" type="email" name="email" placeholder="Your Email">
                    <button type="submit" class="btn btn-primary py-2 mt-2 me-2">Unsubscribe</button>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
