@extends('admin.layouts.base')

@section('contents')
    <div class="container">
        <h1>Add new technologies</h1>



        <form method="POST" action="{{ route('admin.technologies.store') }}" novalidate>
            @csrf

            <div class="mb-3">
                <label for="technology" class="form-label">Technology</label>
                <input type="text" class="form-control @error('technology') is-invalid @enderror" id="technology"
                    name="technology" value="{{ old('technology') }}">
                @error('technology')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
