<x-app-layout>
    <x-slot name="header">
        <h2 style="color:#fff" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion Costos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--Registrar un producto con los siguientes datos, id auto incrementable, código único del
producto, nombre del producto, categoría, sucursal en la que se encuentra, y descripción, cantidad,
y precio venta.-->

                <div class="container m-5">
                    <div class="p-4">
                        <h3 style="font-size:1.5rem">Estas modificando el producto: <span style="font-weight:bolder">{{ucwords($productos[0]['name'])}}</span></h3>
                        <span style="color:#7e7171">A continuacion podra modificar su productos!!</span>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('producto.store') }}" method="POST">
                                        @csrf
                                        <div class="form-outline">
                                            <input type="text" id="cod_unique" name="cod_unique" class="form-control" value="{{$productos[0]['cod_unique']}}"/>
                                            <label class="form-label" for="cod_unique">Codigo Unico <i class="fas fa-barcode"></i></label>
                                            
                                        </div>
                                        @error('cod_unique')
                                                <div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
                                        @enderror
                                        <br>
                                        <div class="form-outline">
                                            <input type="text" class="form-control" name="name" value="{{$productos[0]['name']}}">
                                            <label class="form-label" for="name">Nombre Producto <i class="fab fa-product-hunt"></i></label>
                                            
                                        </div>
                                        @error('name')
                                                <div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
                                        @enderror
                                        <br>
                                        <div class="form-outline">
                                            <input type="text" class="form-control" name="ammount" value="{{$productos[0]['ammount']}}">
                                            <label class="form-label" for="ammount">Cantidad <i class="fab fa-product-hunt"></i></label>
                                            
                                        </div>
                                        @error('ammount')
                                                <div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
                                        @enderror
                                        <br>
                                        <div class="form-outline">
                                            <input type="number" class="form-control" name="price" value="{{$productos[0]['price']}}">
                                            <label class="form-label" for="price">Precio <i class="fas fa-money-check-alt"></i></label>
                                            
                                        </div>
                                        @error('price')
                                                <div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
                                        @enderror
                                        <br>
                                        <div>

                                            <select type="text" class="select-form" name="sucursal" value="{{$productos[0]['sucursal']}}">
                                                <option value="01">Sucursal Santiago <i class="far fa-building"></i></option>
                                                <option value="02">Sucursal Las Condes <i class="far fa-building"></i></option>
                                                <option value="03">Sucursal Buin <i class="far fa-building"></i></option>
                                            </select>
                                            
                                        </div>
                                        @error('sucursal')
                                                <div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
                                        @enderror
                                        <br>
                                        <div>
                                            <select type="text" class="select-form" name="category" value="{{$productos[0]['category']}}">
                                                <option value="01">Categoria 1 <i class="fas fa-sliders-h"></i></option>
                                                <option value="02">Categoria 2 <i class="fas fa-sliders-h"></i></option>
                                            </select>
                                            
                                        </div>
                                        @error('category')
                                                <div class="alert alert-danger mt-1"><span>{{ $message }}</span></div>
                                        @enderror
                                        <br>
                                        <div class="form-outline">
                                        <textarea name="description" class="form-control" cols="10" rows="5">{{$productos[0]['description']}}</textarea>
                                            <label class="form-label" for="description">Descripcion <i class="fas fa-audio-description"></i></label>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-success">
                                                Guardar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                        <div class="input-group">

                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1" >Buscar</label>
                        </div>
                        <button type="button" class="btn btn-primary" style="background: #e48e66!important;">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
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
                                        @if(isset($productos))
                                        @foreach($productos as $p)
                                        <tr>
                                            <td>{{$p['cod_unique']}}</td>
                                            <td>{{$p['name']}}</td>
                                            <td>{{$p['category']}}</td>
                                            <td>{{$p['sucursal']}}</td>
                                            <td>{{$p['description']}}</td>
                                            <td>{{$p['ammount']}}</td>
                                            <td>{{$p['price']}}</td>
                                            <td>
                                            <div style="display:flex">
                                                <a href="{{ route('producto.show', $p['cod_unique']) }}" class="btn btn-sm btn-outline-primary">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <form action="{{ route('producto.update', $p['cod_unique']) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <button class="btn btn-sm btn-outline-info">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('producto.destroy', $p['cod_unique']) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-sm btn-outline-danger" onclick="confirm('¿Esta seguro de eliminar este usuario?')">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="mt-5" style="justify-content: center;display: flex;">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                        <a class="page-link btn-pagination" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link btn-pagination" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</x-app-layout>
