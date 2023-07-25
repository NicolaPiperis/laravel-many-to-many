@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center mt-5">
            Portfolio, anteprima:
        </h1>

        <ul class="text-center mt-3 list-unstyled fs-3 bg-dark rounded">
            @foreach ($portfolios as $portfolio)
                <li class="p-3">
                    <a class="text-decoration-none text-light" href="{{ route('dashboard', $portfolio->id) }}">
                        {{ $portfolio->name_project }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
