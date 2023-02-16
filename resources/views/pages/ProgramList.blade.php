@extends('layouts.MasterPage')
@section('content')
<div class="container" >
  
  
  
  <form method="POST" action="{{url('/prl')}}">
    {{csrf_field()}}
    
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Department</th>
          <th scope="col">Program</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $data)
        <tr>
          <td>
            <select id="departments[{{$data->id}}]" name="departments[{{$data->id}}]" class="form-control">
              <option selected value="{{$data->departments}}">{{$data->department_name}}</option>
             
              @foreach($dpts as $d)

              @if($d->id!=$data->departments)
              <option value="{{$d->id}}">{{$d->departments}}</option>
              
              @endif
              
              @endforeach
            </select>
          </td>
          
          <td><input id="programs[{{$data->id}}]" type="text" class="form-control" name="programs[{{$data->id}}]"  autofocus required="" value="{{$data->programs}}"</td>
          <input id="id[{{$data->id}}]" type="hidden"  name="id[{{$data->id}}]"   required="" value="{{$data->id}}"
        </tr>
        
        @endforeach
        <tr>
          <td></td>
          <td align="right"><button id="submit" name="submit"  value="submit" type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
@endsection