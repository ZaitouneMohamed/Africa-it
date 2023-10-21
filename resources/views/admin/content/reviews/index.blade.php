@extends('admin.master.master')

@section('content')
    {{-- <livewire:admin.content.products-index />  --}}
    <div class="card">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <!-- /.card-header -->
        <div class="table-responsive text-nowrap">
            <table class="table ">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>review</th>
                        <th>stars</th>
                        <th>product</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ Str::limit($item->review, 10, '...') }}</td>
                            <td>{{ $item->stars }}</td>
                            <td>{{ $item->Product->title }}</td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $reviews->links() }}
    </div>
    {{-- </div> --}}
@endsection
