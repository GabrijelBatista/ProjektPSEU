@extends('layouts.app')

@section('content')
<body style="background:url('images/register.jpg'); background-repeat: no-repeat; background-size: 100%;">
    <div class="container" style="margin: 0 auto; border-style:solid; border-color:rosybrown; border-radius: 25px;  width:300px; margin-top: 100px; background-color: rgba(0, 128, 128, 0.5);">
    <form method="POST" action="{{ route('users.update', Auth::user()->id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label style="margin: 10px " for="name">Korisničko ime</label>
        <input style="margin: 10px "type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
    </div>
    <div class="form-group">
        <label style="margin: 10px"for="email">E-mail</label>
        <input style="margin: 10px "type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
    </div>
    <button style="margin: 10px "type="submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Spremi
    </button>
</form>
    </div>
</body>
@endsection