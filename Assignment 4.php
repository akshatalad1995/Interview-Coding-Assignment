<form id="myForm" method="post">
  <div>
    <input type="text" class="value" name="value">
    <button type="submit" class="done">Click!</button>
  </div>
</form>


<div id="console"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	var content = [];

$( '#myForm' ).submit(function( e ) {
	e.preventDefault();
	content.push( $( '.value' ).val() );
  $( '.value' ).val( '' );
  $( '#console' ).html( content.toString() );
});
</script>