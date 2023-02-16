@if ($errors->any())

    <div class="alert alert-danger">
    	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('Success'))
 <div class="alert alert-success">
    	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>
        	{{Session::get('Success')}}
        </p>
    </div>
@endif