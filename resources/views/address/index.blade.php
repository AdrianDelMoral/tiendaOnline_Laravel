@extends('address')
@section('titulo', 'Lista de Direcciones')
@section('cuerpo')
    {{-- <h1>Aqui se listan todas las Calles</h1>
    <div><a class="btn btn-danger" href="{{ route('profile.show') }}">Volver al Perfil</a></div>
    @forelse ($addresses as $address)
    @if ($address->user_id === $usuario)
    <div>
        <p><strong>Calle:</strong> {{ $address->calle }}</p>
        <p><strong>Patio:</strong> {{ $address->patio }}</p>
        <p><strong>Puerta:</strong> {{ $address->puerta }}</p>
        <p><strong>Numero:</strong> {{ $address->numero }}</p>
        <p><strong>Codigo Postal:</strong> {{ $address->cod_postal }}</p>
        <p><strong>Ciudad:</strong> {{ $address->ciudad }}</p>
        <p><strong>Provincia:</strong> {{ $address->provincia }}</p>
        <p><strong>Pais:</strong> {{ $address->pais }}</p> (<a href="{{ route('direccion.edit', $address->id) }}"> editar Direccion </a>)
    </div>
    Fecha: {{ $address->created_at }}
        {{ $address->contenido }}
        <form action="{{ route('direccion.destroy', $address->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="eliminar">
        </form>
    @endif
    @empty
        No tienes ninguna dirección, necesitas crear una para poder editarla.
        <div class="col-span-6 sm:col-span-4">
            <a id="address" type="button" href="{{ route('direccion.create') }}" style="background-color: white; border-color: grey;">Crear dirección</a>
        </div>
    @endforelse --}}
    <main class="margenTop mb-5 container">
        <section class="row">
            <div class="table-responsive">
                <div><a class="text-light btn btn-primary my-3" href="{{ route('profile.show') }}">Volver al Perfil</a>
                </div>
                <table class="table table-secondary table-sm">
                    <thead class="table-dark">
                        {{-- titulos --}}
                        <tr>
                            <th scope="col">
                                <span>Calle</span>
                            </th>
                            <th scope="col">
                                <span>Patio</span>
                            </th>
                            <th scope="col">
                                <span>Puerta</span>
                            </th>
                            <th scope="col">
                                <span>Numero</span>
                            </th>
                            <th scope="col">
                                <span>Codigo Postal</span>
                            </th>
                            <th scope="col">
                                <span>Ciudad</span>
                            </th>
                            <th scope="col">
                                <span>Provincia</span>
                            </th>
                            <th scope="col">
                                <span>País</span>
                            </th>
                            <th scope="col">
                                <span>fecha Creada</span>
                            </th>
                            <th scope="col">
                                <span>Editar dirección</span>
                            </th>
                            <th scope="col">
                                <span>Eliminar Dirección</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ($addresses as $address)
                                @if ($address->user_id === $usuario)
                                <div>
                                    <p><strong>Calle:</strong> {{ $address->calle }}</p>
                                    <p><strong>Patio:</strong> {{ $address->patio }}</p>
                                    <p><strong>Puerta:</strong> {{ $address->puerta }}</p>
                                    <p><strong>Numero:</strong> {{ $address->numero }}</p>
                                    <p><strong>Codigo Postal:</strong> {{ $address->cod_postal }}</p>
                                    <p><strong>Ciudad:</strong> {{ $address->ciudad }}</p>
                                    <p><strong>Provincia:</strong> {{ $address->provincia }}</p>
                                    <p><strong>Pais:</strong> {{ $address->pais }}</p> (<a href="{{ route('direccion.edit', $address->id) }}"> editar Direccion </a>)
                                </div>
                                Fecha: {{ $address->created_at }}
                                    {{ $address->contenido }}
                                    <form action="{{ route('direccion.destroy', $address->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="eliminar">
                                    </form>
                                @endif
                                @empty
                                    No tienes ninguna dirección, necesitas crear una para poder editarla.
                                    <div class="col-span-6 sm:col-span-4">
                                        <a id="address" type="button" href="{{ route('direccion.create') }}" style="background-color: white; border-color: grey;">Crear dirección</a>
                                    </div>
                            @endforelse --}}
                        @forelse ($addresses as $address)
                            @if ($address->user_id === $usuario)
                                <tr>
                                    {{-- Fecha --}}
                                    <td><span> {{ $address->calle }}</span></td>
                                    <td><span> {{ $address->patio }}</span></td>
                                    <td><span> {{ $address->puerta }}</span></td>
                                    <td><span> {{ $address->numero }}</span></td>
                                    <td><span> {{ $address->cod_postal }}</span></td>
                                    <td><span> {{ $address->ciudad }}</span></td>
                                    <td><span>{{ $address->provincia }}</span></td>
                                    <td><span>{{ $address->pais }}</span></td>
                                    <td><span>{{ $address->created_at }}</span></td>
                                    <td class="text-center"><a class="btn btn-success text-ligth"
                                            href="{{ route('direccion.edit', $address->id) }}"> Editar</a></td>
                                    <td class="text-center">
                                        <form method="post" id="formAddress">
                                            @csrf
                                            @method('delete')
                                            <input id="addressid" type="text" value="{{$address->id}}" hidden>
                                            <input id="eliminar" type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            No tienes ninguna dirección, necesitas crear una para poder editarla.
                            <tr>
                                <td colspan="11" class="text-center">
                                    <div class="col-span-6 sm:col-span-4">
                                        <a class="btn btn-primary text-light my-5" id="address" type="button" href="{{ route('direccion.create') }}">Crear dirección</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    </body>

    </html>
