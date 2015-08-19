$(document).ready(function() {
     
    //if submit button is clicked
    $('#Rbt2').click(function () {       
         
        //Get the data from all the fields
        var email = $('input[email=email]');
        var password = $('input[name=password]');
        var sex = $('input[name=sex]');
        var birthday = $('input[name=birthday]');
 
        //organize the data properly
        var data = 'email=' + email.val() + '&password=' + password.val() + '&sex=' + sex.val() + '&birthday=' + birthday.val();
         
         
        //start the ajax
        $.ajax({
            //this is the php file that processes the data and send mail
            url: "registeruser.php",
             
            //GET method is used
            type: "GET",
 
            //pass the data        
            data: data,    
             
            //Do not cache the page
            cache: false,
             
            //success
            success: function (html) {             
                //if process.php returned 1/true (send mail success)
                if (html==1) {                 
                    //hide the form
                    $('.registerDiv').fadeOut('slow');                
                     
                    //show the success message
                    $('.done').fadeIn('slow');
                     
                //if process.php returned 0/false (send mail failed)
                } else alert('Sorry, unexpected error. Please try again later.');              
            }      
        });
         
        //cancel the submit button default behaviours
        return false;
    });
}); 