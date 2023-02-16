@extends('layouts.MasterPage')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin-left: -15px;">
            <div class="card">
                <div class="card-header">Program Registration</div>
                <div style="margin-top: 10px">
                    <form method="POST" action="{{url('/pr')}}">
                        {{csrf_field()}}
                        
                        
                        @include('partials.error')
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Department</label>
                            <div class="col-md-6">
                                
                                <select id="departments" name="departments" class="form-control" required="">
                                    @foreach($data as $data)
                                    <option value="{{$data->id}}">{{$data->departments}}</option>
                                    
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Program</label>
                            <div class="col-md-6">
                                <input id="programs" type="text" class="form-control" name="programs"   required="">
                                
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                
                                <button id="submit" name="submit"  value="submit" type="submit" class="btn btn-primary form-control">
                                Submit
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection