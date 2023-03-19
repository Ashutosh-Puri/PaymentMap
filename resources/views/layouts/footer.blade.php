
@if(isset($footersend ))
    @foreach ($footersend as $f)


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer  py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">{{ $f->lable_1 }}</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $f->address }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $f->phone }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $f->email }}</p>
                    <div class="d-flex pt-2">
                        @if($f->social_1)
                            <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{ $f->social_1_url }}"><i class="{{  $f->social_1 }}"></i></a>
                        @endif
                        @if($f->social_2)
                            <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{ $f->social_2_url }}"><i class="{{  $f->social_2 }}"></i></a>
                        @endif

                        @if($f->social_3)
                            <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{ $f->social_3_url }}"><i class="{{  $f->social_3 }}"></i></a>
                        @endif
                        @if( $f->social_4)
                            <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{ $f->social_4_url }}"><i class="{{  $f->social_4 }}"></i></a>
                        @endif




                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">{{ $f->lable_2 }}</h4>
                    <a class="btn btn-link" href="{{ url($f->link_1_url) }}">{{ $f->link_1_name }}</a>
                    <a class="btn btn-link" href="{{ url($f->link_2_url) }}">{{ $f->link_2_name }}</a>
                    <a class="btn btn-link" href="{{ url($f->link_3_url) }}">{{ $f->link_3_name }}</a>
                    <a class="btn btn-link" href="{{ url($f->link_4_url)}}">{{ $f->link_4_name }}</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">{{ $f->lable_3 }}</h4>
                    <a class="btn btn-link" href="{{ url($f->link_5_url) }}">{{ $f->link_5_name }}</a>
                    <a class="btn btn-link" href="{{ url($f->link_6_url) }}">{{ $f->link_6_name }}</a>
                    <a class="btn btn-link" href="{{ url($f->link_7_url) }}">{{ $f->link_7_name }}</a>
                    <a class="btn btn-link" href="{{ url($f->link_8_url) }}">{{ $f->link_8_name }}</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">{{ $f->lable_4 }}</h4>
                    <p>{{ $f->discription}}</p>
                    <div class="position-relative w-100">
                        <form action="{{ url('subscribe') }}" method="post">
                            @csrf
                            <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5 @error('email') is-validated @enderror" type="email" value="{{ old('email') }}" name="email" placeholder="Your Email">
                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
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
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid ">

            <div class="row ">
                <div class="col-md-5 text-center text-md-start py-3  ">
                    &copy; <a class="border-bottom" href="{{ $f->devloper_site }}">{{ $f->devloper_company }}</a>, All Right Reserved.
                </div>
                <div class="col-md-5 text-center text-md-end py-3">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="{{ $f->devloper_site }}">{{ $f->devloper_name }}</a>

                </div>
                <div class="col-md-2 text-center text-md-end py-3">
                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square  back-to-top float-end"><i class="bi bi-arrow-up"></i></a>
                </div>

            </div>


    </div>
    <!-- Copyright End -->
    @endforeach
@endif



