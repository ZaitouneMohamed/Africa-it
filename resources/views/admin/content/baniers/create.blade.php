@extends('admin.master.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New banier</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.banier.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">categorie</label>
                    <select class="form-select" name="categorie" id="exampleSelectBorder">
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}"> {{ $item->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="Image"  class="form-control" id="imageInput">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <img width="120px" alt="" id="selectedImage">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script>
    const imageInput = document.getElementById('imageInput');
    const selectedImage = document.getElementById('selectedImage');

    imageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader(); // Define 'reader' within this block
            reader.onload = function() {
                selectedImage.src = reader.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
