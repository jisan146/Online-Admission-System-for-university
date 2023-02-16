@extends('layouts.master')
@section('content')
      <div class="col-md-9" >
          <div class="widget">
          	
            <h3>Feture Image</h3>
          	<div style="height: 500px; overflow-y: scroll; overflow-x: hidden;">
              <div class="row">

                    
                    @foreach($data as $data)
                    <div class="col-md-3">
                        <div class="card" style="width:100%; height:100% ;">
                          
                          <img class="card-img-top" src="ProductImage/{{$data->image}}" alt="Card image">
                          
                          <div class="card-body">
                              <h4 class="card-title">{{$data->tittle}}</h4>
                              <p class="card-text">{{$data->description}}</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- data:image/png;base64, {{$data->imagefile}} --}}




              </div>
              </div>
            </div>
      </div>
@endsection

 
     
          
