<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>History</title>
</head>
<body>
<?php
include('head.php');
?>
<div class="container">
<h2 class="text-center font-weight-bold display-4">Transfer History</h2>
<br>

<div class="table">

<table class="table table table-hover table-striped table-condensed table-dark table-bordered">
<thead style="color:$fff" class="bg-primary">
<tr>

                 <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>


</tr>
</thead>
<tbody>
<?php
include('config.php');
$query='select *from transaction';
$result=mysqli_query($link,$query);

while($rows=mysqli_fetch_assoc($result))
{
    ?>
<tr> 
            <td class="py-2"> <?php echo $rows['sno'];?> </td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['reciver']; ?></td>
            <td class="py-2">Rs. <?php echo $rows['balance']; ?> /-</td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>


</tr>

<?php
            }
        
        ?>






</tbody>



</table>




</div>


</div>












<?php
include('foot.php')
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>