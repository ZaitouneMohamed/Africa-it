@extends('admin.master.master')

@section('content')
    <h1>Banier List ({{ $baniers->count() }}) </h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.banier.create') }}" class="btn btn-success">add new banier</a>
        </div>
        <div class="card-body">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>categorie</th>
                        <th>image</th>
                        <th style="width: 40px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($baniers as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td> {{ $item->categorie->name }}</td>
                            <td> <img src="{{ $item->BanierImage }}" width="100px" height="70px" alt=""></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        {{-- <a class="dropdown-item"
                                            onclick="document.getElementById({{ $item->id }}).submit();"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <form id="{{ $item->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                        </form> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <h1 class="text text-center">No baniers Found</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
