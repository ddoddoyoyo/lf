<?php 
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	include_once ($_SERVER[DOCUMENT_ROOT]."/lib/mail_class.php");

	$mail = new my_mime_mail();
	
	$TEST_DRIVE_NAME = $_POST["TEST_DRIVE_NAME"];

	$TEST_DRIVE_EMAIL = $_POST["TEST_DRIVE_EMAIL"];

	$TEST_DRIVE_NUMBER = $_POST["TEST_DRIVE_NUMBER"];

	$TEST_DRIVE_DATE = $_POST["TEST_DRIVE_DATE"];
	
	$TAB_GB = $_POST["TAB_GB"];

	$TEST_DRIVE_CAR_CODE = $_POST["TEST_DRIVE_CAR_CODE"];

	
	//QUESTION
	$QUESTION_NAME = $_POST["QUESTION_NAME"];

	$QUESTION_EMAIL = $_POST["QUESTION_EMAIL"];

	$QUESTION_MEMO = $_POST["QUESTION_MEMO"];

	
	
	$DEALER_ID = $_SESSION["LF_TD_DEALER_ID"];

	$DEALER_REGION = $_SESSION["LF_TD_DEALER_REGION"];

	$DEALER_COUNTRY = $_SESSION["LF_TD_DEALER_COUNTRY"];

	

	
	try 
	{
		$dbh->beginTransaction();
		
		if($TAB_GB == "TEST_DRIVE"){
			
			if($tools->chkMail($TEST_DRIVE_EMAIL) == false){
				$json["result"] = "TEST_DRIVE_EMAIL";
			}else{
				
				$sql = "INSERT INTO REQUEST_TEST_DRIVE 
						(
							REQ_DEALER_ID,
							REQ_DEALER_REGION,
							REQ_DEALER_COUNTRY,
							REQ_GB,
							REQ_CAR_CODE,
							REQ_DATE,
							REQ_NAME,
							REQ_EMAIL,
							REQ_NUMBER,
							REQ_REGDATE
						) 
						VALUES 
						(
							:REQ_DEALER_ID,
							:REQ_DEALER_REGION,
							:REQ_DEALER_COUNTRY,
							:REQ_GB,
							:REQ_CAR_CODE,
							:REQ_DATE,
							:REQ_NAME,
							:REQ_EMAIL,
							:REQ_NUMBER,
							NOW()
						)";
				$stmt = $dbh->prepare($sql);
				$stmt->bindParam(':REQ_DEALER_ID',$DEALER_ID);
				$stmt->bindParam(':REQ_DEALER_REGION',$DEALER_REGION);
				$stmt->bindParam(':REQ_DEALER_COUNTRY',$DEALER_COUNTRY);	
				$stmt->bindParam(':REQ_GB',$TAB_GB);
				$stmt->bindParam(':REQ_CAR_CODE',$TEST_DRIVE_CAR_CODE);
				$stmt->bindParam(':REQ_DATE',$TEST_DRIVE_DATE);
				$stmt->bindParam(':REQ_NAME',$TEST_DRIVE_NAME);
				$stmt->bindParam(':REQ_EMAIL',$TEST_DRIVE_EMAIL);
				$stmt->bindParam(':REQ_NUMBER',$TEST_DRIVE_NUMBER);

				if($stmt->execute()){
					$dbh->commit();
					
					
					//사용자 메일폼
					$mail->to = $TEST_DRIVE_EMAIL; //받는사람
					$mail->from = $DEALER_ID; //보내는 사람
					$mail->subject = "[구매자]테스트 메일 보내기"; //제목

					$mail->body = "테스트 메일";
					$mail->send();

					//딜러 메일폼
					$mail->to = $DEALER_ID; //받는사람
					$mail->from = $TEST_DRIVE_EMAIL; //보내는 사람
					$mail->subject = "[딜러]테스트 메일 보내기"; //제목

					$mail->body = "테스트 메일";
					$mail->send();



					$json["result"] = "success";
				}else{
					$dbh->rollBack();
					$json["result"] = "fail";
				}
				
			}

		}else{
			if($tools->chkMail($QUESTION_EMAIL) == false){
				$json["result"] = "QUESTION_EMAIL";
			}else{
				$sql = "INSERT INTO REQUEST_TEST_DRIVE 
						(
							REQ_DEALER_ID,
							REQ_DEALER_REGION,
							REQ_DEALER_COUNTRY,
							REQ_GB,
							REQ_CAR_CODE,
							REQ_NAME,
							REQ_EMAIL,
							REQ_MEMO,
							REQ_REGDATE
						) 
						VALUES 
						(
							:REQ_DEALER_ID,
							:REQ_DEALER_REGION,
							:REQ_DEALER_COUNTRY,
							:REQ_GB,
							:REQ_CAR_CODE,
							:REQ_NAME,
							:REQ_EMAIL,
							:REQ_MEMO,
							NOW()
						)";
				$stmt = $dbh->prepare($sql);
				/*$stmt->bindParam(':REQ_DEALER_ID',$_SESSION["LF_TD_DEALER_ID"]);
				$stmt->bindParam(':REQ_DEALER_REGION',$_SESSION["LF_TD_DEALER_REGION"]);
				$stmt->bindParam(':REQ_DEALER_COUNTRY',$_SESSION["LF_TD_DEALER_COUNTRY"]);*/
				$stmt->bindParam(':REQ_DEALER_ID',$DEALER_ID);
				$stmt->bindParam(':REQ_DEALER_REGION',$DEALER_REGION);
				$stmt->bindParam(':REQ_DEALER_COUNTRY',$DEALER_COUNTRY);	
				$stmt->bindParam(':REQ_GB',$TAB_GB);
				$stmt->bindParam(':REQ_CAR_CODE',$TEST_DRIVE_CAR_CODE);
				$stmt->bindParam(':REQ_NAME',$QUESTION_NAME);
				$stmt->bindParam(':REQ_EMAIL',$QUESTION_EMAIL);
				$stmt->bindParam(':REQ_MEMO',$QUESTION_MEMO);

				if($stmt->execute()){
					$dbh->commit();	
					$json["result"] = "success";
				}else{
					$dbh->rollBack();
					$json["result"] = "fail";
				}
			}
		}
		/*$sql = "INSERT INTO TEST_DRIVE_LIKE 
				(
					TD_DEALER_ID,
					TD_DEALER_REGION,
					TD_DEALER_COUNTRY,
					TD_PART,
					TD_BRAND,
					TD_CAR_GB,
					TD_REGDATE
				) 
				VALUES 
				(
					:TD_DEALER_ID,
					:TD_DEALER_REGION,
					:TD_DEALER_COUNTRY,
					:TD_PART,
					:TD_BRAND,
					:TD_CAR_GB,
					NOW()
				)";

		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':TD_DEALER_ID',$DEALER_ID);
		$stmt->bindParam(':TD_DEALER_REGION',$DEALER_REGION);
		$stmt->bindParam(':TD_DEALER_COUNTRY',$DEALER_COUNTRY);
		$stmt->bindParam(':TD_PART',$PART);
		$stmt->bindParam(':TD_BRAND',$BRAND);
		$stmt->bindParam(':TD_CAR_GB',$CAR_GB);

		if($stmt->execute()){
			$dbh->commit();		

			$sql = "SELECT COUNT(*) AS CNT FROM TEST_DRIVE_LIKE WHERE TD_BRAND = :TD_BRAND AND TD_CAR_GB = :TD_CAR_GB";
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':TD_BRAND',$BRAND);
			$stmt->bindParam(':TD_CAR_GB',$CAR_GB);
			$stmt->execute();
			$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();

			$json["CNT"] = $row[0]["CNT"];
		}else{
			$dbh->rollBack();
			$json["result"] = "fail";
		}
		*/
		

	}catch (PDOException $pe) {
		$dbh->rollBack();
		$json["result"] = "fail";
	}
	
	echo json_encode($json);
?>