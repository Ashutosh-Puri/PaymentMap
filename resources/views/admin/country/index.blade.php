@extends('admin.layout')
@push('countries')
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
                    View Countries
                    <a class="btn btn-success fw-bold float-end" href="{{ route('admin.country.create') }}">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($countries as $i)
                                <tr>
                                    <td scope="row">{{ $i->id }}</td>
                                    <td> {{ $i->name }}</td>
                                    <td>{{ $i->status==0?'Active':'In Active'; }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('admin.country.edit',$i->id) }}">Edit</a>

                                        <a class="btn btn-danger btn-sm fw-bold" href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
                                        <form action="{{ route('admin.country.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                             <td colspan="5">No Record Found..!</td>
                            @endforelse
                            {{ $countries->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
