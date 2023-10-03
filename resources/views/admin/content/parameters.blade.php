@extends('admin.master.master')

@section('content')
    <div class="row">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card mb-4">
                <form action="" method="post" action="">
                    @csrf
                    <h5 class="card-header">Accouts</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="fa-brands fa-facebook"></i></span>
                            <input type="text" class="form-control" placeholder="facebook" name="facebook"
                                value="@if ($parameter->count() == 1) {{ $parameter->facebook }} @endif"
                                aria-label="facebook" aria-describedby="basic-addon11" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="fa-brands fa-instagram"></i></span>
                            <input type="text" class="form-control" placeholder="instagram" name="instagram"
                                value="@if ($parameter->count() == 1) {{ $parameter->instagram }} @endif"
                                aria-label="instagram" aria-describedby="basic-addon11" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="fa-brands fa-linkedin"></i></span>
                            <input type="text" class="form-control" placeholder="linkedin" name="linkedin"
                                value="@if ($parameter->count() == 1) {{ $parameter->linkedin }} @endif"
                                aria-label="linkedin" aria-describedby="basic-addon11" />
                        </div>
                        <button class="btn btn-success">submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <form action="" method="post" action="">
                    @csrf
                    <h5 class="card-header">Others</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-address-book"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="adresse" name="adresse"
                                value="@if ($parameter->count() == 1) {{ $parameter->adresse }} @endif"
                                aria-label="adresse" aria-describedby="basic-addon11" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-phone"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="phone" name="phone"
                                value="@if ($parameter->count() == 1) {{ $parameter->phone }} @endif" aria-label="phone"
                                aria-describedby="basic-addon11" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-audio-description"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="linkedin" name="small_about"
                                value="@if ($parameter->count() == 1) {{ $parameter->small_about }} @endif"
                                aria-label="amll_about" aria-describedby="basic-addon11" />
                        </div>
                        <button class="btn btn-success">submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <form action="" method="post" action="">
                    @csrf
                    <h5 class="card-header">About Section</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" rows="8" placeholder="about section" name="about">@if ($parameter->count() == 1) {{ $parameter->about }} @endif</textarea>
                        </div>
                        <button class="btn btn-success">submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <form action="" method="post" action="">
                    @csrf
                    <h5 class="card-header"><i class="fa fa-image" aria-hidden="true"></i></h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <input type="file" class="form-control" placeholder="image" name="image" />
                        </div>
                        <button class="btn btn-success">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
