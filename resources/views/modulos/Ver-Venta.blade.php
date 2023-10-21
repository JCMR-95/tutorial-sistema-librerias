@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-4">
                <h3>Gestionar la Venta ID: {{ $venta->id }}</h3>

                <h4>Vendedor: <br> {{$vendedor->name}} </h4>
                <h4>Cliente: <br> {{$cliente->nombre}} </h4>
                <h4>Fecha: <br> {{$venta->fecha}} </h4>
                <h4>Total: <br> {{$precio}} </h4>

            </div>
        </div>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped DT1">
                    <thead>
                        <tr>
                            <th>Libro</th>
                            <th>Autor</th>
                            <th>Portada</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($librosVenta as $lv)
                            @foreach ($libros as $libro)
                                @if ($libro->id == $lv->id_libro)
                                    <tr>
                                        <td>{{ $libro->titulo }}</td>
                                        <td>{{ $libro->autor->nombre }}</td>
                                        <td><img src="{{ url('storage/'.$libro->portada) }}" width="50px"></td>
                                        <td>{{ $libro->precio }}</td>
                                    </tr>
                                @endif
                            @endforeach

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection
