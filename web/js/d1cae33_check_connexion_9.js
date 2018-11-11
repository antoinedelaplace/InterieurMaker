/**
 *  *
 * verify if email exist and if password is good
 * if there are errors, display an error div with the error message
 *
 * @returns {boolean} true if it's the good credentials or false if not
 * @param path for the controller
 */
function checkCredentials(path)
{
    var email = document.forms["connect"]["_username"].value;
    var password = document.forms["connect"]["_password"].value;
    var check = false;
    var xmlhttp;

    if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            check = true;
        else if(xmlhttp.readyState == 4) {
            document.getElementById("alert").innerHTML = '<i class="fi-alert"></i>'+ xmlhttp.responseText;
            document.getElementById("div-alert").style = "display : block;";
            check = false;
        }
        else
            check = false;
    };
    xmlhttp.open("GET", path +"?email=" + email + "&password=" + password, false);
    xmlhttp.send();
    return (check);
}