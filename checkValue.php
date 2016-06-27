<!doctype html>
<html>
<head>
  <title>Check Value Form Google</title>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>
  <form>
    <label for="name">Enter Search Term</label>
    <input type="text" name="name" id="name"/>
    <input type="submit" id="check" value="Check">
    <div id="result"></div>
  </form>

  <script>
  $(document).ready(function(){
$("#check").click(function(){
var term = $("#name").val();
term = term.split(' ').join('%');
var dataString = 'term='+term;
if (term == '' ) {
$("#result").html('Please enter a term ! ');
} else {
// Returns successful data submission message when the entered information is stored in database.
$.ajax({
type: "POST",
url: "test.php",
data: dataString,
cache: false,
success: function(result){
var data="";
//data=JSON.stringify(result);

$("#result").html(result);
}
});
}
return false;
});
});
</script>
</body>
</html>
