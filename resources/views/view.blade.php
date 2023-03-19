@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
            <div class="card">
                <div class="card-header bg-primary text-white fw-bold">
                    {{ __('View Store') }}
                    <a class="btn btn-success float-end" href="{{ url('/') }}">Back</a>
                </div>

                <div class="card-body">
                   <div class="row">
                        <div class="col-12 col-md-8 m-0 p-0">
                            <label  class="col-12 form-control bg-success text-white fw-bold text-center rounded-0">Store Details</label>
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">Store  Name</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold rounded-0">{{ $store->store_name }}</label>
                                </div>
                            </div>
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold  rounded-0">Owner Name</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->owner_name }}</label>
                                </div>
                            </div>
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold  rounded-0">Store Category</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->store_category }}</label>
                                </div>
                            </div>
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold  rounded-0">Store Type</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->store_type }}</label>
                                </div>
                            </div>
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold  rounded-0">Store Time</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->store_time }}</label>
                                </div>
                            </div>
                            @if (isset($store->store_site))
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">Store Website</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0"><a class="text-white" href="{{ $store->store_site }}">{{ $store->store_site }}</a></label>
                                </div>
                            </div>
                            @endif
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold  rounded-0">Store Address <br>&nbsp;<br>&nbsp;</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">
                                        {{ $store->street }} , {{ $store->village_id  }} <br>
                                        {{ $store->city_id}} , {{ $store->state_id }} <br>
                                        {{ $store->country_id  }}.
                                    </label>
                                </div>
                            </div>
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">Store Status</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->status==0?'Active':'Inactive'; }}</label>
                                </div>
                            </div>
                            <label  class="col-12 form-control bg-success text-white text-center fw-bold rounded-0">Payment Details</label>
                            @if(isset($store->account_name ))
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">Account  Holder Name</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->account_name }}</label>
                                </div>
                            </div>
                            @endif
                            @if(isset($store->account_no ))
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">Account  Number</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->account_no }}</label>
                                </div>
                            </div>
                            @endif
                            @if(isset($store->ifsc_code ))
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">IFSC Code</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->ifsc_code }}</label>
                                </div>
                            </div>
                            @endif
                            @if(isset($store->upi_id))
                            <div class="row p-0 m-0">
                                <div class="col  p-0 m-0">
                                    <label  class="col-12 form-control bg-info text-white fw-bold rounded-0">UPI ID</label>
                                </div>
                                <div class="col p-0 m-0">
                                    <label  class="col-12 form-control bg-warning text-white fw-bold  rounded-0">{{ $store->upi_id }}</label>
                                </div>
                            </div>
                            @endif
                            @if(null==($store->upi_id && $store->ifsc_code && $store->account_no && $store->account_name))
                             <label  class="col-12 form-lable text-center bg-light ">No Details Found</label>
                            @endif

                        </div>
                        <div class="col-12 col-md-4 m-0 p-0">
                            <div class="row m-0 p-0">
                                <label  class="col-12 form-control bg-success text-white fw-bold text-center rounded-0">Store Photo</label>
                                <label  class="col-12 p-3 form-control bg-info text-center rounded-0">
                                    <img src="{{ asset('Uploads/store/photo/'.$store->store_photo) }}" style="height:320px;width:100%;">
                                </label>
                                <label  class="col-12 form-control bg-success text-white fw-bold text-center rounded-0">QR Code</label>
                                <label  class="col-12  p-3 form-control bg-info text-center rounded-0">
                                     <img src="{{ asset('Uploads/store/qr/'.$store->store_qr) }}" style="height:700px;width:100%;">
                                </label>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
