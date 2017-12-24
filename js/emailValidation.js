var xmlHttp = getXMLHTTPRequest();

function getXMLHTTPRequest() {
    var xmlHttp;
    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xmlHttp = false;
        }
    } else {
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            xmlHttp = false;
        }
    }
    if (!xmlHttp) {
        alert("cannot create xmlHttp object");
    } else {
        return xmlHttp;
    }
}

//sending the request to the server
function getEmailresult() {
    var email = document.getElementById("email").value;
if(email != ""){
    //if the server is not busy and is ready to communicate
    if ((xmlHttp.readyState === 0) || (xmlHttp.readyState === 4)) {
        xmlHttp.open("POST","loginValidation.php", true);
        xmlHttp.onreadystatechange =EmailresultCallback;
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("email="+email);
    }
}
else{}

function EmailresultCallback() {
    //request finished and response is ready
    if (xmlHttp.readyState === 4) {
        if (xmlHttp.status === 200) {

            var xmlResponse = xmlHttp.responseXML;           
            
            var emailResult = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;
            var code = xmlResponse.getElementsByTagName("code")[0].childNodes[0].nodeValue;

            var result = document.getElementById("error_email");
            result.innerHTML = emailResult;
            
         var email = document.getElementById("email");
        // var sub = document.getElementById("submit").disabled;
            
           if(code === '1'){
               result.style.color = "red";
               email.style.borderBottom = "3px solid red";
               $('#submit').attr('disabled', true);
                $('#password').attr('disabled', true);
               $('#dob').attr('disabled', true);
               $('#myName').attr('disabled', true);
               $('#lastname').attr('disabled', true);
               $('#role').attr('disabled', true);
               $('#phone').attr('disabled', true);

               
           }else{
                result.style.color = "#2eb82e";
               email.style.borderBottom = "2px solid #2eb82e";
                 $('#submit').attr('disabled', false);
                $('#password').attr('disabled', false);
               $('#dob').attr('disabled', false);
               $('#myName').attr('disabled', false);
               $('#lastname').attr('disabled', false);
               $('#role').attr('disabled', false);
               $('#phone').attr('disabled', false);
           }

        }
    }

}
