
$(function() {
$("#submitpics").click(function() {
var photoid = $("#upid").val();

$.ajax({
type: "POST",
url: "uploadphotoplate.php",
data: photoid,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
alert('Images Uploaded successfully');
{
onclick="grayOut(false)"
}
return false;
});
});
</script>