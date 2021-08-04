@extends('layouts.admin.app', ['activePage' => 'dashboard','class' => 'off-canvas-sidebar', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <p class="mx-auto text-black-80">Hay {{$bussines->count()}} registros totales</p>
            </div>

            <!-- <div class="row">
                @foreach($bussines as $people)
                    <div class="col-md-3">
                        <div class="card card-pricing col-md-7" style="border-radius: 85px; background-color: #96448E">
                            <div class="card-body text-center">
                                <div class="card-icon">
                                    {{--                                    <i class="material-icons">business</i>--}}
                                    <img class="img-fluid rounded-circle" src="{{$people->imagen}}">
                                </div>
                                <h3 class="card-title  text-white">{{$people->nombre}}</h3>
                                <p class="card-description  text-white">
                                    {{$people->category->nombre}}
                                </p>
                                <p class="card-description  text-white">
                                    {{$people->contacto}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> -->
            <div class="row">
                @foreach($bussines as $people)
                <div class="col-md-3" style="background-color:transparent">
                    <div class="card col-md-10 align-self-center" style="background-color:white">
                        <br>
                        <img src="{{$people->imagen}}" class="rounded-circle" alt="Perfil" width="140" height="140"
                                style="display:block; margin:auto;">
                        <div class="card-body">
                            <h5 class="card-title text-primary text-center"><strong> {{$people->nombre}}</strong></h5>
                            <div>
                                <p class="card-text text-center">
                                    Negocio: {{$people->category->nombre}} <br>
                                    Contacto: {{$people->contacto}} <br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
