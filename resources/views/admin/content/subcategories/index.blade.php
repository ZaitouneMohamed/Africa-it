@extends('admin.master.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Sub Categories : ({{ $subcategories->count() }})</h1>
            <a href="{{route('admin.SubCategorie.create')}}" class="btn btn-success">create sub categorie</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>categorie</th>
                        <th>products</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($subcategories)
                        @foreach ($subcategories as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td> {{ Str::limit($item->name, 10, '...') }}</td>
                                <td>{{ $item->categorie->name }}</td>
                                <td>{{ $item->products->count() }}</td>
                                <td class="d-flex">
                                    <a href="{{route('admin.SubCategorie.edit',$item->id)}}" class="btn btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                                    <form action="{{route('admin.SubCategorie.destroy',$item->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger" style="margin-left: 5px"><i class="nav-icon fas fa-trash"></i></button>
                                    </form>
                                    {{-- @if ($item->subcategories->count() == 0)
                                    @endif --}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $subcategories->links() }}
        </div>
    </div>
@endsection
