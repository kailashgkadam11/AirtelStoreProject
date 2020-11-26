<?php
session_start(); 
$con=mysqli_connect('localhost','id12710932_kailash1',"kailash");
mysqli_select_db($con, "id12710932_db1");

if (isset($_POST['submit121'])) {
  $date = $_POST['date'];
  $ammount1 = $_POST['ammount1'];
    $remark1 = $_POST['remark1'];
    $ammount2 = $_POST['ammount2'];
    $remark2 = $_POST['remark2'];
    $ammount3 = $_POST['ammount3'];
    $remark3 = $_POST['remark3'];
    $ammount4 = $_POST['ammount4'];
    $remark4 = $_POST['remark4'];

    
  
  $sql = "insert into additional(date,amount,remark)
  values('$date','$ammount1','$remark1'),
  ('$date','$ammount2','$remark2'),
    ('$date','$ammount3','$remark3'),
      ('$date','$ammount4','$remark4')";

  mysqli_query($con,$sql);
  header('location:Additional_amt.php') ; 
}


if (isset($_POST['submit122'])) {
  $date = $_POST['date'];
  $ammount1 = $_POST['ammount1'];
    $remark1 = $_POST['remark1'];
    $ammount2 = $_POST['ammount2'];
    $remark2 = $_POST['remark2'];
    $ammount3 = $_POST['ammount3'];
    $remark3 = $_POST['remark3'];
    $ammount4 = $_POST['ammount4'];
    $remark4 = $_POST['remark4'];

    
  
  $sql = "insert into debit(date,ammount,remark)
  values('$date','$ammount1','$remark1'),
  ('$date','$ammount2','$remark2'),
    ('$date','$ammount3','$remark3'),
      ('$date','$ammount4','$remark4')";

  mysqli_query($con,$sql);
  header('location:debit1.php') ; 
}


if (isset($_POST['submit123'])) {
  $date = $_POST['date'];
  $ammount1 = $_POST['ammount1'];
    $remark1 = $_POST['remark1'];
    $ammount2 = $_POST['ammount2'];
    $remark2 = $_POST['remark2'];
    $ammount3 = $_POST['ammount3'];
    $remark3 = $_POST['remark3'];
    $ammount4 = $_POST['ammount4'];
    $remark4 = $_POST['remark4'];

    
  
  $sql = "insert into debit2(date,amount,remark)
  values('$date','$ammount1','$remark1'),
  ('$date','$ammount2','$remark2'),
    ('$date','$ammount3','$remark3'),
      ('$date','$ammount4','$remark4')";

  mysqli_query($con,$sql);
  header('location:debit2.php') ; 
}
if (isset($_POST['submit124'])) {
  $date = $_POST['date'];
  $ammount1 = $_POST['ammount1'];
    $remark1 = $_POST['remark1'];
    $ammount2 = $_POST['ammount2'];
    $remark2 = $_POST['remark2'];
    $ammount3 = $_POST['ammount3'];
    $remark3 = $_POST['remark3'];
    $ammount4 = $_POST['ammount4'];
    $remark4 = $_POST['remark4'];

    
  
  $sql = "insert into deposite(date,amount,remark)
  values('$date','$ammount1','$remark1'),
  ('$date','$ammount2','$remark2'),
    ('$date','$ammount3','$remark3'),
      ('$date','$ammount4','$remark4')";

  mysqli_query($con,$sql);
  header('location:deposite.php') ; 
}
if (isset($_POST['submit125'])) {
  $date = $_POST['date'];
  $ammount1 = $_POST['ammount1'];
    $remark1 = $_POST['remark1'];
    $ammount2 = $_POST['ammount2'];
    $remark2 = $_POST['remark2'];
    $ammount3 = $_POST['ammount3'];
    $remark3 = $_POST['remark3'];
    $ammount4 = $_POST['ammount4'];
    $remark4 = $_POST['remark4'];

    
  
  $sql = "insert into neft(date,amount,remark)
  values('$date','$ammount1','$remark1'),
  ('$date','$ammount2','$remark2'),
    ('$date','$ammount3','$remark3'),
      ('$date','$ammount4','$remark4')";

  mysqli_query($con,$sql);
  header('location:NEFT.php') ; 
}

if (isset($_POST['submit126'])) {
  $date = $_POST['date'];
  $number1 = $_POST['number1'];
    $ammount1 = $_POST['ammount1'];
    $number2 = $_POST['number2'];
    $ammount2 = $_POST['ammount2'];
    $number3 = $_POST['number3'];
    $ammount3 = $_POST['ammount3'];
    $number4 = $_POST['number4'];
    $ammount4 = $_POST['ammount4'];

    
  
  $sql = "insert into bank(date,bankname,remark)
  values('$date','$number1','$ammount1'),
  ('$date','$number2','$ammount2'),
    ('$date','$number3','$ammount3'),
      ('$date','$number4','$ammount4')";

  mysqli_query($con,$sql);
  header('location:Bank.php') ; 
}

if (isset($_POST['submit127'])) {
  $date = $_POST['date'];
  $retail1 = $_POST['retail1'];
    $remark1 = $_POST['remark1'];
    $retail2 = $_POST['retail2'];
    $remark2 = $_POST['remark2'];
    $retail3 = $_POST['retail3'];
    $remark3 = $_POST['remark3'];
    $retail4 = $_POST['retail4'];
    $remark4 = $_POST['remark4'];

    
  
  $sql = "insert into retail(date,retail,remark)
  values('$date','$retail1','$remark1'),
  ('$date','$retail2','$remark2'),
    ('$date','$retail3','$remark3'),
      ('$date','$retail4','$remark4')";

  mysqli_query($con,$sql);
  header('location:Retail.php') ; 
}


?>