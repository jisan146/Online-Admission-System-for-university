@extends('layouts.MasterPage')
@section('content')
<div class="" style="overflow: scroll;">
  
  
  
  <form method="POST" action="{{url('/cfl')}}">
    {{csrf_field()}}
    
    
    <table class="table table-hover">
      <thead>
        <tr>
        
          <th scope="col">Student ID</th>
          <th scope="col">Student Name</th>
          <th scope="col">CGPA</th>
          <th scope="col">Issue Date</th>
          <th scope="col">Program</th>
          <th scope="col">Certificate No</th>
          <th scope="col">Total Credit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $data)
        <tr>
         
          <td><input id="std_id[{{$data->id}}]" type="text" class="form-control" name="std_id[{{$data->id}}]"  autofocus required="" value="{{$data->std_id}}"</td>
          <td><input id="std_name[{{$data->id}}]" type="text" class="form-control" name="std_name[{{$data->id}}]"  autofocus required="" value="{{$data->std_name}}"</td>
          <td><input id="cgpa[{{$data->id}}]" type="text" class="form-control" name="cgpa[{{$data->id}}]"  autofocus required="" value="{{$data->cgpa}}"</td>
          <td><input id="issue_date[{{$data->id}}]" type="text" class="form-control" name="issue_date[{{$data->id}}]"  autofocus required="" value="{{$data->issue_date}}"</td>
          <td><input id="program[{{$data->id}}]" type="text" class="form-control" name="program[{{$data->id}}]"  autofocus required="" value="{{$data->program}}"</td>
          <td><input id="certificate_no[{{$data->id}}]" type="text" class="form-control" name="certificate_no[{{$data->id}}]"  autofocus required="" value="{{$data->certificate_no}}"</td>
          <td><input id="total_credit[{{$data->id}}]" type="text" class="form-control" name="total_credit[{{$data->id}}]"  autofocus required="" value="{{$data->total_credit}}"</td>
        
        </tr>
        <input id="id[{{$data->id}}]" type="hidden"  name="id[{{$data->id}}]"  autofocus required="" value="{{$data->id}}"
        
        @endforeach
        <tr>

          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><button id="submit" name="submit"  value="submit" type="submit" class="btn btn-primary form-control">Submit</button></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
@endsection