@extends('layouts.master')
@section('content')
      <div class="col-md-9" >
          <div class="widget" style="margin-left: 10px;">
          	
            <h3>Product Entry</h3>
          	
              <div class="row">
                    
<form id="upload_form" action="{{url('/store')}}" method="post" enctype="multipart/form-data" class="needs-validation was-validated" novalidate>
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
    <input onchange="uploadFile()" type="file" class="form-control" id="c" name="c" placeholder="Image"required>
      <div class="valid-feedback">
        Done
      </div>
      <div class="invalid-feedback">
        Can't Empty
      </div>

        <progress id="progressBar" value="0" max="100" class="form-control" ></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
  </div>



  <button type="submit" class="btn btn-primary">Sign in</button>
  @include('partials.error')
</form>







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


//--------
function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("c").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("c", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "{{url('/store')}}"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Uploaded " + (event.loaded/(1024*1024)).toFixed(2) + " M bytes of " + (event.total/(1024*1024)).toFixed(2);
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}
</script>
@endsection


