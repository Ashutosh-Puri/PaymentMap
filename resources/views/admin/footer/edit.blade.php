@extends('admin.layout')
@push('footer')
btn-primary text-white
@endpush
@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
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
                <div class="card-header bg-primary fw-bold text-white">
                    Edit Footer
                    <a class="btn btn-success fw-bold float-end" href="{{ route('admin.footer.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{  route('admin.footer.update',$footer->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="lable_1" value="{{ $footer->lable_1 }}" class="form-control my-1  @error('lable_1') is-invalid @enderror" placeholder="Our Office" >
                                    @error('lable_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="address"   value="{{ $footer->address }}" class="form-control my-1 @error('address') is-invalid @enderror" placeholder="123 Street, New York, USA" >
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="phone"  value="{{ $footer->phone }}" class="form-control my-1 @error('phone') is-invalid @enderror" placeholder="+012 345 67890" >
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="email" name="email"  value="{{ $footer->email }}" class="form-control my-1 @error('email') is-invalid @enderror" placeholder="info@example.com" >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_1"  value="{{ $footer->social_1 }}" class="form-control my-1 @error('social_1') is-invalid @enderror" placeholder="Social Icon 1 Class" >
                                    @error('social_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_1_url" value="{{ $footer->social_1_url }}" class="form-control my-1 @error('social_1_url') is-invalid @enderror" placeholder="Social Icon 1 URL" >
                                    @error('social_1_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_2"  value="{{ $footer->social_2 }}" class="form-control my-1 @error('social_2') is-invalid @enderror" placeholder="Social Icon 2 Class" >
                                    @error('social_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_2_url" value="{{ $footer->social_2_url }}" class="form-control my-1 @error('social_2_url') is-invalid @enderror" placeholder="Social Icon 2 URL" >
                                    @error('social_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_3" value="{{ $footer->social_3 }}" class="form-control my-1 @error('social_3') is-invalid @enderror" placeholder="Social Icon 3 Class" >
                                    @error('social_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_3_url"   value="{{ $footer->social_3_url }}"  class="form-control my-1 @error('social_3_url') is-invalid @enderror" placeholder="Social Icon 3  URL" >
                                    @error('social_3_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_4"  value="{{ $footer->social_4 }}"  class="form-control my-1 @error('social_4') is-invalid @enderror" placeholder="Social Icon 4 Class" >
                                    @error('social_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="social_4_url" value="{{ $footer->social_4_url }}" class="form-control my-1 @error('social_4_url') is-invalid @enderror" placeholder="Social Icon 4 URL" >
                                    @error('social_4_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="lable_2" value="{{ $footer->lable_2 }}"  class="form-control my-1 @error('lable_2') is-invalid @enderror" placeholder="Services" >
                                    @error('lable_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_1_name" value="{{ $footer->link_1_name }}" class="form-control my-1 @error('link_1_name') is-invalid @enderror" placeholder="Financial Planning" >
                                    @error('link_1_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_1_url" value="{{ $footer->link_1_url }}" class="form-control my-1 @error('link_1_url') is-invalid @enderror" placeholder="Financial Planning URL" >
                                    @error('link_1_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_2_name" value="{{ $footer->link_2_name }}" class="form-control my-1 @error('link_2_name') is-invalid @enderror" placeholder="Cash Investment" >
                                    @error('link_2_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_2_url" value="{{ $footer->link_2_url }}" class="form-control my-1 @error('link_2_url') is-invalid @enderror" placeholder="Cash Investment URL" >
                                    @error('link_2_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_3_name"  value="{{ $footer->link_3_name }}" class="form-control my-1 @error('link_3_name') is-invalid @enderror" placeholder="Financial Consultancy" >
                                    @error('link_3_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_3_url" value="{{ $footer->link_3_url }}" class="form-control my-1 @error('link_3_url') is-invalid @enderror" placeholder="Financial Consultancy URL" >
                                    @error('link_3_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_4_name"   value="{{ $footer->link_4_name }}" class="form-control my-1 @error('link_4_name') is-invalid @enderror" placeholder="Business Loans" >
                                    @error('link_4_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_4_url"  value="{{ $footer->link_4_url }}" class="form-control my-1 @error('link_4_url') is-invalid @enderror" placeholder="Business Loans URL" >
                                    @error('link_4_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="lable_3"  value="{{ $footer->lable_3 }}" class="form-control my-1 @error('lable_3') is-invalid @enderror" placeholder="Quick Links" >
                                    @error('lable_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_5_name" value="{{ $footer->link_5_name }}" class="form-control my-1 @error('link_5_name') is-invalid @enderror" placeholder="About Us" >
                                    @error('link_5_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_5_url" value="{{ $footer->link_5_url }}" class="form-control my-1 @error('link_5_url') is-invalid @enderror" placeholder="About Us URL" >
                                    @error('link_5_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_6_name" value="{{ $footer->link_6_name }}" class="form-control my-1 @error('link_6_name') is-invalid @enderror" placeholder="Contact Us" >
                                    @error('link_6_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_6_url" value="{{ $footer->link_6_url }}" class="form-control my-1 @error('link_6_url') is-invalid @enderror" placeholder="Contact Us URL" >
                                    @error('link_6_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_7_name" value="{{ $footer->link_7_name }}" class="form-control my-1 @error('link_7_name') is-invalid @enderror" placeholder="Our Services" >
                                    @error('link_7_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_7_url" value="{{ $footer->link_7_url }}" class="form-control my-1 @error('link_7_url') is-invalid @enderror" placeholder="Our Services URL" >
                                    @error('link_7_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_8_name"  value="{{ $footer->link_8_name }}" class="form-control my-1 @error('link_8_name') is-invalid @enderror" placeholder="Terms & Condition" >
                                    @error('link_8_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="text" name="link_8_url" value="{{ $footer->link_8_url }}" class="form-control my-1 @error('link_8_url') is-invalid @enderror" placeholder="Terms & Condition URL" >
                                    @error('link_8_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="lable_4" value="{{ $footer->lable_4 }}" class="form-control my-1 @error('lable_4') is-invalid @enderror" placeholder="Newsletter" >
                                    @error('lable_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" name="discription" value="{{ $footer->discription }}" class="form-control my-1 @error('discription') is-invalid @enderror" placeholder="Dolor amet sit justo amet elitr clita ipsum elitr est." >
                                    @error('discription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" name="devloper_name"  value="{{ $footer->devloper_name }}" class="form-control my-1 @error('devloper_name') is-invalid @enderror" placeholder="Devloper Name" >
                                    @error('devloper_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" name="devloper_company" value="{{ $footer->devloper_company }}" class="form-control my-1 @error('devloper_company') is-invalid @enderror" placeholder="Devloper Company" >
                                    @error('devloper_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" name="devloper_site" value="{{ $footer->devloper_site }}" class="form-control my-1 @error('devloper_site') is-invalid @enderror" placeholder="Devloper site" >
                                    @error('devloper_site')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label>Status</label>
                                    <input id="status"type="checkbox" name="status" value="{{ $footer->status==true?'checked':''; }}" class="my-1 mx-2 @error('status') is-invalid @enderror" placeholder="Devloper site" >

                                    <label for="status">Inactive</label>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
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
