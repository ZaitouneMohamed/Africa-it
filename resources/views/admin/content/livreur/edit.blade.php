@extends('admin.master.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Livreur</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.livreur.update', $livreur->id) }}">
            @csrf
            @method("PUT")
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                        value="{{ $livreur->full_name }}" placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                        value="{{ $livreur->email }}" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone"
                        value="{{ $livreur->phone }}" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresser *</label>
                    <textarea class="form-control" placeholder="adresse" id="" rows="3" name="adresse">{{ $livreur->full_name }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">CIN (optional)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cin"
                        value="{{ $livreur->cin }}" placeholder="livreur CIN ">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
