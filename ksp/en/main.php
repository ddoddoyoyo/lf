<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
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
		<script src="../js/main.js"></script>
		<script src="../js/menu.js"></script>
		<script>
			$(document).ready(function(){
				$('#upload').change(function(){
					readURL(this);
				});
				function readURL(input){
					if(input.files && input.files[0]) {
						var reader = new FileReader();
						reader.onload = function(e){//파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
							$('#current-img').attr('src',e.target.result);

							var img = new Image;
							var imgW, imgH;
							img.src = reader.result;
							img.onload = function(){
								imgW = img.width;
								imgH = img.height;
								if(imgH >= imgW){
									$("#current-img").css({"width":"100%","height":"auto"});
								}
								else{
									$("#current-img").css({"width":"auto", "height":"100%"});
								}
							}//img.onload
						}//reader.onload
					}//if
					reader.readAsDataURL(input.files[0]);
				}
			});
		</script>

	</head>
	<body>
		<div id="wrap">
			<div id="contBox">
			<!-- <section data-role="page" id="" class="container">
				<div data-role="main" class="ui-content">
					<div class="title">
						<div class="text">Dramatic changes</div>
						<h1><span>Sonata</span> <span>New</span> <span>Rise</span></h1>
					</div>
				</div>
				<a href="#pageMap" id="btn_start">START</a>
			</section> -->

			<section data-role="page" id="cover" class="container cover">
				<div data-role="header" class="header">
					<a href="#" class="ui-btn btn_sidePanel ui-btn-right"><img src="../images/button/btn_menu.png" alt=""></a>
					<h1>Sonata New Rise</h1>
				</div>
				<div data-role="main" class="ui-content">
					<div class="text_box">
						<p>Sonata New Rise has made a lot of difference compared to existing LF. <br>Shall we get together?</p>
						<a href="#" class="btn_start">START</a>
					</div>
				</div>	
			</section>

			
			</div>
		<!-- <a href="#page11">이동!!!!!!!!!</a> -->
		</div>
	</body>
</html>
