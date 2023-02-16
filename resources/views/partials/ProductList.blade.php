@extends('layouts.master')
@section('content')
<div style="height: 400px; overflow-y: scroll;" class="container">
            
  @include('partials.error')
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>tittle</th>
        <th>description</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
      
         @foreach($data as $data)
        
        <tr>
        <td><a href="{{url('/update',$data->id)}}" class="btn btn-success">Edit</a></td>
        
        <td>{{$data->tittle}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->image}}</td>
        <td><a href="#deletemodel{{$data->id}}" data-toggle="modal" class="btn btn-danger">Delete</a></td>
        </tr>
        <!-- Modal -->
<div class="modal fade" id="deletemodel{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('ProductDelete',$data->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
        Are You Want To delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Sure</button>
      </div>
    </div>
  </div>
</div>
      @endforeach


     




      
     
    </tbody>
  </table>
</div>
@endsection