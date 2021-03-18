<?php include('db.php'); ?>
<?php
    $id=$_POST['id'];
    $user=$_POST['user'];
    $year=$_POST['year'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $text=$_POST['text'];

for ($i = 0; $i < count($day); $i++) {
    if(($day[$i] != "")){

    $date=$_POST['year'] . ' ' . $_POST['month'] . ' ' . $day[$i];

$qry2 = ("SELECT * FROM date_info WHERE reserve1 = '$date'");
$res = mysqli_query($conn, $qry2);

}
}

if (mysqli_num_rows($res) > 0) {  

    for ($i = 0; $i < count($day); $i++) {
        if(($day[$i] != "")){

            $qry2 = "UPDATE date_info SET text='$text[$i]' WHERE id=$id[$i]";
            $conn->query($qry2); 

        }
    }
    // Print "Data updated Successfully !";   

}else{

    for ($i = 0; $i < count($day); $i++) {
        if(($day[$i] != "")){ 

            $date=$_POST['year'] . ' ' . $_POST['month'] . ' ' . $day[$i];
    
        if($date == $year.''.$month.''.$day[$i]){

            $qry2 = "UPDATE date_info SET text='$text[$i]' WHERE id=$id[$i]";
            $conn->query($qry2); 

        } else {

            $qry2 = "INSERT INTO date_info (id, user, text, year, month, day, reserve1) VALUES ('', '$user', '$text[$i]', '$year', '$month' ,'$day[$i]','$date')";
            $conn->query($qry2);
    
            Print "$date Data added Successfully !";

        }

        }
    }
}

mysqli_close($conn);
?>