@extends('userDashboard')
@section('titulo', 'Administrar Usuarios')
@section('cuerpo')
    <main class="container mt-5">
        <section class="row">
            <div class="table-responsive">
                <table class="table table-secondary table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Imagen de perfil</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">rol</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $user)
                            {{$user->name}}
                            {{$user->rol}}
                            {{$user->email}}
                            <img src="{{$user->profile_photo_path ? "/storage/".$user->profile_photo_path : "https://cdn.pixabay.com/photo/2022/01/25/16/01/sky-6966721_1280.jpg"}}">
                            <br>
                        @endforeach --}}
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">
                                    <div>
                                        <img src="{{ $user->profile_photo_path? '/storage/' . $user->profile_photo_path: 'http://cdn.onlinewebfonts.com/svg/img_574534.png' }}"
                                            alt="image profile" class="imgProduct">
                                    </div>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->rol }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="{{route('gestionarpedido', $user->id)}}">Ver Pedidos</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>

@endsection
