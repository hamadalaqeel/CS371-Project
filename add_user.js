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
function addRowRequest() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var role = document.getElementById("role").value;
    var birthdate = document.getElementById("birthdate").value;
    var address = document.getElementById("address").value;
    var mobile = document.getElementById("mobile").value;
    var city = document.getElementById("city").value;
    var country = document.getElementById("country").value;
    var personalhomepage = document.getElementById("personalhomepage").value;
    
    

    if (email !== '' && password !== '' && firstname !== '' && lastname !== '' && role!== '' && birthdate!== '' 
            && address!== '' && mobile!== '' && city !== '' && country!== '' && personalhomepage!== '') {

        //if the server is not busy and is ready to communicate
        if ((xmlHttp.readyState == 0) || (xmlHttp.readyState == 4)) {
            xmlHttp.open("POST", "add_user.php", true);
            xmlHttp.onreadystatechange = AddRowResponseCallback;
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.send("email=" + email + "&password=" + password + "&firstname=" + firstname + "&lastname=" + lastname + "&role=" + role + "&birthdate=" + birthdate + "&address=" + address + "&mobile=" + mobile + "&city=" + city + "&country=" + country + "&personalhomepage=" + personalhomepage);
                window.history.go(0);

        }
    } else {
            var err = document.getElementById("adding_error");
       err.innerHTML = "* You have to enter all fileds!";   
       err.style.color ="red";
    }   

}


function AddRowResponseCallback() {
    //request finished and response is ready
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {

            var xmlResponse = xmlHttp.responseXML;

            var table = document.getElementById("myTable");
            var rowCount = table.rows.length;
            var row = table.deleteRow(rowCount);
            rowCount--;

            var code = xmlResponse.getElementsByTagName("code")[0].childNodes[0].nodeValue;

            var email = xmlResponse.getElementsByTagName("email")[0].childNodes[0].nodeValue;
            var password = xmlResponse.getElementById("password")[0].childNodes[0].nodeValue;
            var firstname = xmlResponse.getElementById("firstname")[0].childNodes[0].nodeValue;
            var lastname = xmlResponse.getElementById("lastname")[0].childNodes[0].nodeValue;
            var role = xmlResponse.getElementById("role")[0].childNodes[0].nodeValue;
            var birthdate = xmlResponse.getElementById("birthdate")[0].childNodes[0].nodeValue;
            var address = xmlResponse.getElementById("address")[0].childNodes[0].nodeValue;
            var mobile = xmlResponse.getElementById("mobile")[0].childNodes[0].nodeValue;
            var city = xmlResponse.getElementById("city")[0].childNodes[0].nodeValue;
            var country = xmlResponse.getElementById("country")[0].childNodes[0].nodeValue;
            var personalhomepage = xmlResponse.getElementById("personalhomepage")[0].childNodes[0].nodeValue;

            if (code == '1') {
                var row = table.insertRow(rowCount);
                row.innerHTML = "<td>" + email + "</td><td>" + password + "</td><td>" + firstname + "</td><td>" + lastname + "</td><td>" + birthdate + "</td><td>" + address + "</td><td>" + mobile + "</td><td>" + city + "</td><td>" + country + "</td><td>" + personalhomepage + "</td>";
                
            } else {
                alert("Adding is unsuccessfully!");
            }
        }
    }

}
