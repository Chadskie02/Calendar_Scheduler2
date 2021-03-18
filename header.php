<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">     

        <script data-require="jquery@2.1.4" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="dist/jquery.ns-autogrow.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
        <!-- <link rel="stylesheet" href="style.css" /> -->
        <script src="script.js"></script>
  
</head>

<?php 
date_default_timezone_set('Asia/Tokyo');

if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
 
    $ym = date('Y-m');
}

$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

$today = date('Y-m-j', time());

$year = date('Y', $timestamp);
$month = date('M', $timestamp);

$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

$day_count = date('t', $timestamp);
 
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

$weeks = array();

$week = '';

$week .= str_repeat('<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><p class="help-block center"></p></div>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
   $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 active"><p class="help-block center active">' . $day . '</p>';
    } else {
        $week .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 not-active"><p class="help-block center">' . $day .'</p>';   
        ;
    }

    $query="SELECT * FROM date_info WHERE month = '$month' && day = '$day'";
    $query_result = mysqli_query($conn,$query);
    
    if ($query_result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($query_result)){

        if($day == $row['day']){

                $output = $row['text'];
                $outputid = $row['id'];
            
            if(empty($output)){
                $week .= '
                <input type="hidden" name="id[]" value="'.$outputid.'"  id="id"/>
                <input type="checkbox" checked name="day" value="'.$day.'" id="day" style="display:none;"/>
                <div class="example2">
                <textarea  maxlength="100" type="text" name="text[]" value="'.$output.'" class="form-control" id="text'.$day.'">'.$output.'</textarea>     
                </div>
                </div>';               
            } else {
                $week .= '
                <input type="hidden" name="id[]" value="'.$outputid.'"  id="id" />
                <input type="checkbox" checked name="day" value="'.$day.'" id="day" style="display:none;"/>

                <div class="example2">
                <textarea  maxlength="100" type="text" name="text[]" value="'.$output.'" class="form-control thisday" id="text'.$day.'">'.$output.'</textarea>
                </div>
                    
                </div>';
            }          
            }
            }
            } else {
                $week .= '
                <input type="hidden" name="id[]" value="" id="id" />
                <input type="checkbox" checked name="day" value="'.$day.'" id="day" style="display:none;"/>
                <div class="example2">
                <textarea  maxlength="100" type="text" name="text[]" value=""  class="form-control" id="text'.$day.'"></textarea>      
                </div>
                </div>';
    }

    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            $week .= str_repeat('<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><p class="help-block center"></p></div>', 6 - ($str % 7));
        }

        $weeks[] = '<div class="form-group"><div class="row seven-cols">' . $week . '</div></div>';
        $week = '';
    }

}
?>
