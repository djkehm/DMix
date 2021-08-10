@extends('layouts.master')

@section('contenido')

<body>
    <div class="row mt-5">
        <div class="row mt-5">
            <div class="mt-3">
                <div class="col-8 col-md-5 col-lg-4 mx-auto">
                    <div class="card alpha2">
                        <div class="card-header alpha2 text-light text-center">
                            <span>SOLICITAR MIX</span>
                        </div>
                    </div>
                    <div class="card-body alpha">
                        <div class="mb-4">
                            <label for="nombre-txt" class="form-label text-light">Nombre</label>
                            <input type="text" id="nombre-txt" class="form-control" placeholder="Nombre Apellido">
                        </div>
                        <div class="mb-4">
                            <label for="user-txt" class="form-label text-light">Nombre DJ creador</label>
                            <input type="text" id="dj-txt" class="form-control" placeholder="A.K.A DJ">
                        </div>
                        
                        <div class="mb-4">
                            <label for="fecha-txt" class="form-label text-light">Fecha de creacio</label>
                            <input type="date" id="fecha-txt" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="descripcion-txt" class="form-label text-light">Estilos musicales</label>
                            <textarea class="form-control" id="descripcion-txt" rows="3"></textarea>
                        </div>

                        <div class="card-footer d-grid gap-1 mb-4 text-center">
                            <button id="enviarMIX-btn" class="btn btn-outline-info text-center">Enviar solicitud</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="mt-5">
            
        </div>
    
    </div>
</body>
    
@endsection
@section("javascript")
    <script src="{{asset('js/service/solicitudMIXService.js')}}"></script>
    <script src="{{asset('js/solicitudMIX.js')}}"></script>
@endsection