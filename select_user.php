<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($link,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($link,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry, Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($link,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($link,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql="INSERT INTO `transaction` (`sno`, `sender`, `reciver`, `balance`, `datetime`) VALUES
                ('$sender', '$receiver', '$amount',current_timestamp())";
                   mysqli_query($link,$sql);
                  if(mysqli_query($link,$sql))
                  header("Location:viewtranh.php");

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Selectuser</title>
</head>
<body>
<?php
include('head.php');
?>

<div class="conatiner">

<h2 class="text-center">Transaction</h2>
<?php include("config.php");
if(array_key_exists('id',$_GET))
echo "Do your Transactions";

$sid=$_GET['id'];


$query="select *from users where id=$sid";
$res=mysqli_query($link,$query);



$rows=mysqli_fetch_assoc($res);



?>



<form action="" method="post" class="tabletext ">
<div>

<table class="table table-striped table-condensed table-bordered table-dark">
<thead class="bg-primary">
<tr>

                     <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Total Balance</th>
</tr>

<tbody>
<tr>
<td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2">Rs. <?php echo $rows['balance'] ?></td>


</tr>




</tbody>




</thead>
</table>
</div>
<div class="row">
        
            <div class="col-6">
        <label style="color : #6c757d;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Select Account</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($link,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($link);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        </div>


        <div class="col-6">
            <label style="color : #6c757d;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required> 
        </div>
        
        </div>

        <br><br>
                <div class="text-center" >
            <button class="btn btn-primary" name="submit" type="submit" id="myBtn" >Transfer Amount</button>
            </div>
        </form>










</div>






</form>

</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>