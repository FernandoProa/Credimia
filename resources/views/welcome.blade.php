@extends('layouts.app',['class' => 'off-canvas-sidebar', 'activePage' => 'home'])
@section('content')
    <div class="container mt-3 mb-5" style="height: auto;">
        <div class="row">
            <img class="rounded mx-auto d-block mx-auto mt-5" src="{{asset('material/img/credimia_logos2.png')}}">
        </div>
        <div class="row align-items-center my-auto">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card card-login card-hidden mb-3">

                        <div class="card-body">
                            <div class="bmd-form-group">
                                <div class="input-group">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                        {{--                                        <div class="fileinput-preview fileinput-exists thumbnail input-group"></div>--}}
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                 alt="preview image" style="max-height: 250px; border-radius: 70%">
                                        </div>
                                        <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <input type="file" accept="image/*" name="imageprofile" id="imageprofile" required/>
                                        </span>
                                            {{--                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i--}}
                                            {{--                                                    class="fa fa-times"></i> Remove</a>--}}
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="bmd-form-group mt-3">
                                <div class="input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre"
                                           required>
                                </div>
                            </div>
                            <div class="bmd-form-group mt-3">
                                <div class="input-group">
                                    <input type="text" name="type" class="form-control" placeholder="Tipo de negocio"
                                           required>
                                </div>

                            </div>
                            <div class="bmd-form-group mt-3">

                                <div class="input-group">
                                    <input type="text" name="contact" class="form-control" placeholder="Contacto"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#imageprofile').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });

    </script>
@endpush
