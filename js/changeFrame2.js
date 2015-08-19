<script type="text/javascript">
function changeFrame2()
{
var xmlhttp1;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhtt1p=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhtt1p=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp1.onreadystatechange=function()
  {
  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
    {
    document.getElementById("regg").innerHTML=xmlhttp1.responseText;
    }
  }
xmlhttp1.open("GET","reginsurance.php",true);
xmlhttp1.send();
}
</script>