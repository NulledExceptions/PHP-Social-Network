
$(function(){
 $('.auto-submit-star').rating({
  callback: function(value, link){
   // 'this' is the hidden form element holding the current value
   // 'value' is the value selected
   // 'element' points to the link element that received the click.
   alert("The value selected was '" + value + "'\n\nWith this callback function I can automatically submit the form with this code:\nthis.form.submit();");
   
   // To submit the form automatically:
   //this.form.submit();
   
   // To submit the form via ajax:
   //$(this.form).ajaxSubmit();
  }
 });
});
