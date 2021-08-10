@extends('layouts.master')

@section('contenido')


    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-dark table-bordered table-striped table-responsive text-light">
                <thead>
                    <tr>
                        <td>ID Solicitud</td>
                        <td>Nombre</td>
                        <td>Estado</td>
                    </tr>
                </thead>
                <tbody id="tbody-solicitudes_djs">

                </tbody>
            </table>
        </div>
    </div>

@endsection
@section("javascript")
    <script src="{{asset('js/service/solicitudDJService.js')}}"></script>
    <script src="{{asset('js/ver_solicitudesDJ.js')}}"></script>
@endsection