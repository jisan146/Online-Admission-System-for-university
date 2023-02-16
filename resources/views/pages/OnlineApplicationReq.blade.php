@extends('layouts.MasterPage')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin-left: -15px;">
            <div class="card">
                <div class="card-header">Online Admission Begin</div>
                <div style="margin-top: 10px">
                    <form  method="POST" action="{{url('/oan')}}/y">
                        {{csrf_field()}}
                        
                        @include('partials.error')
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Insert Previous Application No</label>
                            <div class="col-md-6">
                                
                               
              @if($id=='y')
              <input required="" id="id" type="text" class="form-control" name="id"  autofocus >
              @else
              <input required="" id="id" type="text" class="form-control" name="id"  autofocus value="{{$id}}">
              @endif                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-3">
                                
                                <button type="submit" id="sp" name="sp" value="sp" class="btn btn-info form-control">
                                Next
                                </button>
                                
                            </div>

                            <div class="col-md-3">
                                
                                <button formnovalidate type="submit" id="sn" name="sn" value="sn" class="btn btn-warning form-control">
                                I have Not
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