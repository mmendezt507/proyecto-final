@extends('welcome');

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>CATEGORIAS</h1>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <div><h3>CATEGORIAS</h4></div>
                    <div>
                        <button class="btn btn-primary" data-toggle="modal"
                        data-target="#modalAgregarCategoria">Nueva categoria</button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            @if($category->status == 1)
                                <tr>
                                    <td>{{ $category->id}}</td>
                                    <td>{{ $category->name}}</td>
                                    <td>{{ $category->description}}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <!-- Modal -->
            <div class="modal fade" id="modalAgregarCategoria">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="" method="POST">
                                @csrf
                            <div class="modal-header" style="background: #3c8dbc; color: #fff">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Agregar categoria</h4>
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
