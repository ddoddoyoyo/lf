<?
include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");

$hostname=$_SERVER["HTTP_HOST"]; //도메인명(호스트)명을 구합니다.
$query_string=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.

$SESSION_DEALER_URL = "http://".$hostname."/lf/td/en/index.php?".$query_string;

@session_register("SESSION_DEALER_URL")	or die("session_register err");

//echo $_SESSION["SESSION_LMS_PHOTO"];


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="../css/font.css">
		<link rel="stylesheet" href="../css/styles.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		 <script>
			//  $(document).on("mobileinit", function () {
			// 	 $.mobile.hashListeningEnabled = false;
			// 	 $.mobile.pushStateEnabled = false;
			// 	 $.mobile.changePage.defaults.changeHash = false;
			// });
		</script>
		<script src="../js/device.js"></script>
		<script src="../js/common.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
		<script>
		    $(document).ready(function(){
				var clipboard = new Clipboard('.btn_copy');

		  //   	$('#userCheck03 .profileImg img').each(function(){
		  //   		console.log($(this).width() + "   h: "+ $(this).height())
				// 	if($(this).width() > $(this).height()){
				// 		$(this).css({"width":"auto", "height":"100%"});
				// 	}
				// });

				if(ios){
					$('#userCheck03 .btn_copy').hide();
					$('#userCheck03 .urlwrap .ui-input-text').css({"width":"95%"});
				}

				$('#userCheck03 .btn_next').click(function(){
					location.href="index.php?<?=$query_string?>";
				})


		    });
		</script>
		
	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<section data-role="page" id="userCheck03" class="container userCheck">
				<div data-role="header" class="header"></div>
				<div data-role="main" class="ui-content">
					<div class="emailwrap">
						<div class="inputwrap">
							<input type="text" value="<?=$_SESSION["SESSION_LMS_ID"]?>" readonly>
						</div>						
					</div>
					<div class="formwrap">
						<div class="profileImg">
							<?
								if($_SESSION["SESSION_LMS_PHOTO"] != ""){
							?>
								<div id="current-img" style="background-image : url('<?=$_SESSION["SESSION_LMS_PHOTO"]?>');"></div>
							<?
								}else{
							?>
								<div id="current-img" style="background-image : url('../images/common/profile_btn_picture.png');"></div>
							<?
								}
							?>
						</div>
						<div class="userInfo">
							<label for="uName">name</label><input type="text" id="uName" name="" placeholder="NAME" value="<?=$_SESSION["SESSION_LMS_NAME"]?>" readonly>
							<label for="uCountry">country</label><input type="text" id="uCountry" name="" placeholder="COUNTRY" value="<?=$_SESSION["SESSION_LMS_CONTRY"]?>" readonly>
						</div>
					</div>
					<div class="textwrap">
						<p>Please copy your own URL below to share this content with your customers.</p>
					</div>
					<div class="urlwrap">
						<div class="inputwrap">
							<input type="text" id="copy_url" value="http://<?=$hostname?>/lf/td/en/index.php?<?=$query_string?>" readonly>
							<a href="#" class="btn_copy" data-clipboard-target="#copy_url"></a>
						</div>
					</div>		
					<a href="javascript:;" class="btn_next">NEXT</a>					
				</div>		
			</section>			
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
