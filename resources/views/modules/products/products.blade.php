@extends('welcome');

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>PRODUCTOS</h1>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <div><h3>PRODUCTOS</h4></div>
                    <div>
                        <button class="btn btn-primary" data-toggle="modal"
                        data-target="#modalAgregarProducto">Nuevo producto</button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            @if($product->status == 1)
                                <tr>
                                    <td>{{ $product->id}}</td>
                                    <td>{{ $product->name}}</td>
                                    <td>{{ $product->description}}</td>
                                    <td>{{ $product->price}}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <!-- Modal -->
            <div class="modal fade" id="modalAgregarProducto">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="" method="POST">
                                @csrf
                            <div class="modal-header" style="background: #3c8dbc; color: #fff">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Agregar producto</h4>
                                </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name" class="name">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <textarea  name="description" id="description" class="form-control" rows="3"></textarea>
                                    <!--<input type="text" name="description" id="description" class="form-control">-->
                                </div>
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
