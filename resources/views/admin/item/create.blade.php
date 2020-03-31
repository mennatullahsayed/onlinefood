@extends('layouts.app')

@section('title','category')

@push('css')
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Item</div>

                <div class="card-body">
                
                
                  <form class="input-group" method="POST" action="{{route('item.store')}}">
@csrf
                      <label class="control-label">Category</label>
                      <select class="form-control" name="category">
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                      </select>

                      <label class="control-label">Name</label><br>
                      <input type="text" class="form-control" name="name"><br>

                      <label class="control-label"> Description </label> <br> 
                      <textarea class="form-control" name="description"></textarea><br>
                      <!-- <input type="text" class="form-control" placeholder="description" name="description" ><br> -->

                      <label class="control-label">Price</label><br>
                      <input type="number" class="form-control" name="price"><br>

                      <label class="control-label">Image</label><br>
                      <input type="file" name="image"><br>
                    
                    <span class="input-group-btn">
                      <a href="{{ route('item.index') }}" class="btn btn-danger">Back</a>
                      <button class="btn btn-success btn-xs" type="submit" >Add</button>
                    </span>
</form>
</div>
@endsection

