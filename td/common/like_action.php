<?php 
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	
	$DEALER_ID = $_POST["DEALER_ID"];

	$DEALER_REGION = $_POST["DEALER_REGION"];

	$DEALER_COUNTRY = $_POST["DEALER_COUNTRY"];

	$PART = $_POST["PART"];
	
	$BRAND = $_POST["BRAND"];

	$CAR_GB = $_POST["CAR_GB"];
	
	try 
	{
		$dbh->beginTransaction();

		$sql = "INSERT INTO TEST_DRIVE_LIKE 
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


	}catch (PDOException $pe) {
		$dbh->rollBack();
		$json["result"] = "fail";
	}
	
	echo json_encode($json);
?>