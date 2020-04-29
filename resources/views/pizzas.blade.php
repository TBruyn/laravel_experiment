@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Pizza list
            </div>
            
            {{ $name }}
            {{ $age }}

            @foreach($pizzas as $pizza)
                <p>{{ $loop->index + 1}}. {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}</p>
            @endforeach

        </div>

    </div>
@endsection