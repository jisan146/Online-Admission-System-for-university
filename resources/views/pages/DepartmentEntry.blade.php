@extends('layouts.MasterPage')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin-left: -15px;">
            <div class="card">
                <div class="card-header">Department Registration</div>
                <div style="margin-top: 10px">
                    <form method="POST" action="{{url('/dr')}}">
                        {{csrf_field()}}
                        
                        @include('partials.error')
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Department</label>
                            <div class="col-md-6">
                                <input id="departments" type="text" class="form-control" name="departments"  autofocus required="">
                                
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