<?php 
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	include_once ($_SERVER[DOCUMENT_ROOT]."/lib/aes256.php");

	//아이디
	$LMS_ID = $_POST["LMS_ID"];

	//패스워드
	$LMS_PASSWORD = $_POST["LMS_PASSWORD"];

	$KEY_ENC = hex2bin("LmsPassword20179jekviae3iblx5lz");
	$KEY = hex2bin($KEY_ENC);
	$IV = hex2bin("asdf43kljgo32orjbr1jvi5ylbjzf9l3");
	$LMS_PASSWORD = encrypt($KEY, $IV, $LMS_PASSWORD);

	$BRAND_GUBUN = $_POST["LMS_GB"];

	$RETURN = $_POST["RETURN"];

	
	if($BRAND_GUBUN == ""){
		$tools->errMsg("Invalid approach.");
	}

	

	//아이디 및 패스워드정보가 없을시 History.back
	if($LMS_ID == "" || $LMS_PASSWORD == ""){
		$tools->errMsg("Invalid approach.");
	}
	
	try
	{
		$sql = "SELECT LMS_SEQ,LMS_ID,LMS_PASSWORD,LMS_NAME,LMS_CONTRY,LMS_LEVEL 
				FROM LMS_MEMBER 
				WHERE LMS_ID = :LMS_ID 
				AND LMS_PASSWORD = :LMS_PASSWORD 
				AND LMS_GB  = :LMS_GB 
				AND LMS_STATUS = 'Y'";
		
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':LMS_ID',$LMS_ID);
		$stmt->bindParam(':LMS_PASSWORD',$LMS_PASSWORD);
		$stmt->bindParam(':LMS_GB',$BRAND_GUBUN);
		$stmt->execute();
		//$row_cnt = $stmt->rowCount();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
	
		if(count($row) > 0){
			$SESSION_LMS_SEQ = $row[0]["LMS_SEQ"];
			$SESSION_LMS_ID = $row[0]["LMS_ID"];
			$SESSION_LMS_NAME = $row[0]["LMS_NAME"];
			$SESSION_LMS_CONTRY = $row[0]["LMS_CONTRY"];

			$KEY_CODE = encrypt($KEY, $IV, $SESSION_LMS_ID);
			
			@session_register("SESSION_LMS_SEQ")	or die("session_register err");
			@session_register("SESSION_LMS_ID")	or die("session_register err");
			@session_register("SESSION_LMS_NAME")	or die("session_register err");
			@session_register("SESSION_LMS_CONTRY")	or die("session_register err");
			
			$tools->alertJavaGo("Logged in successfully.",$RETURN."?v=".base64_encode($KEY_CODE));
			
		}else{
			$tools->errMsg("ID and password are incorrect.");
		}
	}
	catch (PDOException $pe)
	{
		$tools->errMsg("An error occurred.");
		exit;
	}
	

?>