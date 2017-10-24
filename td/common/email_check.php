<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");

	$EMAIL = $_POST["EMAIL"];
	$RETURN_URL = $_POST["RETURN_URL"];
	$LMS_GB = $_POST["LMS_GB"];

	
	if($tools->chkMail($EMAIL) == false){
		$json["result"] = "EMAIL_FAIL";
	}else{
		//딜러 회원 검색
		$sql = "SELECT COUNT(*) AS CNT FROM TD_DEALER_MEMBER WHERE TD_DEALER_ID = :TD_DEALER_ID AND TD_DEALER_GB = :TD_DEALER_GB";
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':TD_DEALER_ID',$EMAIL);
		$stmt->bindParam(':TD_DEALER_GB',$LMS_GB);
		$stmt->execute();
		$row_cnt = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if($row_cnt[0]["CNT"] > 0){

			$sql = "SELECT TD_DEALER_ID,TD_DEALER_NAME,TD_DEALER_CONTRY,TD_DEALER_PHOTO FROM TD_DEALER_MEMBER WHERE TD_DEALER_ID = :LMS_ID AND TD_DEALER_GB = :LMS_GB";
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':LMS_ID',$EMAIL);
			$stmt->bindParam(':LMS_GB',$LMS_GB);
			$stmt->execute();
			$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$json["DEALER_ID"] = $row[0]["TD_DEALER_ID"];
			$json["DEALER_NAME"] = $row[0]["TD_DEALER_NAME"];
			$json["DEALER_CONTRY"] = $row[0]["TD_DEALER_CONTRY"];
			$json["DEALER_PHOTO"] = $row[0]["TD_DEALER_PHOTO"];

		}else{

			$sql = "SELECT LMS_ID,LMS_CONTRY,LMS_NAME,LMS_IMAGE FROM LMS_MEMBER WHERE LMS_ID = :LMS_ID AND LMS_GB = :LMS_GB";
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':LMS_ID',$EMAIL);
			$stmt->bindParam(':LMS_GB',$LMS_GB);
			$stmt->execute();
			$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if($row[0]["LMS_ID"] != ""){
				$json["DEALER_ID"] = $row[0]["LMS_ID"];
				$json["DEALER_NAME"] = $row[0]["LMS_NAME"];
				$json["DEALER_CONTRY"] = $row[0]["LMS_CONTRY"];
				$json["DEALER_PHOTO"] = $IMG_URL."/".$LMS_GB."/member/".$row[0]["LMS_IMAGE"];
			}else{
				$json["DEALER_ID"] = "";
				$json["DEALER_NAME"] = "";
				$json["DEALER_CONTRY"] = "";
				$json["DEALER_PHOTO"] = "";
			};
		}
	}
	
	
	echo json_encode($json);
	exit;
?>


