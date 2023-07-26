@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Create new Project</h1>

        <form method="POST" action="{{ route('portfolio.store') }}">

            @csrf
            @method('POST')

            <label for="name">Name Project</label>
            <br>
            <input type="text" name="name_project" id="name_project">
            <br>
            <label for="description">Description</label>
            <br>
            <input type="text" name="description" id="description">
            <br>
            <label for="complexity">Complexity</label>
            <br>
            <input type="text" name="complexity" id="complexity">
            <br>
            <label for="type_id">Type</label>
            <br>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->main_programming_language }}
                    </option>
                @endforeach
            </select>
            <br>
            {{-- <select name="technology_id" id="technology_id">
                @foreach ($technologies as $technology)
                    <option value="{{ $technology->id }}">
                        {{ $technology->name_tec }}
                    </option>
                @endforeach
            </select> --}}
            @foreach ($technologies as $technology)
                <div class="form-check mx-auto" style="width: 200px">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="technology_id"
                        value="{{ $technology->id }}">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $technology->name_tec }}
                    </label>
                </div>
            @endforeach

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
