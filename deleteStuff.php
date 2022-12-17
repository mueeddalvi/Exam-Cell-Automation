<?php

$servername = "www.remotemysql.com:3306";
$username = "0xCWbnBOpR";
$password = "jOW2ygCCXS";
$db = "0xCWbnBOpR";

$connection = new mysqli($servername, $username, $password,$db);
$query3="DELETE FROM subject_data WHERE `subject_code` = '".$_POST['SUBC']."' ;";
$res3=$connection->query($query3);
$query2="SELECT * FROM subject_data WHERE `branch` = '".$_POST['BRANCH']."' and `year` = '".$_POST['YEA']."' and `semester` = '".$_POST['SEM']."' ;";

$res2=$connection->query($query2);
$names=array();
if($res2)
{
    while($t=$res2->fetch_object())
    {
        $names[]=$t;
    }
    echo json_encode($names);
}
$connection->close();
?>