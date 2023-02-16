@extends('layouts.MasterPage')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin-left: -15px;">
            <form method="POST" action="{{url('/oas')}}">
                {{csrf_field()}}
                @foreach($data as $data)
                <input  id="ems" type="hidden" class="form-control" name="ems"  value="{{$data->ems}}">
                <input  id="id" type="hidden" class="form-control" name="id" required="" value="{{$data->id}}">
                <!-- Basic Start -->
                @if($data->ems==0)
                <div class="card">
                    <div class="card-header">Basic Contact Information</div>
                    <div style="margin-top: 10px">
                        
                        
                        
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Application No </label>
                            <div class="col-md-6">
                                <input readonly="" id="id1" type="text" class="form-control" name="id1" required="" value="{{$data->id}}">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Select Faculty </label>
                            <div class="col-md-6">
                                
                                <select onchange="this.form.submit()" id="departments" name="departments" class="form-control" required="">
                                    <option selected value="{{$data->departments}}">{{$data->department_name}}</option>
                                    @foreach($departments as $departments)
                                    @if($data->departments!=$departments->id)
                                    <option value="{{$departments->id}}">{{$departments->departments}}</option>
                                    
                                    @endif
                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Select Program </label>
                            <div class="col-md-6">
                                <select onchange="this.form.submit()" id="programs" name="programs" class="form-control" required="">
                                    <option selected value="{{$data->programs}}">{{$data->program_name}}</option>
                                    @foreach($programs as $programs)
                                    @if($data->programs!=$programs->id)
                                    <option value="{{$programs->id}}">{{$programs->programs}}</option>
                                    
                                    @endif
                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Full Name </label>
                            <div class="col-md-6">
                                <input id="std_full_name" type="text" class="form-control" name="std_full_name"  autofocus required="" value="{{$data->std_full_name}}">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email"  autofocus required="" value="{{$data->email}}">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" required="">Phone with Country Code</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone"  autofocus required="" value="{{$data->phone}}" placeholder="Example +88 xxxxxxxxx">
                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                
                                <button id="s1" name="s1" value="s1" type="submit" class="btn btn-primary form-control">
                                Next
                                </button>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                @endif
                <!-- Basic End -->
                <!-- Personal Start -->
                @if($data->ems==1)
                <input  id="departments" type="hidden" class="form-control" name="departments"  value="{{$data->departments}}">
                <input  id="programs" type="hidden" class="form-control" name="programs" required="" value="{{$data->programs}}">
                <div  class="card" style="margin-top: 20px">
                    <div class="card-header">Personal Information</div>
                    <div style="margin-top: 10px">
                        
                        
                        
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Father's Name </label>
                            <div class="col-md-6">
                                <input  id="fn" type="text" class="form-control" name="fn" required="" value="{{$data->fn}}">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Father's Occupation </label>
                            <div class="col-md-6">
                                <input  id="fp" type="text" class="form-control" name="fp" required="" value="{{$data->fp}}">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Mother's Name </label>
                            <div class="col-md-6">
                                <input  id="mn" type="text" class="form-control" name="mn" required="" value="{{$data->mn}}">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Mother's Occupation </label>
                            <div class="col-md-6">
                                <input  id="mp" type="text" class="form-control" name="mp" required="" value="{{$data->mp}}">
                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                
                                <button  id="s2" name="s2" value="s2" type="submit" class="btn btn-primary form-control">
                                Next
                                </button>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                @endif
                <!-- Personal End -->
                
                @endforeach
                @include('partials.error')
            </form>
        </div>
    </div>
</div>
@endsection