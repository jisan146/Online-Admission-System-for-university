@extends('layouts.master')
@section('content')
      <div class="col-md-9" >
          <div class="widget" style="margin-left: 10px;">
          	
            <h3>Product Entry</h3>
          	
              <div class="row">
                    
                    <form enctype="multipart/form-data" class="needs-validation was-validated" novalidate >
                     
  





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



  <button class="btn btn-success btn-submit">Submit</button>
  @include('partials.error')
</form>




              </div>
            </div>
      </div>


      

<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(".btn-submit").click(function(e){

  

        e.preventDefault();

   

        var name = $("input[name=a]").val();

        var password = $("input[name=b]").val();

        var email = $("input[name=c]").val();

   

        $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{name:a, password:b, email:c},

           success:function(data){

              alert(data.success);

           }

        });

  

  });

</script>


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


