<!DOCTYPE HTML>
<!--
//
// CONTROL.PHP
// Brett Ian Balogh
// April 30, 2016
// brettbalogh@gmail.com
//
-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="control.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <title>
        AwwYeahh
    </title>
</head>
<body>
    <?php include('access.php'); ?>
    <div class="centered">
        <div class="label">
            <label for="input">PHOTON CONTROL</label>
        </div>
        <p>
            <input id="input" type="text" value="data to send">
        </p>
        <button id="onOffButton" class="button" onclick="doIt()"><span>RUN</span></button>
    </div>
    <script type="text/javascript">
    var data = document.getElementById("input");
    var button = document.getElementById("onOffButton");
    var func = new Array("RUN", "STOP");
    var state = false;
    function doIt(){
        var requestURL = "proxy.php";
        $.post( requestURL, { function: func[+state], args: data });
        state = !state;
        button.innerHTML= func[+state];
    }
    </script>
</body>
</html>
