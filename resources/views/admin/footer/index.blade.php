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
                    View Footer
                    <a class="btn btn-success fw-bold float-end" href="{{ route('admin.footer.create') }}">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered text-center table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($footer))
                                @forelse ($footer as $f)
                                    <tr>
                                        <td scope="row">{{ $f->id }}</td>

                                        <td>{{ $f->status=='0'?'Active':'Inactive'; }}</td>

                                        <td>
                                            <a class="btn btn-primary btn-sm fw-bold" href="{{ route('admin.footer.edit',$f->id) }}">Edit</a>

                                            <a class="btn btn-danger btn-sm fw-bold" href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
                                            <form action="{{ route('admin.footer.destroy',$f->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="3">No Record Found..!</td>
                                @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

@endsection
