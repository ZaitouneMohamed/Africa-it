@extends('admin.master.master')

@section('content')
    <h1>Livreurs List ({{ $livreurs->count() }}) </h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.livreur.create') }}" class="btn btn-success">add new Livreur</a>
        </div>
        <div class="card-body">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>adresse</th>
                        <th>cin</th>
                        <th style="width: 40px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($livreurs as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td> {{ $item->full_name }}</td>
                            <td> {{ $item->email }}</td>
                            <td> {{ $item->phone }}</td>
                            <td> {{ $item->adresse }}</td>
                            <td> {{ $item->cin }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('admin.livreur.edit', $item->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        @if ($item->Orders->count() === 0)
                                            <a class="dropdown-item"
                                                onclick="document.getElementById({{ $item->id }}).submit();"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</a>
                                            <form id="{{ $item->id }}" method="post"
                                                action="{{ route('admin.livreur.destroy', $item->id) }}">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {{ $livreurs->links() }}
        </div>
    </div>
@endsection
