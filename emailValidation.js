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

    //if the server is not busy and is ready to communicate
    if ((xmlHttp.readyState == 0) || (xmlHttp.readyState == 4)) {
        xmlHttp.open("POST","loginValidation.php", true);
        xmlHttp.onreadystatechange =EmailresultCallback;
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("email="+email);
    }
}

function EmailresultCallback() {
    //request finished and response is ready
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {

            var xmlResponse = xmlHttp.responseXML;           
            
            var emailResult = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;
            var code = xmlResponse.getElementsByTagName("code")[0].childNodes[0].nodeValue;

            var result = document.getElementById("error_email");
            result.innerHTML = emailResult;
            result.style.color = "#0099CC";
            
         var email = document.getElementById("email");
            
           if(code == '1'){
               email.style.borderBottom = "2px solid red";
           }

        }
    }

}
