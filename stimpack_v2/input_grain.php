<?
$dbConnection = mysqli_connect('localhost', 'winterma_mark1', 'dinger', 'winterma_homebrew');

$brewid =  $_POST["brewid"];

$query = "INSERT INTO `winterma_homebrew`.`GRAIN` (`Grain`, `Amount`, `Brew ID`) VALUES ";

$count = count($_POST['grain']);

for ($i=0; $i<$count; $i++) {

    $query .= "('".$_POST['grain'][$i]['name']."', '".$_POST['grain'][$i]['amount']."', '$brewid')";

    /* If not last iteration, add a comma and a space */
    if ($i < ($count - 1)) {
        $query .= ", ";
    }

}
echo $query;
if (mysqli_query($dbConnection, $query)) {
    echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " rows";
} else {
    echo "Error occurred: " . mysqli_error($dbConnection);
}

/* Start Hops insert */
$query_hops = "INSERT INTO `winterma_homebrew`.`HOP` (`Hop`, `Amount`,`Time`,`Use`, `Brew ID`) VALUES ";

$count_hops = count($_POST['hops']);

for ($z=0; $z<$count_hops; $z++) {

    $query_hops .= "('".$_POST['hops'][$z]['name']."', '".$_POST['hops'][$z]['amount']."','".$_POST['hops'][$z]['time']."','".$_POST['hops'][$z]['use']."','$brewid')";

    /* If not last iteration, add a comma and a space */
    if ($z < ($count_hops - 1)) {
        $query_hops .= ", ";
    }

}
echo '<p>';
echo $query_hops;
if (mysqli_query($dbConnection, $query_hops)) {
    echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " rows";
} else {
    echo "Error occurred: " . mysqli_error($dbConnection);
}

/* Start Yeast insert */
$query_yeast = "INSERT INTO `winterma_homebrew`.`YEAST` (`Name`, `Lab`,`Brew ID`) VALUES ";

$count_yeast = count($_POST['yeast']);

for ($x=0; $x<$count_yeast; $x++) {

    $query_yeast .= "('".$_POST['yeast'][$x]['name']."', '".$_POST['yeast'][$x]['lab']."','$brewid')";

    /* If not last iteration, add a comma and a space */
    if ($x < ($count_yeast - 1)) {
        $query_yeast .= ", ";
    }

}
echo '<p>';
echo $query_yeast;
if (mysqli_query($dbConnection, $query_yeast)) {
    echo "Successfully inserted " . mysqli_affected_rows($dbConnection) . " rows";
} else {
    echo "Error occurred: " . mysqli_error($dbConnection);
}
// $query = "INSERT INTO `winterma_homebrew`.`GRAIN` (`ID`, `Grain`, `Amount`, `Brew ID`) VALUES " . implode(',', $values);
// mysql_query($query);


 // echo "<div class='alert alert-success' role='alert' style=''>Well done! You successfully added <strong>".$Brew."</strong></div>";
 // echo "You will automatically be redirected <a href='index.php'>home</a> in 3 seconds...";
?> 