<?php
        $strSQL = "SELECT * FROM `user` WHERE ID = '".$_POST["sCusID"]."' ";
        $objQuery = mysqli_query($strSQL) or die (mysql_error());
    $intNumField = mysqli_num_fields($objQuery);
    $resultArray = array();
    while($obResult = mysqli_fetch_array($objQuery))
    {
        $arrCol = array();
        for($i=0;$i<$intNumField;$i++)
        {
            $arrCol[mysqli_field_name($objQuery,$i)] = $obResult[$i];
        }
        array_push($resultArray,$arrCol);
    }
    
    echo json_encode($resultArray);
    
?>