@extends('layouts.app')

@section('title','category')



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
                    
                
                

                  <table class="table table-striped projects" id ="cats">
                      <thead>
                        <tr>
                         
                          <th style="width: 20%">category name</th>
                          <th>description</th>
                          <th>created at</th><th>created at</th>
                         <!-- <th>pic</th> -->
                          
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                     @foreach($categories as $id=>$category) 
                        <tr>
                            
                          <td>
                            <a href="{{route('category.edit',$category->$id)}}">{{$category->$title}}</a>
                            
                          </td>
                          <td>{{$category->description}}</td>
                          <td>{{$category->created_at}}</td>
                          <td>{{$category->updated_at}}</td>
                          <!--<td>
                            
                                <img src="images/user.png" class="avatar" alt="Avatar">
                          </td>-->
                          
                          <td>
            
                            <a href="{{route('category.edit',$category->$id)}}" class="btn btn-info btn-xs"> Edit </a>
                            
                            <form id="deleteform-{{$category->id}} " action="{{route('category.destroy',$category->id)}}" method="POST">
                               @csrf
                              @method('DELETE')</form>
                              <!--<i class="fa fa-trash-o" -->
                            <button class="btn btn-danger btn-xs" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"> Delete </button>
                          </td>
                        </tr>
                        

                </div>
            </div>
        </div>
    </div>
<script>//function addcategory(){
   // if (document.getElementById(catname).value!=null&&document.getElementById(des).value!=null){
//var tableRef = document.getElementById('cats');

// Insert a row in the table at the last row
/*var newRow   = tableRef.insertRow();
var rowcon = '<tr><td><a>'+document.getElementById('catname').value+'</a><br/></td><td>'+document.getElementById('des').value+'</td>'
+
'<td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>'+
'<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td></tr>';
newRow.innerHTML =rowcon;}
// Insert a cell in the row at index 0


var name  = newRow.insertCell().getElementById('addcat').value;
var desc  = newRow.insertCell().getElementById('des').value;
var pics = newRow.insertCell().getElementById('pic').value;
var edit =newRow.insertCell();;
// Append a text node to the cell
//var newText  = document.createTextNode('New row');
} 

function deletecat(){

    
} 

</script>

</div>
@endsection

