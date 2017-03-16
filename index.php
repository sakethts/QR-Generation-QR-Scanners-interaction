<html
<head>
    <title>Welcome to QR Module</title>

</head>
<body>

    <h1>
        This is QR Module...!
    </h1>

    <h3>Enter QR Text: </h3>
    <form id="generatingQR" method="post" action="index.php">
        <input type="text" id="qrText" name="qrText" style="height:40px; font-size : 15px; width:300px">
        <input type="submit" value="Generate QR Code" style="height:40px;font-size : 15px; width:200px" onclick="generateQR()"/>
    </form>

    <?php
    if(empty($_POST['qrText']))
        $QRtext="json_data.json";
    else
        $QRtext = $_POST['qrText'];

    ?>
    <h3>By Default, this QR has json_data.json link embedded.</h3>
    <div id="printableArea">
        <?php
        echo "<img src='getQR.php?id=$QRtext' alt='qr code'>";
        ?>

        </br>

    </div>

    <button style="height:50px;font-size : 15px;width:100px" onclick="printDiv('printableArea')">Print the QR</button>
    </br> </br>
    <h2><ul></ul></h2>

    <button style="height:50px;font-size : 15px; width:100px" id="getValue" type="button">Get Value</button>

    <br><br>



</body>

<script src="script/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="script/api_call.js" type="text/javascript"></script>
<script src="script/detectScanner.js" type="text/javascript"></script>
<script src="script/jquery.scannerdetection.js" type="text/javascript"></script>
<script src="script/jquery.scannerdetection.compatibility.js" type="text/javascript"></script>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }


</script>



</html>