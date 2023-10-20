@extends('admin.master.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <form action="{{ route('admin.TimeSlot.update', $time->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Time Start </label>
                                <input type="time" name="start_time" class="form-control" value="{{ $time->begin }}"
                                    placeholder="Ex : 10:30 am" required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="input-label" for="exampleFormControlInput1"> Time Ends </label>
                                <input type="time" name="end_time" class="form-control" value="{{ $time->end }}"
                                    placeholder="5:45 pm" required="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
