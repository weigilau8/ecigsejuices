<script language="javascript">
var now = new Date();
var h = now.getHours();
var m = now.getMinutes();
var s = now.getSeconds();
var y = now.getFullYear();
var day_of_month = now.getDate();
var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
var day = days[ now.getDay() ];
var month = months[ now.getMonth() ];

if (typeof jQuery=='undefined') {
        var head=document.getElementsByTagName('head')[0];
        var script=document.createElement('script');
        script.type='text/javascript';
        head.appendChild(script);
}
	
    var PreventExitSplash = false;
    var ESRecordId = '1';
    var exitpagerb = 1;
    var exitperiodrb = 0;
    var periodEnable = 5;
    var peroidDisable = 0;
    var displayFrequency = '86400';
	
	var url = document.URL;
	var id_check = /[?&]tempOrderId=([^&]+)/i;
	var id_check1 = /[?&]AFID=([^&]+)/i;
	var match = id_check.exec(url);
	var match1 = id_check1.exec(url);
	if (match != null && match1 != null) {
		
		var exitsplashpage = 'dcheckout.php?tempOrderId='+match[1]+'&AFID='+match1[1];
	} else {
	
		var exitsplashpage = 'dcheckout.php?tempOrderId='+match[1];
	}
    /* var exitsplashpage = 'dropsell_checkout.php?tempOrderId='+tempOrderId+'; */
    var exitsplashmessage = '***************************************\n\n\n\nWait! Don\'t Leave, we are so sure you will love this package that we will offer you a 20% to checkout right now\n\n\n***************************************\n\n';
     var alertmessage = "";/*'***************************************\n\n > > > W A I T!  DON\'T LEAVE! We are so sure you will love this package that we will offer you a 30% DISCOUNT to checkout right now!< < <\n\n CLICK THE ***Stay on this page*** BUTTON\n OR CLICK THE ***Cancel*** BUTTON\n on the NEXT Window and don\'t miss out on these great offers!\n\n***************************************\n\n\n'; */
    var UseAlert = 0;
    var UseHelper = 1;
	
</script>
<script language="javascript" src="js/exit.js"></script>
<?php
 	$affid = null;
	if($_GET['AFID'] == ""){
		$affid ="888-857-6277";
	}elseif($_GET['AFID'] == "alphasub103"){
		$affid ="877-772-7700";
	}elseif($_GET['AFID'] == "alphasub104"){
		$affid ="888-864-7266";
	}elseif($_GET['AFID'] == "alphasub105"){
		$affid ="888-857-6277";
	}elseif($_GET['AFID'] =="alphasub106"){
		$affid ="888-803-8013";
	}elseif($_GET['AFID'] == "alphasub107"){
		$affid ="888-751-1231";
	}elseif($_GET['AFID'] == "alphasub108"){
		$affid ="888-700-9986";
	}elseif($_GET['AFID'] == "alphasub109"){
		$affid ="888-642-8224";
	}elseif($_GET['AFID'] == "alphasub110"){
		$affid ="888-600-1040";
	}elseif($_GET['AFID'] == "alphasub111"){
		$affid ="888-514-3800";
	}elseif($_GET['AFID'] == "alphasub112"){
		$affid ="888-500-8150";
	}elseif($_GET['AFID'] == "alphasub113"){
		$affid ="888-444-6470";
	}elseif($_GET['AFID'] == "alphasub114"){
		$affid ="888-410-5681";
	}elseif($_GET['AFID'] == "alphasub115"){
		$affid ="888-400-6940";
	}elseif($_GET['AFID'] == "alphasub116"){
		$affid ="877-772-7713";
	}elseif($_GET['AFID'] == "alphasub117"){
		$affid ="888-330-2599";
	}elseif($_GET['AFID'] == "alphasub118"){
		$affid ="888-321-1440";
	}elseif($_GET['AFID'] == "alphasub119"){
		$affid ="888-320-0424";
	}elseif($_GET['AFID'] == "alphasub120"){
		$affid ="888-300-2526";
	}elseif($_GET['AFID'] == "alphasub121"){
		$affid ="888-212-4428";
	}elseif($_GET['AFID'] == "alphasub122"){
		$affid ="888-209-5191";
	}elseif($_GET['AFID'] == "alphasub123"){
		$affid ="888-201-3927";
	}elseif($_GET['AFID'] == "alphasub124"){
		$affid ="888-266-8485";
	}elseif($_GET['AFID'] == "alphasub125"){
		$affid ="888-331-0331";
	}elseif($_GET['AFID'] == "alphasub126"){
		$affid ="888-333-4993";
	}elseif($_GET['AFID'] == "alphasub127"){
		$affid ="877-273-5533";
	}elseif($_GET['AFID'] == "alphasub128"){
		$affid ="877-500-6655";
	}elseif($_GET['AFID'] == "alphasub129"){
		$affid ="888-999-5851";
	}
?>
<div id="ExitDiv" style="display:none;position:absolute;left:10px;;top:10px;margin:auto;z-index:1000;">
    <center>
        <img id="ExitImage" src="js/exit.jpg" border="0" /></br>
		<div style="margin-top:-180px;margin-left:-280px">
			<span style="font-weight:600; font-size:45px;color:#ff0000;"> <?php echo $affid;?></span>
		</div>
    </center>
</div>
<div id="ExitBackDiv" style="display:none;position:absolute;left:0px;top:0px;overflow:auto;height:100%;width:100%;background:#000000;opacity:0.6;filter:alpha(opacity=60);z-index:999;">    
</div>