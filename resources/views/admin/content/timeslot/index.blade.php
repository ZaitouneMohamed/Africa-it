@extends('admin.master.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <form action="{{ route('admin.TimeSlot.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Time Start </label>
                                <input type="time" name="start_time" class="form-control" value="10:30:00"
                                    placeholder="Ex : 10:30 am" required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Time Ends </label>
                                <input type="time" name="end_time" class="form-control" value="19:30:00"
                                    placeholder="5:45 pm" required="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>start</th>
                        <th>End</th>
                        <th>Statue</th>
                        <th style="width: 40px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($times)
                        @foreach ($times as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <input style="background: white !important; border: none !important; " type="time"
                                        value="{{ $item->begin }}" disabled="">
                                </td>
                                <td>
                                    <input style="background: white !important; border: none !important; " type="time"
                                        value="{{ $item->end }}" disabled="">
                                </td>
                                <td style="padding: 10px;cursor: pointer">
                                    <a href="{{ route('admin.SwitchStatueOfTimeSlot', $item->id) }}">
                                        {!! $item->Statue !!}
                                    </a>
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
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
