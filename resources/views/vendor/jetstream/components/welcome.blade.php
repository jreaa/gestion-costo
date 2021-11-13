<!--Registrar un producto con los siguientes datos, id auto incrementable, código único del
producto, nombre del producto, categoría, sucursal en la que se encuentra, y descripción, cantidad,
y precio venta.-->

<div class="container m-5">
    <div class="p-4">
        <h3 style="font-size:1.5rem">Añade un producto</h3>
        <span style="color:#7e7171">A continuacion podra llevar la gestion de sus productos!!</span>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('producto.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="label-form" for="cod_unique">Codigo Unico <i class="fas fa-barcode"></i></label>
                            <input type="text" class="form-control" name="cod_unique">
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="name">Nombre Producto <i class="fab fa-product-hunt"></i></label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="sucursal">Sucursal <i class="far fa-building"></i></label>
                            <select type="text" class="form-control" name="sucursal">
                                <option value="01">Sucursal Santiago</option>
                                <option value="02">Sucursal Las Condes</option>
                                <option value="03">Sucursal Buin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="category">Categoria <i class="fas fa-sliders-h"></i></label>
                            <select type="text" class="form-control" name="category">
                                <option value="01">Categoria 1</option>
                                <option value="02">Categoria 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="description">Descripcion <i class="fas fa-audio-description"></i></label>
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="ammount">Cantidad <i class="fas fa-sort-amount-up-alt"></i></label>
                            <input type="number" class="form-control" name="ammount">
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="price">Precio <i class="fas fa-money-check-alt"></i></label>
                            <input type="number" class="form-control" name="price">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if(isset($productos))
        {{$productos}}
        @endif
        <div class="col-md-7">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>Cod</th>
                            <th>Producto</th>
                            <th>Categoria</th>
                            <th>Sucursal</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio Venta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@foreach($productos as $p)
    {{$p}}
@endforeach
