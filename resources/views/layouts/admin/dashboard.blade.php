@extends('layouts.app', ['activePage' => 'dashboard','class' => 'off-canvas-sidebar', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <p class="mx-auto text-black-80">Hay {{$bussines->count()}} registros totales</p>
            </div>

            <div class="row">
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

                                {{--                                <a href="#pablo" class="btn btn-white btn-round">Choose Plan</a>--}}
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
