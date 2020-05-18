@extends('layouts.customer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">order nooow</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary"> 
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($items as $key=>$item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                          <td><img src="{{asset('uploads/'.$item->image)}}" alt="image" style="width:50px;height:50px" ></td>
                                            <td>{{ $item->category->title }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <a href="{{ route('item.edit',$item->id) }}" class="btn btn-info btn-sm"><i class="material-icons">order</i></a>

                                                <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
                                                  </form>
                                              <!--button-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      
                      
                      
                      
                      
                      
                      
                        </div>
                
                
                     </div>
               


        </div>
    </div>
</div>
@endsection