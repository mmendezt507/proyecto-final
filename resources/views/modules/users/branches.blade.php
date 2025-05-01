@extends('welcome');

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Sucursales</h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <button class="btn btn-primary" data-toggle="modal" data-target="modalAgregarSucursal">Nueva sucursal</button>
                </div>
                <div class="box-body">
                    
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalAgregarSucursal" tabindex="-1" role="dialog" aria-labelledby="modalAgregarSucursalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <form>
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar sucursals</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </form>
                            <div class="modal-body">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div>
                                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                            <input type="text" class="form-control" id="nombre" name="name" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar sucursal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection