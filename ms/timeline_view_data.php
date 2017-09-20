<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");

	$list = $_POST['list'];

	$Total_Cnt = $_POST['Total_Cnt'];

	$sql = "	SELECT 
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
				LIMIT ".$list.",5";

	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$ROW = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt->closeCursor();

	$PageCount = count($ROW) + (int)$list;

	$dataList=" ";

	for($a = 0; $a < count($ROW); $a++){

		
		$dataList = $dataList."<article class='article'> <div class='photo'>";

		if($ROW[$a]['LMS_CON_TITLE_IMG']){
			//$dataList = $dataList." <img src='".$IMG_URL."/hyundai/lf/".$ROW[$a]['LMS_CON_TITLE_IMG']."' alt=''>" ;
			$dataList = $dataList."<div class='img' style='background-image : url(".$IMG_URL."/hyundai/lf/".$ROW[$a]['LMS_CON_TITLE_IMG'].");'></div>";
		} else {
			//$dataList = $dataList." <img src='' alt=''>";
		}
		$dataList = $dataList." </div>";
		$dataList = $dataList." <div class='profile_wrap'>";
		$dataList = $dataList."	     <div class='userPix_wrap'>";
		if($ROW[$a]['LMS_IMAGE']){
			//$dataList = $dataList."  <div class='userPix'><img src='".$IMG_URL."/hyundai/member/".$ROW[$a]['LMS_IMAGE']."' alt=''></div>" ;
			$dataList = $dataList."<div class='userPix'><div class='img' style='background-image : url(".$IMG_URL."/hyundai/member/".$ROW[$a]['LMS_IMAGE'].");'></div></div>";
		} else {
			//$dataList = $dataList."  <div class='userPix'><img src='/pd/images/profile_basic_@3x.png' alt=''></div>" ;
			$dataList = $dataList."<div class='userPix'><div class='img' style='background-image : url(images/timeline/profile_basic_@3x.png);'></div></div>";
		}
		$dataList = $dataList."</div>";
		$dataList = $dataList."    <div class='userProfile'>";
		$dataList = $dataList."		   <span class='name'>".$ROW[$a]['LMS_NAME']."</span>";
		$dataList = $dataList."		   <span class='region'>".$ROW[$a]['LMS_CONTRY']."</span>";
		$dataList = $dataList."	   </div>";
		$dataList = $dataList."	</div></div>";
		$dataList = $dataList."	<div class='txt_wrap'>";
		$dataList = $dataList."    <div class='comment_wrap'><p>".$ROW[$a]['LMS_CON_TEXT']."</p></div>";
		$dataList = $dataList."</div></article>";
	}
	
	if($Total_Cnt > $PageCount){
		$dataList = $dataList."<div class='moreView'><a href='javascript:void(0)' onclick='view_search()'><i class='icon'></i>View More</a></div>";
	}

	$json["data"] = $dataList;
	
	echo json_encode($json);

?>
