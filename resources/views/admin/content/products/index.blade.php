@extends('admin.master.master')

@section('content')
    {{-- <livewire:admin.content.products-index />  --}}
    <div class="card">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card-header">
            {{-- <a href="{{route('admin.Products.create')}}" class="card-title">add new Pro</a> --}}
        </div>
        <!-- /.card-header -->
        <div class="table-responsive text-nowrap">
            <table class="table ">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>old price</th>
                        <th>Image</th>
                        <th>Sub categorie</th>
                        <th>Prenium</th>
                        <th>active</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products)
                        @foreach ($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ Str::limit($item->title, 10, '...') }}</td>
                                <td>{{ Str::limit($item->slug, 10, '...') }}</td>
                                <td> {{ Str::limit($item->description, 10, '...') }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->old_price }}</td>
                                <td> {{ $item->images->count() }}</td>
                                <td>{{ $item->SubCategorie->name }}</td>
                                <td>
                                    @if ($item->prenium == 1)
                                        <a class="btn btn-success"
                                            href="{{ route('admin.SwitchPreniumModeForProduct', $item->id) }}">prenium</a>
                                    @else
                                        <a class="btn btn-danger"
                                            href="{{ route('admin.SwitchPreniumModeForProduct', $item->id) }}">not
                                            prenium</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->active == 1)
                                        <a class="btn btn-success"
                                            href="{{ route('admin.SwitchActiveModeForProduct', $item->id) }}">Active</a>
                                    @else
                                        <a class="btn btn-danger"
                                            href="{{ route('admin.SwitchActiveModeForProduct', $item->id) }}">Not Active</a>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.product.edit', $item->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            @if ($item->SubCategorie->count() == 0)
                                                <a class="dropdown-item"
                                                    onclick="document.getElementById({{ $item->id }}).submit();"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                                <form id="{{ $item->id }}"
                                                    action="{{ route('admin.categories.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $products->links() }}
    </div>
    {{-- </div> --}}
@endsection
