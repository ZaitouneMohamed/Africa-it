@extends('admin.master.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Coupon</h3>
            <hr><br>
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <form action="{{ route('admin.coupon.index') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Title </label>
                                <input type="text" name="title" class="form-control" placeholder="title here"
                                    required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Code * </label>
                                <input type="text" name="code" class="form-control" placeholder="code promo or coupon"
                                    required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> start date </label>
                                <input type="date" name="start_date" class="form-control" placeholder="start date"
                                    required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> END Date </label>
                                <input type="date" name="end_date" class="form-control" placeholder="end date"
                                    required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Purchase </label>
                                <input type="text" name="min_purchase" class="form-control"
                                    placeholder="min of purchase to take this coupon" required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Discount </label>
                                <input type="text" name="discount" class="form-control" placeholder="discount"
                                    required="">
                            </div>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>title</th>
                        <th>code</th>
                        <th>date debut</th>
                        <th>date fin</th>
                        <th>min purchase</th>
                        <th>discount</th>
                        <th style="width: 40px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($coupons as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                {{ $item->code }}
                            </td>
                            <td>
                                {{ $item->start_date }}
                            </td>
                            <td>
                                {{ $item->end_date }}
                            </td>
                            <td>
                                {{ $item->min_purchase }}
                            </td>
                            <td>
                                {{ $item->discount }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('admin.TimeSlot.edit', $item->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item"
                                            onclick="document.getElementById({{ $item->id }}).submit();"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                        <form id="{{ $item->id }}" method="post"
                                            action="{{ route('admin.TimeSlot.destroy', $item->id) }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <h1>No Coupon Found</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
