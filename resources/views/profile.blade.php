@extends('layouts.main')

@section('content')

    <body>
        <img src="https://www.bungie.net/{{ $profileInfo['Response']['bnetMembership']['iconPath'] }}" alt="Ícone" class="icone">
        <h1>{{ $profileInfo['Response']['bnetMembership']['supplementalDisplayName'] }}</h1>
    </body>
@endsection
