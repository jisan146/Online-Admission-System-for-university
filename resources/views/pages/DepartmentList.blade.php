@extends('layouts.MasterPage')
@section('content')
<div class="container" >
  
  
  
  <form method="POST" action="{{url('/drl')}}">
    {{csrf_field()}}
    
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Department</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $data)
        <tr>
          <td><input id="departments[{{$data->id}}]" type="text" class="form-control" name="departments[{{$data->id}}]"  autofocus required="" value="{{$data->departments}}"</td>
          <input id="id[{{$data->id}}]" type="hidden"  name="id[{{$data->id}}]"   required="" value="{{$data->id}}"
        </tr>
        
        @endforeach
        <tr>
          <td align="right"><button id="submit" name="submit"  value="submit" type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
@endsection