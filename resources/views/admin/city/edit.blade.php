@extends('admin.layout')
@push('cities')
btn-primary text-white
@endpush
@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-primary fw-bold text-white">
                    Edit City
                    <a class="btn btn-success fw-bold float-end" href="{{ route('admin.city.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('admin.city.update',$city->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <div class="col-12 py-1 col-md-4">

                                <select class="form-control text-center  @error('state_id') is-invalid @enderror"
                                    name="state_id">
                                    <option hidden>-- Select State --</option>
                                    @foreach ($states as $s)
                                        <option class="text-start" value="{{ $s->id }}"
                                            {{ ($city->state_id==$s->id)?'selected':''; }}> {{ $s->name }} </option>
                                    @endforeach
                                </select>
                                @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-4 py-1">
                                <div class="input-group">
                                    <label for="name" class="input-group-text  px-3">{{ __('Name') }}</label>
                                    <input id="name" type="text" class=" form-control  d-inline @error('name') is-invalid @enderror" name="name" value="{{ $city->name }}"  autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-12 col-md-4 py-3">
                                <label for="status" class="form-label mx-3 text-md-end">{{ __('Status') }}</label>
                                <input id="status" type="checkbox" class="form-check-inline mx-3 @error('status') is-invalid @enderror" name="status" {{ $city->status=='1'? 'checked':'' ;}}  autocomplete="status">
                                <label for="status" class="form-label mx-3 text-md-end">{{ __('In Active') }}</label>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center ">
                                <button type="submit" class="btn btn-primary fw-bold">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
