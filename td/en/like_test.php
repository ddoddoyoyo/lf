<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
?>
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="../js/common.js"></script><!-- 추가된 js(필수) -->
<?
	$DEALER_ID = $_SESSION["LF_TD_DEALER_ID"]; //딜러 아이디

	$DEALER_REGION = $_SESSION["LF_TD_DEALER_REGION"]; // 딜러 대륙

	$DEALER_COUNTRY = $_SESSION["LF_TD_DEALER_COUNTRY"]; //딜러 국가

	$PART = 1; //하트번호??-_-;;
	
	$BRAND = 'hyundai'; //브랜드명 (hyundai,genesis)

	$CAR_GB = 'LF'; //차량코드
?>
<button onclick="like_add('<?=$DEALER_ID?>','<?=$DEALER_REGION?>','<?=$DEALER_COUNTRY?>','<?=$PART?>','<?=$BRAND?>','<?=$CAR_GB?>');"> LIKE </button>