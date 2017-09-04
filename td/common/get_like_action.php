<?php 
	include_once ($_SERVER[DOCUMENT_ROOT]."/common/commonFunction.php");
	
	$BRAND = $_POST["BRAND"];
	$CAR_GB = $_POST["CAR_GB"];
	
	try {
		$dbh->beginTransaction();

		$sql = " SELECT COUNT(*) AS CNT FROM TEST_DRIVE_LIKE WHERE TD_BRAND = :TD_BRAND AND TD_CAR_GB = :TD_CAR_GB ";
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':TD_BRAND',$BRAND);
		$stmt->bindParam(':TD_CAR_GB',$CAR_GB);

		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		$json["CNT"] = $row[0]["CNT"];


	}catch (PDOException $pe) {
		$dbh->rollBack();
		$json["result"] = "fail";
	}
	
	echo json_encode($json);
?>
