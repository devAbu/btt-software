<!DOCTYPE html>
<html>

<body>

    <p id="test"></p>

    <script>
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                object = JSON.stringify(this.responseText);
                console.log(object);
                //console.log(object['data'][0]['title']); ERROR

                object2 = JSON.parse(object)
                console.log(object2);
                //console.log(object2['data'][0]['title']); ERROR
                console.log(object2.title); //here  UNDEFINED
                var obj, dbParam, xmlhttp, myObj, x, txt = "";

                txt += "<table border='1'>"
                for (x in object2) {
                    txt += "<tr><td>" + object2[x].title + "</td></tr>";
                }
                txt += "</table>"
                document.getElementById("test").innerHTML = txt;



                objectParsed = JSON.parse(
                    '{"ID":"1","type":"zima","title":"skijanje","description":"Lorem ipsum dolor sit amet,sed diam voluptua.","people":"From 2 to 8","available":"From November to February","price":"From 350 to 500","numTaken":"0"}'
                );

                console.log(objectParsed);
                console.log(objectParsed.title); // here I got the right ouput which is SKIJANJE

                //document.getElementById("test").innerHTML = object.title;
            }
        };
        xmlhttp.open("GET", "readTourData", true);
        xmlhttp.send();
    </script>

</body>

</html>