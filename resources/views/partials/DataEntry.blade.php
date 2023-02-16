@extends('layouts.master')
@section('content')
      <div class="col-md-9" >
          <div class="widget" style="margin-left: 10px;">
          	
            <h3>Product Entry</h3>
          	
              <div class="row">
                    
                    <form action="{{url('/store')}}" method="post" enctype="multipart/form-data" class="needs-validation was-validated" novalidate>
                      {{csrf_field()}}
  





    <div class="form-group " >
      <label for="a">Tittle</label>
      <input type="text" class="form-control" id="a" name="a" placeholder="Tittle" required>
      <div class="valid-feedback">
        Done
      </div>
      <div class="invalid-feedback">
        Can't Empty
      </div>



      
    </div>



    

    <div class="form-group ">
      <label for="inputPassword4">Description</label>
      <input type="text" class="form-control" id="b" name="b" placeholder="Description"required>
      <div class="valid-feedback">
        Done
      </div>
      <div class="invalid-feedback">
        Can't Empty
      </div>
    </div>

  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input type="file" class="form-control" id="c" name="c" placeholder="Image"required>
      <div class="valid-feedback">
        Done
      </div>
      <div class="invalid-feedback">
        Can't Empty
      </div>
  </div>



  <button type="submit" class="btn btn-primary">Sign in</button>
  @include('partials.error')
</form>




              </div>
            </div>
      </div>


      <script type="text/javascript" >

(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>
@endsection


