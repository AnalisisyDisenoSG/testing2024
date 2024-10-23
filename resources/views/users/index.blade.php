<h1>Usuarios</h1>
<hr>
@foreach($users as $user)
    <p><a href="{{ $user->path() }}">{{ $user->name }}</a></p>
@endforeach
