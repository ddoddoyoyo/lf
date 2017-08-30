<?

$hostname=$_SERVER["HTTP_HOST"]; //도메인명(호스트)명을 구합니다.
//$uri= $_SERVER['REQUEST_URI']; //uri를 구합니다.
$query_string=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
//$phpself=$_SERVER["PHP_SELF"]; //현재 실행되고 있는 페이지의 url을 구합니다. 
//$basename=basename($_SERVER["PHP_SELF"]); //현재 실행되고 있는 페이지명만 구합니다.



?>

<!DOCTYPE html>
 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<title>Hyundai H-LINE</title>
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script>
		//  $(document).on("mobileinit", function () {
		// 	 $.mobile.hashListeningEnabled = false;
		// 	 $.mobile.pushStateEnabled = false;
		// 	 $.mobile.changePage.defaults.changeHash = false;
		// });
	</script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="../js/device.js"></script>
	<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
	<script>
	window.onload = function(){
	    $(document).ready(function(){
	        var clipboard = new Clipboard('.clipboard');

	        $('#addr_copy .btn_nextPage').click(function(){
	        	location.href="index.php";
	        })
	    });
	};	 
	</script>
</head>
<body>
	<div id="wrap">
		<div id="contBox">
			<section data-role="page" id="addr_copy" class="container dealerPage">
				<div data-role="main" class="ui-content">
					<form id="Form" name="Form" method="post" action="../common/login_action.php">
						<p>Please copy the address and forward it to the customer.</p>
						<div class="inputwrap"><input type = "text" id = "copy" value="http://<?=$hostname?>/lf/td/en/index.php?<?=$query_string?>"></div>
					</form>
					<div>
						<a href="javascript:;" class="btn_nextPage"><img src="../images/common/btn_next_black.png" alt=""></a>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>



 
<!-- <input type = "text" id = "copy" value="http://<?=$hostname?>/lf/td/en/index.php?<?=$query_string?>">
<button class="clipboard" data-clipboard-target="#copy"> COPY </button>
<br>
<a href="/lf/td/en/index.php?<?=$query_string?>">NEXT</a> -->
