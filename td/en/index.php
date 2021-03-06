<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	include_once ($_SERVER[DOCUMENT_ROOT]."/lib/aes256.php");
	
	if($_GET["v"]){
		$CODES = base64_decode($_GET["v"]);

		$KEY_ENC = hex2bin("LmsPassword20179jekviae3iblx5lz");
		$KEY = hex2bin($KEY_ENC);
		$IV = hex2bin("asdf43kljgo32orjbr1jvi5ylbjzf9l3");
		$DECODE_USER_ID = decrypt($KEY, $IV, $CODES);

		$sql = "
				SELECT 
					A.LMS_NAME, 
					A.LMS_ID,
					B.CTCODE,
					B.ENG,
					A.LMS_IMAGE
				FROM 
					LMS_MEMBER A
				LEFT JOIN SPK_COUNTRY B ON B.ENG = A.LMS_CONTRY
				WHERE
					A.LMS_ID = :LMS_ID
				AND
					A.LMS_GB = 'hyundai'
				AND
					A.LMS_STATUS = 'Y'
		";

		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':LMS_ID',$DECODE_USER_ID);
		$stmt->execute();
		$row_cnt = $stmt->rowCount();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if($row_cnt > 0){
			$LF_TD_DEALER_NAME = $row[0]["LMS_NAME"];
			$LF_TD_DEALER_ID = $row[0]["LMS_ID"];
			$LF_TD_DEALER_REGION = $row[0]["CTCODE"];
			$LF_TD_DEALER_COUNTRY = $row[0]["ENG"];
			$LF_TD_DEALER_IMAGE = $row[0]["LMS_IMAGE"];
			if (!$_SESSION["SESSION_DEALER_URL"])
				$LF_TD_DEALER_URL = $_GET["v"];
			@session_register("LF_TD_DEALER_NAME")	or die("session_register err");
			@session_register("LF_TD_DEALER_ID")	or die("session_register err");
			@session_register("LF_TD_DEALER_REGION")	or die("session_register err");
			@session_register("LF_TD_DEALER_COUNTRY")	or die("session_register err");
			@session_register("LF_TD_DEALER_IMAGE")	or die("session_register err");
			@session_register("LF_TD_DEALER_URL")	or die("session_register err");
		}else{
			//$tools->alertJavaGo("Faild.","error.php");
			
			$sql = "
					SELECT 
						A.TD_DEALER_NAME, 
						A.TD_DEALER_ID,
						B.CTCODE,
						B.ENG,
						A.TD_DEALER_PHOTO
					FROM 
						TD_DEALER_MEMBER A
					LEFT JOIN SPK_COUNTRY B ON B.ENG = A.TD_DEALER_CONTRY
					WHERE
						A.TD_DEALER_ID = :LMS_ID
					AND
						A.TD_DEALER_GB = 'hyundai'
			";

			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':LMS_ID',$DECODE_USER_ID);
			$stmt->execute();
			$row_cnt = $stmt->rowCount();
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();

			$LF_TD_DEALER_NAME = $rows[0]["TD_DEALER_NAME"];
			$LF_TD_DEALER_ID = $rows[0]["TD_DEALER_ID"];
			$LF_TD_DEALER_REGION = $rows[0]["CTCODE"];
			$LF_TD_DEALER_COUNTRY = $rows[0]["ENG"];
			$LF_TD_DEALER_IMAGE = $rows[0]["TD_DEALER_PHOTO"];
			if (!$_SESSION["SESSION_DEALER_URL"])
				$LF_TD_DEALER_URL = $_GET["v"];
			@session_register("LF_TD_DEALER_NAME")	or die("session_register err");
			@session_register("LF_TD_DEALER_ID")	or die("session_register err");
			@session_register("LF_TD_DEALER_REGION")	or die("session_register err");
			@session_register("LF_TD_DEALER_COUNTRY")	or die("session_register err");
			@session_register("LF_TD_DEALER_IMAGE")	or die("session_register err");
			@session_register("LF_TD_DEALER_URL")	or die("session_register err");
		}
		
	}else{
		//$tools->alertJavaGo("Faild.","error.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<title>Sonata New Rise</title>
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../css/styles.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#intro0").on({
					"pagebeforeshow":function(){

					},
					"pageshow":function(){
						setTimeout(function(){
							$.mobile.changePage('#intro1');
						},1500);						
					}
				});
				$("#intro2 .btn_showroom").click(function(){
					location.href="showroom.php";
				});
				$("#intro2 .btn_testdrive").click(function(){
					location.href="testdriveIntro.php";
				});
			})
		</script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="../js/device.js"></script>
		<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
		<script src="../js/menu.js"></script>
		<script>
			  $(document).on("mobileinit", function () {
			 	 $.mobile.hashListeningEnabled = false;
			 	 $.mobile.pushStateEnabled = false;
			 	 $.mobile.changePage.defaults.changeHash = false;
			 });
			var url = "<?= $_SESSION['LF_TD_DEALER_URL'] ?>";
			var dealerUrl = "<?= $_SESSION['SESSION_DEALER_URL'] ?>";
		</script>
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="intro0" class="container cover">
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise </h1></div>
						<p>VIRTUAL EXPERIENCE</p>
					</div>
				</div>
			</section>

			<section data-role="page" id="intro1" class="container subcover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="wrap">
						<div class="titlewrap">
							<!-- <h1>How to Test Driving</h1> -->
						</div>
						<div class="imgwrap">
							<div class="imgbox showroomBox">
								<p>SHOW <span>ROOM</span></p>
							</div>
							<div class="imgbox driveBox">
								<p>TEST <span>DRIVE</span></p>
							</div>
							<div class="imgbox requestBox">
								<p>REQUEST <span>ACTUAL TEST </span><span>DRIVE</span></p>
							</div>
						</div>
						<div class="textwrap">	
							<p>Welcome to the virtual test drive for Sonata New Rise!</p>
							<p>Through the virtual experience, you will enjoy the attractive features of Sonata New Rise.</p>
							<p>After the experience is over, an actual driving session will also be available upon your request.</p>
						</div>
						<div class="button">
							<a class="btn_box btn_showroom" href="#intro2">OK</a>
						</div>
					</div>
					
				</div>
			</section>

			<section data-role="page" id="intro2" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/common/btn_menu.png" alt=""></a>
					<a href="#" class="ui-btn ui-btn-left" data-rel="back"><img src="../images/common/btn_backward.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="titlewrap">
						<div class="title"><h1>Sonata New Rise</h1></div>
						<p>VIRTUAL EXPERIENCE</p>
					</div>
					<div class="button">
						<a class="btn_box btn_showroom" href="javascript:;">SHOW ROOM</a>
						<a class="btn_box btn_testdrive" href="javascript:;">TEST DRIVE</a>
					</div>
				</div>
			</section>					
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
