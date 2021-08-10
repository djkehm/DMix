@extends('layouts.master')

@section('contenido')

    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-dark table-bordered table-striped table-responsive text-light">
                <thead>
                    <tr>
                        <td>ID Solicitud</td>
                        <td>Estado</td>
                    </tr>
                </thead>
                <tbody id="tbody-solicitudes_mix">

                </tbody>
            </table>
        </div>
    </div>

@endsection