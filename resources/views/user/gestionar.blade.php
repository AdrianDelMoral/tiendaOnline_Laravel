@foreach ($users as $user)
    {{$user->name}}
    {{$user->rol}}
    {{$user->email}}
    <img src="{{$user->profile_photo_path ? "/storage/".$user->profile_photo_path : "https://cdn.pixabay.com/photo/2022/01/25/16/01/sky-6966721_1280.jpg"}}">
    <br>
@endforeach
