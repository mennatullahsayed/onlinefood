@extends('layouts.app')

@section('title','category')

@push('css')
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Category</div>

                <div class="card-body">
                
                
<form class="input-group" method="POST" action="{{route('category.store')}}">
@csrf
                    <input type="text" class="form-control" placeholder="category name" name="title"><br>
                    <input type="text" class="form-control" placeholder="description"  name="description" >
                    <span class="input-group-btn">
                      <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                      <button class="btn btn-success btn-xs" type="submit" >Add</button>
                    </span>
</form>
</div>
@endsection

