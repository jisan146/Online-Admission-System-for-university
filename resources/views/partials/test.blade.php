<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
    <form id="formoid" action="{{url('/store1')}}" title="" method="post">
        {{csrf_field()}}
        <div>
            <label class="title">First Name</label>
            <input type="text" id="a" name="a" >
        </div>
        <div>
            <label class="title">Name</label>
            <input type="text" id="b" name="b" >
        </div>
        <div>
            <input type="submit" id="submitButton"  name="submitButton" value="Submit">
        </div>
 </form>
<script type='text/javascript'>
    /* attach a submit handler to the form */
    $("#formoid").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/
      var posting = $.post( url, { a: $('#a').val(), b: $('#b').val() } );

      /* Alerts the results */
      posting.done(function( data ) {
        alert('success');
      });
    });
</script>

</body>
</html> 