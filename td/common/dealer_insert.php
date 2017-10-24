<?php
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	include_once ($_SERVER[DOCUMENT_ROOT]."/lib/aes256.php");

	$TD_DEALER_ID = $_POST["USER_EMAIL"];

	$TD_DEALER_NAME = $_POST["TD_DEALER_NAME"];

	$TD_DEALER_CONTRY = $_POST["TD_DEALER_CONTRY"];

	$RETURN = $_POST["RETURN"];

	$LMS_GB = $_POST["LMS_GB"];

	$CAR_GB = $_POST["CAR_GB"];

	$HIDDEN_PHOTO = $_POST["HIDDEN_PHOTO"];

	$KEY_ENC = hex2bin("LmsPassword20179jekviae3iblx5lz");
	$KEY = hex2bin($KEY_ENC);
	$IV = hex2bin("asdf43kljgo32orjbr1jvi5ylbjzf9l3");
	

	try
	{
		$dbh->beginTransaction();

		if( $_FILES["TD_DEALER_PHOTO"][size] > 0 ) {
			// 업로드 파일 제한 확장자 추가 가능
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	
			if( $EXT_TMP = explode( ".", $_FILES["TD_DEALER_PHOTO"][name])) {	 
				foreach ($EXT_CHECK as $value) { 
					if( strstr( $value, strtolower($EXT_TMP[1]))) { 
						//$tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); 
					} 
				}	
			}
			$TD_DEALER_PHOTO_FIEL	= "Hyundai_".date("YmdHis").time().".".$EXT_TMP[1];	//변환파일명

			$TD_DEALER_PHOTO = $IMG_URL."/".$LMS_GB."/member/TD/Hyundai_".date("YmdHis").time().".".$EXT_TMP[1];	//변환파일명

			if( !@move_uploaded_file($_FILES["TD_DEALER_PHOTO"][tmp_name], $IMG_DIR.$LMS_GB."/member/TD/".$TD_DEALER_PHOTO_FIEL) ) { 
				//$tools->errMsg("파일 업로드 에러"); 
			}else { 
				@unlink($_FILES["TD_DEALER_PHOTO"][tmp_name]);
				chmod($IMG_DIR.$LMS_GB."/member/TD/".$TD_DEALER_PHOTO_FIEL,0755);
			}	
		}else{
			$TD_DEALER_PHOTO = $HIDDEN_PHOTO;
		}

		$sql = "SELECT COUNT(*) AS CNT FROM TD_DEALER_MEMBER WHERE TD_DEALER_ID = :TD_DEALER_ID AND TD_DEALER_GB = :TD_DEALER_GB";
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':TD_DEALER_ID',$TD_DEALER_ID);
		$stmt->bindParam(':TD_DEALER_GB',$LMS_GB);
		$stmt->execute();
		$row_cnt = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if($row_cnt[0]["CNT"] > 0){
			$sql = "UPDATE TD_DEALER_MEMBER SET
						TD_DEALER_NAME = :TD_DEALER_NAME,
						TD_DEALER_CONTRY = :TD_DEALER_CONTRY,
						TD_DEALER_PHOTO = :TD_DEALER_PHOTO,
						TD_DEALER_MODIFY = NOW()
					WHERE 
						TD_DEALER_ID = :TD_DEALER_ID
					AND
						TD_DEALER_GB = :TD_DEALER_GB";
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':TD_DEALER_NAME',$TD_DEALER_NAME);
			$stmt->bindParam(':TD_DEALER_CONTRY',$TD_DEALER_CONTRY);
			$stmt->bindParam(':TD_DEALER_PHOTO',$TD_DEALER_PHOTO);
			$stmt->bindParam(':TD_DEALER_ID',$TD_DEALER_ID);
			$stmt->bindParam(':TD_DEALER_GB',$LMS_GB);
		}else{

			$sql = "INSERT INTO TD_DEALER_MEMBER
					(
						TD_DEALER_ID,
						TD_DEALER_NAME, 
						TD_DEALER_CONTRY, 
						TD_DEALER_PHOTO, 
						TD_DEALER_GB,
						TD_DEALER_CAR_GB,
						TD_DEALER_REGDATE
					) 
					VALUES 
					(
						:TD_DEALER_ID, 
						:TD_DEALER_NAME, 
						:TD_DEALER_CONTRY, 
						:TD_DEALER_PHOTO, 
						:TD_DEALER_GB,
						:TD_DEALER_CAR_GB,
						NOW()
					)";

			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':TD_DEALER_ID',$TD_DEALER_ID);
			$stmt->bindParam(':TD_DEALER_NAME',$TD_DEALER_NAME);
			$stmt->bindParam(':TD_DEALER_CONTRY',$TD_DEALER_CONTRY);
			$stmt->bindParam(':TD_DEALER_PHOTO',$TD_DEALER_PHOTO);
			$stmt->bindParam(':TD_DEALER_GB',$LMS_GB);
			$stmt->bindParam(':TD_DEALER_CAR_GB',$CAR_GB);
		}

		if($stmt->execute()){
			$dbh->commit();

			$SESSION_LMS_ID = $TD_DEALER_ID;
			$SESSION_LMS_NAME = $TD_DEALER_NAME;
			$SESSION_LMS_CONTRY = $TD_DEALER_CONTRY;
			$SESSION_LMS_PHOTO = $TD_DEALER_PHOTO;

			$KEY_CODE = encrypt($KEY, $IV, $SESSION_LMS_ID);

			@session_register("SESSION_LMS_ID")	or die("session_register err");
			@session_register("SESSION_LMS_NAME")	or die("session_register err");
			@session_register("SESSION_LMS_CONTRY")	or die("session_register err");
			@session_register("SESSION_LMS_PHOTO")	or die("session_register err");
			
			$tools->metaGo($RETURN."?v=".base64_encode($KEY_CODE));
			
		}else{
			$dbh->rollBack();
		}

		



	}
	catch (PDOException $pe)
	{
		$tools->errMsg("An error occurred.");
		exit;
	}
	

?>