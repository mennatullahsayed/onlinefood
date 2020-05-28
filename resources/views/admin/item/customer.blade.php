
@extends('layouts.customer')

@section('content')
<div class="container">
<div class="col-md-12">
    <div class="row justify-content-center">     
            <h1 class="title" class="jumbotron text-center">order nooow</h1> <br>
    </div>            
    <div class="row justify-content-center">
            
        @foreach($items as $key=>$item)
        <div class="col-md-2">
            <div class="card-deck">
                <div class="card border-light mb-3" >
                    <img class="card-img-top" src="{{asset('uploads/'.$item->image)}}" alt="image">
                    <div class="card-body text-center">
                        <h2 class="card-title">{{ $item->name }}</h2>
                        <div class="card-text" >
                            <p>{{ $item->category->title }} Category </p>
                            <p>{{ $item->description }}</p>
                            <h2>{{ $item->price }} LE </h2>
                        </div>
                        <a href="{{ route('item.edit',$item->id) }}" class="btn btn-info btn-sm"><i class="material-icons">order</i></a>
                        <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST"></form>
                         <!--button-->
                    </div>
                </div >                                
           </div >
           
        </div>
        @endforeach
                                   
                    </div>
              </div>             
     </div>   
    
</div>
@endsection

