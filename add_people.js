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
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var position = document.getElementById("position").value;
    var image = document.getElementById("image").value;
    
    

    if (email !== '' && id !== '' && name !== '' && position !== '' && image!== '') {

        //if the server is not busy and is ready to communicate
        if ((xmlHttp.readyState == 0) || (xmlHttp.readyState == 4)) {
            xmlHttp.open("POST", "add_people.php", true);
            xmlHttp.onreadystatechange = AddRowResponseCallback;
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.send("email=" + email + "&id=" + id + "&name=" + name + "&position=" + psoition + "&image=" + image);
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
            var id = xmlResponse.getElementById("id")[0].childNodes[0].nodeValue;
            var name = xmlResponse.getElementById("name")[0].childNodes[0].nodeValue;
            var position = xmlResponse.getElementById("position")[0].childNodes[0].nodeValue;
            var image = xmlResponse.getElementById("image")[0].childNodes[0].nodeValue;

            if (code == '1') {
                var row = table.insertRow(rowCount);
                row.innerHTML = "<td>" + id + "</td><td>" + name + "</td><td>" + email + "</td><td>" + position + "</td><td>" + image + "</td><td>";
                
            } else {
                alert("Adding is unsuccessfully!");
            }
        }
    }

}
