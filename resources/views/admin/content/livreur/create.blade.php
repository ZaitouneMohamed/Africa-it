@extends('admin.master.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Livreur</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.livreur.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                        placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone *</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone"
                        placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresser *</label>
                    <textarea class="form-control" placeholder="adresse" id="" rows="3" name="adresse"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">CIN (optional)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cin"
                        placeholder="livreur CIN ">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
