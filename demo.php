<html>
    <head>
        <script>
            
            function mydataload(){

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("mydiv").innerHTML = this.responseText;
                    }
            };
            xhttp.open("GET","bhargav.txt",true);
            xhttp.send();
        }
            </script>
    </head>
    <body>
        <button onclick="mydataload()">Click Me To Load Data</button>
        <div id="mydiv"></div>
    </body>
</html>