function changeid()
    {
        var imgPath = new String();
        imgPath = document.getElementById("browser_id").style.background;
       
        if(imgPath == "url('../images/uploadidbutton.png')" || imgPath == "")
        {
            document.getElementById("browser_id").style.background = "url('images/uploadidchecked.png')";
        }
    }
function changeplate()
    {
        var imgPath = new String();
        imgPath = document.getElementById("browser_plate").style.background;
       
        if(imgPath == "url('../images/uploadplatebutton.png')" || imgPath == "")
        {
            document.getElementById("browser_plate").style.background = "url('images/uploadplatechecked.png')";
        }
    }
function changeinsurance()
    {
        var imgPath = new String();
        imgPath = document.getElementById("browser_insurance").style.background;
       
        if(imgPath == "url('../images/uploadinsurancebutton.png')" || imgPath == "")
        {
            document.getElementById("browser_insurance").style.background = "url('images/uploadinsurancechecked.png')";
        }
    }
function changeregistration()
    {
        var imgPath = new String();
        imgPath = document.getElementById("browser_registration").style.background;
       
        if(imgPath == "url('../images/uploadregistrationbutton.png')" || imgPath == "")
        {
            document.getElementById("browser_registration").style.background = "url('images/uploadregistrationchecked.png')";
        }
    }