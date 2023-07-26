@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center bg-dark rounded text-light">
            Project name:
            {{ $portfolio->name_project }}
        </h1>

        <h2 class="text-center">Description:</h2>
        <p class="text-center py-4">
            {{ $portfolio->description }}
        </p>

        <div class="row justify-content-between mt-5">
            <span class="col text-center">
                Complexity:
                {{ $portfolio->complexity }}
            </span>

            <span class="col text-center">
                Main language of the project:
                {{ $portfolio->type->main_programming_language }}
            </span>
        </div>
        {{--
        <div class="text-center">
            {{ $portfolio->technology->name_tec }}
        </div> --}}
        <div class="text-center mt-5">
            Nome tecnologie utilizzate:
            @foreach ($portfolio->technologies as $technology)
                <div class="text-center">
                    {{ $technology->name_tec }}
                </div>
            @endforeach
        </div>

    </div>
@endsection
