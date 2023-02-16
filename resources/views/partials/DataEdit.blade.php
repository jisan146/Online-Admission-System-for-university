@extends('layouts.master')
@section('content')
      <div class="col-md-9" >
          <div class="widget" style="margin-left: 10px;">
          	
            <h3>Product Edit</h3>
          	
              <div class="row">
                    @foreach($data as $data)
                    <form action="{{url('edit',$data->id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                      
  


    
<div class="form-group ">
      <label for="ID">ID</label>
      <input type="text" class="form-control" id="i" readonly="" name="a" placeholder="id" value="{{$data->id}}">
    </div>

    <div class="form-group ">
      <label for="inputEmail4">Tittle</label>
      <input type="text" class="form-control" id="a" name="a" placeholder="Tittle" value="{{$data->tittle}}">
    </div>



 

    <div class="form-group ">
      <label for="inputPassword4">Description</label>
      <input type="text" class="form-control" id="b" name="b" placeholder="Description" value="{{$data->description}}">
    </div>

  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input type="file" class="form-control" id="c" name="c" placeholder="Image">
  </div>



  <button type="submit" class="btn btn-primary">Sign in</button>
  @endforeach
  @include('partials.error')
</form>




              </div>
            </div>
      </div>
@endsection
