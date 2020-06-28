
<form id='userForm'>
<div>
<input type='text' name='name' id='name' placeholder='Name'/>
</div>
<input  id="submit" onclick="myFunction()" type="button" value="Submit" />
</div>
</form>
<div id='response'></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>

function myFunction() {
var name = document.getElementById("name").value;
console.log(name);
}

</script>