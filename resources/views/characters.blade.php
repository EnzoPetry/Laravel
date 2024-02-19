@extends('layouts.main')

@section('content')
    <main>
        @foreach (array_keys($charactersInfo['Response']['characters']['data']) as $character)
            <p> {{ $charactersInfo['Response']['characters']['data'][$character]['classHash'] }}</p>
            <img src="https://www.bungie.net/{{ $charactersInfo['Response']['characters']['data'][$character]['emblemBackgroundPath'] }}"
            alt="Ícone" class="background">
        @endforeach
        
    </main>
@endsection
