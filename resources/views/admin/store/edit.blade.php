@extends('admin.layout')
@push('stores')
    btn-primary text-white
@endpush
@section('admin_content')
    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
            <div class="card">
                <div class="card-header bg-primary fw-bold text-white">
                    Edit Store
                    <a class="btn btn-success fw-bold float-end" href="{{ route('admin.astore.index') }}">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.astore.update', $store->id) }} " enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 py-1">
                                <label for="store" class="form-label ">{{ __('Store Details') }}</label>
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="store_name" type="text" placeholder="Enter Store Name"
                                    class="form-control @error('store_name') is-invalid @enderror" name="store_name"
                                    value="{{ $store->store_name }}"  autocomplete="store_name" autofocus>

                                @error('store_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="owner_name" type="text" placeholder="Enter Owner Name"
                                    class="form-control @error('owner_name') is-invalid @enderror" name="owner_name"
                                    value="{{ $store->owner_name }}" autocomplete="owner_name" autofocus>

                                @error('owner_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="store_category" type="text" placeholder="Enter Store Category"
                                    class="form-control @error('store_category') is-invalid @enderror" name="store_category"
                                    value="{{ $store->store_category }}"  autocomplete="store_category" autofocus>

                                @error('store_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="store_type" type="text" placeholder="Enter Store Type"
                                    class="form-control @error('store_type') is-invalid @enderror" name="store_type"
                                    value="{{ $store->store_type }}"  autocomplete="store_type" autofocus>

                                @error('store_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="store_time" type="text" placeholder="MON-SAT 07:00 AM To 5:30 PM"
                                    class="form-control @error('store_time') is-invalid @enderror" name="store_time"
                                    value="{{ $store->store_time }}"  autocomplete="store_time" autofocus>

                                @error('store_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="store_site" type="text" placeholder="Enter Store Website"
                                    class="form-control @error('store_site') is-invalid @enderror" name="store_site"
                                    value="{{ $store->store_site }}"  autocomplete="store_site" autofocus>

                                @error('store_site')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <div class=" input-group">
                                    <label for="store_photo"
                                        class=" w-25  input-group-text pr-0">{{ __('Photo') }}</label>
                                    <input id="store_photo" type="file"
                                        class=" form-control w-75 @error('store_photo') is-invalid @enderror"
                                        name="store_photo" value="{{ $store->store_photo }}"
                                        autocomplete="store_photo" autofocus>
                                </div>
                                @error('store_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <div class=" input-group">
                                    <label for="store_qr" class=" w-25  input-group-text pr-0">{{ __('QR UPI') }}</label>
                                    <input id="store_qr" type="file"
                                        class=" form-control w-75 @error('store_qr') is-invalid @enderror" name="store_qr"
                                        value="{{ $store->store_qr }}"  autocomplete="store_qr" autofocus>
                                </div>
                                @error('store_photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 py-1 py-1">
                                <label for="Payment" class="form-label ">{{ __('Payment Details') }}</label>
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="account_no" type="text" placeholder="Enter Account Number"
                                    class="form-control @error('account_no') is-invalid @enderror" name="account_no"
                                    value="{{ $store->account_no }}"  autocomplete="account_no" autofocus>

                                @error('account_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-3 py-1">
                                <input id="ifsc_code" type="text" placeholder="Enter IFSC Code"
                                    class="form-control @error('account_name') is-invalid @enderror" name="ifsc_code"
                                    value="{{ $store->ifsc_code }}" autocomplete="ifsc_code" autofocus>

                                @error('ifsc_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="account_name" type="text" placeholder="Enter Account Holder Name"
                                    class="form-control @error('account_name') is-invalid @enderror" name="account_name"
                                    value="{{ $store->account_name }}"  autocomplete="account_name" autofocus>

                                @error('account_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="upi_id" type="text" placeholder="Enter UPI ID"
                                    class="form-control @error('upi_id') is-invalid @enderror" name="upi_id"
                                    value="{{ $store->upi_id }}"  autocomplete="upi_id" autofocus>

                                @error('upi_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12 py-1">
                                <label for="Address" class="form-label ">{{ __('Addres Details') }}</label>
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <div class="form-group ">
                                    <select class="form-control text-center @error('country_id') is-invalid @enderror"
                                        name="country_id">
                                        <option hidden>-- Select Country --</option>
                                        @foreach ($countries as $c)
                                            <option class="text-start " {{ $store->country_id == $c->id ? 'selected' : '' }}
                                                value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" col-12 col-md-3 py-1">
                                <div class="form-group ">

                                    <select class="form-control text-center  @error('state_id') is-invalid @enderror"
                                        name="state_id">
                                        <option hidden>-- Select State --</option>
                                        @foreach ($states as $s)
                                            <option class="text-start" value="{{ $s->id }}"
                                                {{ $store->state_id == $s->id ? 'selected' : '' }}> {{ $s->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('state_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-2 py-1">
                                <div class="form-group ">
                                    <select class="form-control text-center @error('city_id') is-invalid @enderror "
                                        name="city_id">
                                        <option hidden>-- Select City --</option>
                                        @foreach ($cities as $ct)
                                            <option class="text-start" value="{{ $ct->id }}"
                                                {{ $store->city_id == $ct->id ? 'selected' : '' }}>{{ $ct->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('city_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" col-12 col-md-2 py-1">
                                <div class="form-group ">
                                    <select class="form-control text-center @error('village_id') is-invalid @enderror"
                                        name="village_id">
                                        <option hidden value="">-- Select Village --</option>
                                        @foreach ($villages as $v)
                                            <option class="text-start" value="{{ $v->id }}"
                                                {{ $store->village_id == $v->id ? 'selected' : '' }}>{{ $v->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('village_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" col-12 col-md-2 py-1">
                                <div class="form-group ">
                                    <input id="street" type="text" placeholder="Enter Street / Len"
                                        class="form-control @error('street') is-invalid @enderror" name="street"
                                        value="{{ $store->street }}" autocomplete="street" autofocus>
                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 py-1">
                                <label class="form-label ">{{ __('Other Details') }}</label>
                            </div>
                            <div class="col-12 col-md-3 py-1">
                                <input id="status" type="checkbox" class="@error('status') is-invalid @enderror"
                                    name="status" {{ $store->status == '1' ? 'checked' : '' }}
                                    autocomplete="status" autofocus>
                                <label for="status" class="form-label ">{{ __('Status Inactive') }}</label>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if ($store->store_photo)
                                <div class="col-4 col-md-2 py-1">
                                    <img  class="btn  w-100" src='{{ asset('/Uploads/store/photo/'.$store->store_photo) }}' alt="" style="height:150px;width:150px;">
                                    <br><a class="btn btn-danger w-100" href="{{ url('aremove/img/'.$store->id.'/1') }}">Remove </a>
                                </div>
                            @endif
                            @if ($store->store_qr)
                                <div class="col-4 col-md-2 py-1 text-center">
                                    <img  class="btn  w-100" src='{{ asset('/Uploads/store/qr/'.$store->store_qr) }}' alt="" style="height:150px;width:150px;">
                                    <br><a class="btn btn-danger w-100" href="{{ url('aremove/img/'.$store->id.'/2') }}">Remove </a>
                                </div>
                            @endif

                            <div class="row mb-0">
                                <div class="col-12 col-md-12 text-center">
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
