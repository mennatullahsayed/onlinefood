@extends('layouts.app')

@section('title','edit')
@push('css')
@endpush

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">Edit That Category</div>

                <div class="card-content">
                <form method="POST" action="{{ route('category.update',$category->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $category->title }}">
                                            <label class="control-label">Description</label>
                                            <input type="text" class="form-control" name="description" value="{{ $category->description }}">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
