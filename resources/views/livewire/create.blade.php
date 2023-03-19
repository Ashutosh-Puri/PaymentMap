<div class="row">
    <div class="col-12 py-1">
        <label for="Address" class="form-label ">{{ __('Addres Filter') }}</label>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-group ">
            <select   wire:model="selectedCountry" class="form-control text-center @error('country_id') is-invalid @enderror" name="country_id">
                 <option   hidden >-- Select Country --</option>
                @foreach($countries as $c)
                    <option  class="text-start " @selected($c->status=='2') value="{{ $c->id }}" >{{ $c->name }}</option>
                @endforeach
            </select>
            @error('country_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class=" col-12 col-md-3">
        <div class="form-group ">

            <select   wire:model="selectedState" class="form-control text-center  @error('state_id') is-invalid @enderror" name="state_id" {{ $selectedCountry ==null ?'disabled':'';}}>
                <option  hidden>-- Select State --</option>
                 @foreach($states as $s)
                    <option class="text-start" value="{{ $s->id }}" {{ $s->status=='2'? 'selected':''; }} > {{ $s->name }} </option>
                @endforeach
            </select>
            @error('state_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-2">
        <div class="form-group ">
            <select   wire:model="selectedCity" class="form-control text-center @error('city_id') is-invalid @enderror " name="city_id" {{ $selectedState ==null ?'disabled':'';}}>
                <option hidden >-- Select City --</option>
                @foreach($cities as $ct)
                    <option class="text-start" value="{{ $ct->id }}" {{ $ct->status=='2'? 'selected':''; }}>{{ $ct->name }}</option>
                @endforeach
            </select>
            @error('city_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class=" col-12 col-md-2">
        <div class="form-group ">
            <select wire:model="selectedVillage"  class="form-control text-center @error('village_id') is-invalid @enderror" name="village_id" {{ $selectedCity ==null ?'disabled':'';}}>
                <option hidden >-- Select Village --</option>
                @foreach($villages as $v)
                    <option class="text-start" value="{{ $v->id }}">{{ $v->name }}</option>
                @endforeach
            </select>
            {{  $selectedVillage}}
            @error('village_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    {{-- <div class=" col-12 col-md-2">
        <div class="form-group ">
            <input id="street" type="text" placeholder="Enter Street / Len" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" autocomplete="street" autofocus>
            @error('street')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div> --}}
</div>
<div class="row my-5">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center align-middle">
                <thead class="table-light">
                    <caption>Registered Stores</caption>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Owner Name</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @forelse ($stores as $i)
                            <tr class="table-primary" >
                                <td scope="row">{{ $i->id }}</td>
                                <td>{{ $i->store_name }}</td>
                                <td>{{ $i->owner_name }}</td>
                                <td>{{ $i->store_category }}</td>
                                <td>{{ $i->store_type}}</td>
                                <td> <a class="btn btn-info" href="{{ url('/') }}">View</a></td>
                            </tr>
                        @empty
                            <td colspan="6" > No Record Found... !</td>
                        @endforelse
                        {{-- {{ $stores->links('pagination::bootstrap-5'); }} --}}




                    </tbody>
                    <tfoot>

                    </tfoot>
            </table>
        </div>

    </div>
</div>

