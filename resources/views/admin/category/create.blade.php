@extends('layouts.app')

@section('title','category')

@push('css')
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--enctype="multipart/form-data"-->
                
                
<form class="input-group" method="POST" action="{{route('category.store')}}">
                    <input type="text" class="form-control"id="catname" placeholder="category name" name="title" required ><br>
                    <input type="text" class="form-control" placeholder="description" id="des" required name="description" >
                    <!--<br><label for="img"class="form-control">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*"class="form-control" required >
-->
                    <span class="input-group-btn">
                      <button class="btn btn-success btn-xs" type="submit" >Add</button>
                     
                    </span>
</form>
</div>
@endsection

