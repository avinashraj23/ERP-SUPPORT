<?php

include('dbcon.php');   
include ('paginate1.php');
$per_page = 5;         
$result = mysql_query("SELECT * FROM slogin");
$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);


if (isset($_GET['page'])) {
    $show_page = $_GET['page'];        
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
       
        $start = 0;              
        $end = $per_page;
    }
} else {
   
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);

$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database</title>
    <h3 align="center"> Student Database </h3>
    <link rel="stylesheet" type="text/css" href="new.css" />
    <style type="text/css">
.logo
{
    text-align: center;
}
.container{

}
</style>
</head>
<body>
 <a align='left' href="index.php"> HOME </a>
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <div class="mini-layout">
                 <?php
                    $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                    echo '<div class="pagination"><ul>';
                    if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
                    }
                    echo "</ul></div>";
                    
                    echo "<table class='table table-bordered'>";
                    echo "<thead><tr><th>Name</th> <th>Email</th> </tr></thead>";
                    
                    for ($i = $start; $i < $end; $i++) {
                        
                        if ($i == $total_results) {
                            break;
                        }
                      
                        // echo out the contents of each row into a table
                        echo "<tr " . $cls . ">";
                        echo '<td>' . mysql_result($result, $i, 'name') . '</td>';
                        echo '<td>' . mysql_result($result, $i, 'email') . '</td>';
                        echo "</tr>";
                        }       
                   
                echo "</table>";
            
            ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>



