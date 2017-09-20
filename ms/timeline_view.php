<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");


	$sql = "
		SELECT 
			COUNT(*) AS CNT
			FROM LMS_CONTENTS A
			WHERE A.LMS_CON_GB = 'hyundai' AND A.LMS_CON_CAR_GUBUN = 'LF' AND A.LMS_TYPE = 'ms'
	";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$row_cnt = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->closeCursor();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/timeline.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/timeline.js"></script>
		<script src="js/device.js"></script>
		

	</head>
	<body>
	    <div id="wrap">
			<input type='hidden' class='Cnt' id='TOT_LIST_COUNT' value="<?=$row_cnt[0]['CNT'];?>" />
			<div id="view_contBox">
				<header>
					<h1>Sonate <span>New Rise</span></h1>
				</header>
				<div class="list">
					
					<?
					
						$sql = "SELECT 
								 A.LMS_CON_SEQ,
								 A.LMS_CON_TITLE_IMG,
								 A.LMS_CON_TEXT,
								 A.LMS_CON_LANGUAGE,
								 B.LMS_NAME,
								 B.LMS_CONTRY,
								 B.LMS_IMAGE
								FROM LMS_CONTENTS A
								LEFT JOIN LMS_MEMBER B ON B.LMS_SEQ = A.LMS_SEQ
								WHERE A.LMS_CON_GB = 'hyundai' AND A.LMS_CON_CAR_GUBUN = 'LF'
								AND A.LMS_TYPE = 'ms'
								ORDER BY A.LMS_CON_REGDATE DESC 
								LIMIT 0,5
							 ";

						$stmt = $dbh->prepare($sql);
						$stmt->execute();
						$ROW = $stmt->fetchAll(PDO::FETCH_ASSOC);
						$stmt->closeCursor();
						
						foreach($ROW as $ls) { 
							
					?>

					<article class="article">
						<div class="photo">
							<?php if($ls["LMS_CON_TITLE_IMG"]) { ?>
								<!-- <img src="<?=$IMG_URL?>/hyundai/lf/<?=$ls["LMS_CON_TITLE_IMG"]?>" alt=""> -->
								<div class="img" style="background-image : url('<?=$IMG_URL?>/hyundai/lf/<?=$ls["LMS_CON_TITLE_IMG"]?>');"></div>
							<?php } else { ?>
								<!-- <img src="" alt=""> -->
							<?php } ?>
						</div>
						<div class="profile_wrap">
							<div class="userPix_wrap">
								<?php if($ls["LMS_IMAGE"]) { ?>
									<div class="userPix">
										 <!-- <img src="<?=$IMG_URL?>/hyundai/member/<?=$ls["LMS_IMAGE"]?>" alt=""> -->
										<div class="img" style="background-image : url('<?=$IMG_URL?>/hyundai/member/<?=$ls["LMS_IMAGE"]?>');"></div>
									</div>
								<?php } else { ?>
									<div class="userPix">
										<!-- <img src="images/timeline/profile_basic_@3x.png" alt=""> -->
										<div class="img" style="background-image : url('images/timeline/profile_basic_@3x.png');"></div>
									</div>
								<?php } ?>
							</div>
							<div class="userProfile">
								<span class="name"><?=$ls["LMS_NAME"]?></span>
								<span class="region"><?=$ls["LMS_CONTRY"]?></span>
							</div>
						</div>
						<div class="txt_wrap">
							<div class="comment_wrap">
								<p><?=$ls["LMS_CON_TEXT"]?></p>
							</div>
						</div>
					</article>
					<?php } ?>

					<?php if(count($ROW) >= 5){ ?>
						<div class="moreView">
							<a href="javascript:void(0)" onclick="view_search();"><i class="icon"></i>VIEW MORE</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</body>
</html>