@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content mt-5">
        <div class="container-fluid">

            <div class="row">
                @foreach($bussines as $people)
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="card card-pricing bg-primary">
                            <div class="card-body ">
                                <div class="card-icon">
{{--                                    <i class="material-icons">business</i>--}}
                                    <img class="img-fluid" src="{{$people->imagen}}">
                                </div>
                                <h3 class="card-title">{{$people->nombre}}</h3>
                                <p class="card-description">
                                    {{$people->contacto}}
                                </p>
                                <p>
                                    {{$people->tipo}}
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
