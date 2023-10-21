@extends('admin.master.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Product</h3>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.product.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title"
                        placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" id="content" placeholder="Enter the Description" rows="5" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="price"
                        placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Old Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="old_price"
                        placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" accept="image/*" multiple
                        name="images[]" placeholder="Enter image">
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="exampleSelectBorder">Select Categorie</label>
                        <select class="form-select" id="categorie" name="categorie_id">
                            <option value=""></option>
                            @foreach (\App\Models\Categorie::all() as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleSelectBorder">Select sub Categorie</label>
                        <select class="form-select" name="sub_categorie" id="subcategorie">

                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('categorie').addEventListener('change', function() {
            var selectedCategorie = this.value;
            var selectedCategorie = this.value;
            var url = "{{ route('getSubCategories', ':id') }}";
            url = url.replace(':id', selectedCategorie);
            $.ajax({
                url: url,
                success: function(response) {
                    var subCategoriesHtml = '';
                    response.forEach(function(categorie) {
                        subCategoriesHtml += '<option value="' + categorie.id + '">' + categorie
                            .name +
                            '</option>';
                    });
                    document.getElementById('subcategorie').innerHTML = subCategoriesHtml;
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
@endsection

@section('style')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
