<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	
	require_once "Classes/PHPExcel.php";


		$tmpfname = "test.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(1);
		$lastRow = $worksheet->getHighestRow();
		
		$excel_array = $worksheet->toArray(null, true, true, true);
		echo "<table>";
		for ($i=1; $i < $lastRow; $i++) { 
			echo "<tr><td>";
			echo $excel_array[$i]["A"];
			echo "</td><td>";
			echo $excel_array[$i]["B"];
			echo "</td></tr>";
		}

		echo "<table>";

?>
</body>
</html>