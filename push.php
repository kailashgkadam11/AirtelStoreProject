<?php 
session_start(); 
$con=mysqli_connect('localhost','id12710932_kailash1','kailash');
mysqli_select_db($con, "id12710932_db1");

//easy recharge
if (isset($_POST['submit1'])) {
	$date = $_POST['date'];
    $ebal = $_POST['ebal'];
    $abal = $_POST['abal'];
    $totalBal = $_POST['totalBal'];
    $cno = $_POST['cno'];
    $amount = $_POST['amount'];
    $otf = $_POST['otf'];
    $rtbal = $_POST['rtbal'];
  
  $sql = "insert into easyrecharge(dt,ebal,abal,tbal,cno,amount,otf,rtbal)
  values('$date','$ebal','$abal','$totalBal','$cno','$amount','$otf','$rtbal')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}


if (isset($_POST['submit2'])) {
	$date = $_POST['date'];
	$newcno = $_POST['newcno'];
    $newcnm = $_POST['newcnm'];
    
  
  $sql = "insert into simcard(ndt,new_number,new_name)
  values('$date','$newcno','$newcnm')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}
if (isset($_POST['submit3'])) {
	$date = $_POST['date'];
	$mnpcno = $_POST['mnpcno'];
    $mnpcnm = $_POST['mnpcnm'];
    
  
  $sql = "insert into mnpcard(ndt,mnp_number,mnp_name)
  values('$date','$mnpcno','$mnpcnm')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}

if (isset($_POST['submit22'])) {
	$date = $_POST['date'];
	$newcno = $_POST['newcno'];
    $newcnm = $_POST['newcnm'];
    $mnpcno = $_POST['mnpcno'];
    $mnpcnm = $_POST['mnpcnm'];
  
  $sql = "insert into simcards(ndt,new_number,new_name,mnp_number,mnp_name)
  values('$date','$newcno','$newcnm','$mnpcno','$mnpcnm')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}

if (isset($_POST['submit81'])) {
	$date = $_POST['date'];
	$swapno = $_POST['swapno'];
    $swapamt = $_POST['swapamt'];
    
  
  $sql = "insert into simswap(dt,swap_number,swap_amount)
  values('$date','$swapno','$swapamt')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}
if (isset($_POST['submit82'])) {
	$date = $_POST['date'];
	$fourgno = $_POST['fourgno'];
    $fourgamt = $_POST['fourgamt'];
    
  
  $sql = "insert into fourg(dt,fourg_number,fourg_amount)
  values('$date','$fourgno','$fourgamt')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}
if (isset($_POST['submit83'])) {
	$date = $_POST['date'];
	$ostno = $_POST['ostno'];
    $ostamt = $_POST['ostamt'];
    
  
  $sql = "insert into ost(dt,ost_number,ost_amount)
  values('$date','$ostno','$ostamt')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}
if (isset($_POST['submit84'])) {
	$date = $_POST['date'];
	$examt = $_POST['examt'];
    $exremark = $_POST['exremark'];
    
  
  $sql = "insert into expense(dt,ex_amount,ex_remark)
  values('$date','$examt','$exremark')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}
if (isset($_POST['submit23'])) {
	$date = $_POST['date'];
	$swapno = $_POST['swapno'];
    $swapamt = $_POST['swapamt'];
    $fourgno = $_POST['fourgno'];
    $fourgamt = $_POST['fourgamt'];
    $ostno = $_POST['ostno'];
    $ostamt = $_POST['ostamt'];
    $examt = $_POST['examt'];
    $exremark = $_POST['exremark'];

  
  $sql = "insert into simswaps(dt,swap_number,swap_amount,fourg_number,fourg_amount,ost_number,ost_amount,ex_amount,ex_remark)
  values('$date','$swapno','$swapamt','$fourgno','$fourgamt','$ostno','$ostamt','$examt','$exremark')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php'); 
}

//End


//bank Details
if (isset($_POST['submit31'])) {
	$date = $_POST['date'];
	$banknm = $_POST['bnm'];
	$avl = $_POST['avl'];
	$dep =$_POST['dep'];
	$remark1 =$_POST['remark1'];
	$debit = $_POST['debit'];
	$remark2 = $_POST['remark2'];
	$neft= $_POST['neft'];
	$remark3= $_POST['remark3'];
	
	
	$res = "insert into 
	bankdetails(dt,banknm,avlbal,deposit,remark1,debit,remark2,neft,remark3)
	values('$date ','$banknm','	$avl','$dep','$remark1','$debit','$remark2','$neft','$remark3')";
	mysqli_query($con,$res);
	header('location:bankdetail.php');
}
if (isset($_POST['submit32'])) {
	$date = $_POST['date'];
	$banknm2 = $_POST['bnm2'];
	$avl2 = $_POST['avl2'];
	$dep2 =$_POST['dep2'];
	$remark12 =$_POST['remark12'];
	$debit2 = $_POST['debit2'];
	$remark22 = $_POST['remark22'];
	$neft2= $_POST['neft2'];
	$remark32= $_POST['remark32'];
	
	
	$res = "insert into bankdetails(dt,banknm,avlbal,deposit,remark1,debit,remark2,neft,remark3)
	values('$date','$banknm2','	$avl2','$dep2','$remark12','$debit2','$remark22','$neft2','$remark32')";
	mysqli_query($con,$res);
	header('location:bankdetail.php');
}
if (isset($_POST['submit33'])) {
	$date = $_POST['date'];
	$banknm3 = $_POST['bnm3'];
	$avl3 = $_POST['avl3'];
	$dep3 =$_POST['dep3'];
	$remark13 =$_POST['remark13'];
	$debit3 = $_POST['debit3'];
	$remark23 = $_POST['remark23'];
	$neft3= $_POST['neft3'];
	$remark33= $_POST['remark33'];
	
	
	$res = "insert into	bankdetails(dt,banknm,avlbal,deposit,remark1,debit,remark2,neft,remark3)
	values('$date ','$banknm3','$avl3','$dep3','$remark13','$debit3','$remark23','$neft3','$remark33')";
	mysqli_query($con,$res);
	header('location:bankdetail.php');
}
if (isset($_POST['submit34'])) {
	$date = $_POST['date'];
	$banknm4 = $_POST['bnm4'];
	$avl4 = $_POST['avl4'];
	$dep4 =$_POST['dep4'];
	$remark14 =$_POST['remark14'];
	$debit4 = $_POST['debit4'];
	$remark24 = $_POST['remark24'];
	$neft4= $_POST['neft4'];
	$remark34= $_POST['remark34'];
	
	
	$res = "insert into bankdetails(dt,banknm,avlbal,deposit,remark1,debit,remark2,neft,remark3)
	values('$date ','$banknm4','$avl4','$dep4','$remark14','$debit4','$remark24','$neft4','$remark34')";
	mysqli_query($con,$res);
	header('location:bankdetail.php');
}


if (isset($_POST['submit35'])) {
	$date = $_POST['date'];
	$banknm = $_POST['bnm'];
	$avl = $_POST['avl'];
	$dep =$_POST['dep'];
	$remark1 =$_POST['remark1'];
	$debit = $_POST['debit'];
	$remark2 = $_POST['remark2'];
	$neft= $_POST['neft'];
	$remark3= $_POST['remark3'];

	$banknm2 = $_POST['bnm2'];
	$avl2 = $_POST['avl2'];
	$dep2 =$_POST['dep2'];
	$remark12 =$_POST['remark12'];
	$debit2 = $_POST['debit2'];
	$remark22 = $_POST['remark22'];
	$neft2= $_POST['neft2'];
	$remark32= $_POST['remark32'];

	$banknm3 = $_POST['bnm3'];
	$avl3 = $_POST['avl3'];
	$dep3 =$_POST['dep3'];
	$remark13 =$_POST['remark13'];
	$debit3 = $_POST['debit3'];
	$remark23 = $_POST['remark23'];
	$neft3= $_POST['neft3'];
	$remark33= $_POST['remark33'];

	
	
	$res = "insert into bankdetails(dt,banknm,avlbal,deposit,remark1,debit,remark2,neft,remark3)
	values('$date','$banknm','$avl','$dep','$remark1','$debit','$remark2','$neft','$remark3'),
	('$date','$banknm2','$avl2','$dep2','$remark12','$debit2','$remark22','$neft2','$remark32'),
	('$date','$banknm3','$avl3','$dep3','$remark13','$debit3','$remark23','$neft3','$remark33')";
	
	mysqli_query($con,$res);
	header('location:BankCollect.php');
}




//End


if (isset($_POST['submit10'])) {
	$datesim = $_POST['datesim'];
	$newcno1 = $_POST['newcno1'];
    $newcnm1 = $_POST['newcnm1'];

    
	$newcno2 = $_POST['newcno2'];
    $newcnm2 = $_POST['newcnm2'];

	$newcno3 = $_POST['newcno3'];
    $newcnm3 = $_POST['newcnm3'];


	$newcno4 = $_POST['newcno4'];
    $newcnm4 = $_POST['newcnm4'];


	$newcno5 = $_POST['newcno5'];
    $newcnm5 = $_POST['newcnm5'];

  
  $sql = "insert into simcard(ndt,new_number,new_name)
  values('$datesim','$newcno1','$newcnm1'),
  values('$datesim','$newcno2','$newcnm2'),
  values('$datesim','$newcno3','$newcnm3'),
  values('$datesim','$newcno4','$newcnm4'),
  values('$datesim','$newcno5','$newcnm5')";
  mysqli_query($con,$sql);
  header('location:new_sim.php') ; 
}


//fse collection
if (isset($_POST['submit11'])) {
	$date1 = $_POST['date1'];
	$fsenm1 = $_POST['fsenm1'];
    $fseid1 = $_POST['fseid1'];
	$oldbal1 = $_POST['oldbal1'];
    $newbal1 = $_POST['newbal1'];
	$totalbal1 = $_POST['totalbal1'];
    $cashpay1 = $_POST['cashpay1'];
	$totaldue1 = $_POST['totaldue1'];
    $usimq1 = $_POST['usimq1'];
	$usimr1 = $_POST['usimr1'];
	$nsimq1 = $_POST['nsimq1'];
    $nsimr1 = $_POST['nsimr1'];
	$amount11 = $_POST['amount11'];
    $cashp1 = $_POST['cashp1'];
    $ramt1 = $_POST['ramt1'];

  
  $sql = "insert into fsedis(dt,fsenm,fseid,oldbal,newbal,totalbal,cashpay,totaldue,usimq,usimr,nsimq,nsimr,amount1,cashp,ramt)
  values('$date1','$fsenm1','$fseid1','$oldbal1','$newbal1','$totalbal1','$cashpay1','$totaldue1','$usimq1','$usimr1','$nsimq1','$nsimr1','$amount11','$cashp1','$ramt1')";

  mysqli_query($con,$sql);
  header('location:FSE-Dis.php') ; 
}
if (isset($_POST['submit12'])) {
	$date2 = $_POST['date2'];
	$fsenm2 = $_POST['fsenm2'];
    $fseid2 = $_POST['fseid2'];
	$oldbal2 = $_POST['oldbal2'];
    $newbal2 = $_POST['newbal2'];
	$totalbal2 = $_POST['totalbal2'];
    $cashpay2 = $_POST['cashpay2'];
	$totaldue2 = $_POST['totaldue2'];
    $usimq2 = $_POST['usimq2'];
	$usimr2 = $_POST['usimr2'];
	$nsimq2 = $_POST['nsimq2'];
    $nsimr2 = $_POST['nsimr2'];
	$amount12 = $_POST['amount12'];
    $cashp2 = $_POST['cashp2'];
    $ramt2 = $_POST['ramt2'];

  
  $sql = "insert into fsedis(dt,fsenm,fseid,oldbal,newbal,totalbal,cashpay,totaldue,usimq,usimr,nsimq,nsimr,amount1,cashp,ramt)
  values('$date2','$fsenm2','$fseid2','$oldbal2','$newbal2','$totalbal2','$cashpay2','$totaldue2','$usimq2','$usimr2','$nsimq2','$nsimr2','$amount12','$cashp2','$ramt2')";

  mysqli_query($con,$sql);
  header('location:FSE-Dis.php') ; 
}
if (isset($_POST['submit13'])) {
	$date3 = $_POST['date3'];
	$fsenm3 = $_POST['fsenm3'];
    $fseid3 = $_POST['fseid3'];
	$oldbal3 = $_POST['oldbal3'];
    $newbal3 = $_POST['newbal3'];
	$totalbal3 = $_POST['totalbal3'];
    $cashpay3 = $_POST['cashpay3'];
	$totaldue3 = $_POST['totaldue3'];
    $usimq3 = $_POST['usimq3'];
	$usimr3 = $_POST['usimr3'];
	$nsimq3 = $_POST['nsimq3'];
    $nsimr3 = $_POST['nsimr3'];
	$amount13 = $_POST['amount13'];
    $cashp3 = $_POST['cashp3'];
    $ramt3 = $_POST['ramt3'];

  
  $sql = "insert into fsedis(dt,fsenm,fseid,oldbal,newbal,totalbal,cashpay,totaldue,usimq,usimr,nsimq,nsimr,amount1,cashp,ramt)
  values('$date3','$fsenm3','$fseid3','$oldbal3','$newbal3','$totalbal3','$cashpay3','$totaldue3','$usimq3','$usimr3','$nsimq3','$nsimr3','$amount13','$cashp3','$ramt3')";

  mysqli_query($con,$sql);
  header('location:FSE-Dis.php') ; 
}
if (isset($_POST['submit14'])) {
	$date4 = $_POST['date4'];
	$fsenm4 = $_POST['fsenm4'];
    $fseid4 = $_POST['fseid4'];
	$oldbal4 = $_POST['oldbal4'];
    $newbal4 = $_POST['newbal4'];
	$totalbal4 = $_POST['totalbal4'];
    $cashpay4 = $_POST['cashpay4'];
	$totaldue4 = $_POST['totaldue4'];
    $usimq4 = $_POST['usimq4'];
	$usimr4 = $_POST['usimr4'];
	$nsimq4 = $_POST['nsimq4'];
    $nsimr4 = $_POST['nsimr4'];
	$amount14 = $_POST['amount14'];
    $cashp4 = $_POST['cashp4'];
    $ramt4 = $_POST['ramt4'];

  
  $sql = "insert into fsedis(dt,fsenm,fseid,oldbal,newbal,totalbal,cashpay,totaldue,usimq,usimr,nsimq,nsimr,amount1,cashp,ramt)
  values('$date4','$fsenm4','$fseid4','$oldbal4','$newbal4','$totalbal4','$cashpay4','$totaldue4','$usimq4','$usimr4','$nsimq4','$nsimr4','$amount14','$cashp4','$ramt4')";

  mysqli_query($con,$sql);
  header('location:FSE-Dis.php') ; 
}
if (isset($_POST['submit15'])) {
	$date5 = $_POST['date5'];
	$fsenm5 = $_POST['fsenm5'];
    $fseid5 = $_POST['fseid5'];
	$oldbal5 = $_POST['oldbal5'];
    $newbal5 = $_POST['newbal5'];
	$totalbal5 = $_POST['totalbal5'];
    $cashpay5 = $_POST['cashpay5'];
	$totaldue5 = $_POST['totaldue5'];
    $usimq5 = $_POST['usimq5'];
	$usimr5 = $_POST['usimr5'];
	$nsimq5 = $_POST['nsimq5'];
    $nsimr5 = $_POST['nsimr5'];
	$amount15 = $_POST['amount15'];
    $cashp5 = $_POST['cashp5'];
    $ramt5 = $_POST['ramt5'];

  
  $sql = "insert into fsedis(dt,fsenm,fseid,oldbal,newbal,totalbal,cashpay,totaldue,usimq,usimr,nsimq,nsimr,amount1,cashp,ramt)
  values('$date5','$fsenm5','$fseid5','$oldbal5','$newbal5','$totalbal5','$cashpay5','$totaldue5','$usimq5','$usimr5','$nsimq5','$nsimr5','$amount15','$cashp5','$ramt5')";

  mysqli_query($con,$sql);
  header('location:FSE-Dis.php') ; 
}

if (isset($_POST['submit16'])) {
	$date1 = $_POST['date1'];
	$fsenm1 = $_POST['fsenm1'];
    $fseid1 = $_POST['fseid1'];
	$oldbal1 = $_POST['oldbal1'];
    $newbal1 = $_POST['newbal1'];
	$totalbal1 = $_POST['totalbal1'];
    $cashpay1 = $_POST['cashpay1'];
	$totaldue1 = $_POST['totaldue1'];
    $usimq1 = $_POST['usimq1'];
	$usimr1 = $_POST['usimr1'];
	$nsimq1 = $_POST['nsimq1'];
    $nsimr1 = $_POST['nsimr1'];
	$amount11 = $_POST['amount11'];
    $cashp1 = $_POST['cashp1'];
    $ramt1 = $_POST['ramt1'];


    $date2 = $_POST['date2'];
	$fsenm2 = $_POST['fsenm2'];
    $fseid2 = $_POST['fseid2'];
	$oldbal2 = $_POST['oldbal2'];
    $newbal2 = $_POST['newbal2'];
	$totalbal2 = $_POST['totalbal2'];
    $cashpay2 = $_POST['cashpay2'];
	$totaldue2 = $_POST['totaldue2'];
    $usimq2 = $_POST['usimq2'];
	$usimr2 = $_POST['usimr2'];
	$nsimq2 = $_POST['nsimq2'];
    $nsimr2 = $_POST['nsimr2'];
	$amount12 = $_POST['amount12'];
    $cashp2 = $_POST['cashp2'];
    $ramt2 = $_POST['ramt2'];

    $date3 = $_POST['date3'];
	$fsenm3 = $_POST['fsenm3'];
    $fseid3 = $_POST['fseid3'];
	$oldbal3 = $_POST['oldbal3'];
    $newbal3 = $_POST['newbal3'];
	$totalbal3 = $_POST['totalbal3'];
    $cashpay3 = $_POST['cashpay3'];
	$totaldue3 = $_POST['totaldue3'];
    $usimq3 = $_POST['usimq3'];
	$usimr3 = $_POST['usimr3'];
	$nsimq3 = $_POST['nsimq3'];
    $nsimr3 = $_POST['nsimr3'];
	$amount13 = $_POST['amount13'];
    $cashp3 = $_POST['cashp3'];
    $ramt3 = $_POST['ramt3'];
    
    $date4 = $_POST['date4'];
	$fsenm4 = $_POST['fsenm4'];
    $fseid4 = $_POST['fseid4'];
	$oldbal4 = $_POST['oldbal4'];
    $newbal4 = $_POST['newbal4'];
	$totalbal4 = $_POST['totalbal4'];
    $cashpay4 = $_POST['cashpay4'];
	$totaldue4 = $_POST['totaldue4'];
    $usimq4 = $_POST['usimq4'];
	$usimr4 = $_POST['usimr4'];
	$nsimq4 = $_POST['nsimq4'];
    $nsimr4 = $_POST['nsimr4'];
	$amount14 = $_POST['amount14'];
    $cashp4 = $_POST['cashp4'];
    $ramt4 = $_POST['ramt4'];

    $date5 = $_POST['date5'];
	$fsenm5 = $_POST['fsenm5'];
    $fseid5 = $_POST['fseid5'];
	$oldbal5 = $_POST['oldbal5'];
    $newbal5 = $_POST['newbal5'];
	$totalbal5 = $_POST['totalbal5'];
    $cashpay5 = $_POST['cashpay5'];
	$totaldue5 = $_POST['totaldue5'];
    $usimq5 = $_POST['usimq5'];
	$usimr5 = $_POST['usimr5'];
	$nsimq5 = $_POST['nsimq5'];
    $nsimr5 = $_POST['nsimr5'];
	$amount15 = $_POST['amount15'];
    $cashp5 = $_POST['cashp5'];
    $ramt5 = $_POST['ramt5'];

  
  $sql = "insert into fsedis(dt,fsenm,fseid,oldbal,newbal,totalbal,cashpay,totaldue,usimq,usimr,nsimq,nsimr,amount1,cashp,ramt)
  values('$date1','$fsenm1','$fseid1','$oldbal1','$newbal1','$totalbal1','$cashpay1','$totaldue1','$usimq1','$usimr1','$nsimq1','$nsimr1','$amount11','$cashp1','$ramt1'),
  		('$date2','$fsenm2','$fseid2','$oldbal2','$newbal2','$totalbal2','$cashpay2','$totaldue2','$usimq2','$usimr2','$nsimq2','$nsimr2','$amount12','$cashp2','$ramt2'),
  		('$date3','$fsenm3','$fseid3','$oldbal3','$newbal3','$totalbal3','$cashpay3','$totaldue3','$usimq3','$usimr3','$nsimq3','$nsimr3','$amount13','$cashp3','$ramt3'),
  		('$date4','$fsenm4','$fseid4','$oldbal4','$newbal4','$totalbal4','$cashpay4','$totaldue4','$usimq4','$usimr4','$nsimq4','$nsimr4','$amount14','$cashp4','$ramt4'),
  		('$date5','$fsenm5','$fseid5','$oldbal5','$newbal5','$totalbal5','$cashpay5','$totaldue5','$usimq5','$usimr5','$nsimq5','$nsimr5','$amount15','$cashp5','$ramt5')";

  mysqli_query($con,$sql);
  header('location:FSE-Dis.php') ; 
}


if (isset($_POST['submit20'])) {
	$date = $_POST['date'];
	$openbal = $_POST['openbal'];
    $addbal = $_POST['addbal'];
    $cashtno = $_POST['cashtno'];
	$cashtamt = $_POST['cashtamt'];
    $cashwno = $_POST['cashwno'];
    $cashwamt = $_POST['cashwamt'];
  
  $sql = "insert into paybank(dt,openbal,addbal,cashtno,cashtamt,cashwno,cashwamt)
  values('$date','$openbal','$addbal','$cashtno','$cashtamt','$cashwno','$cashwamt')";
  mysqli_query($con,$sql);
  header('location:easyRecharge.php') ; 
}






if (isset($_POST['banksubmit'])) {
	$date           = $_POST['date'];
	$fsecollect     = $_POST['fsecollect'];
	$simamount      = $_POST['simamount'];
	$additionalamt  = $_POST['additionalamt'];
	$addremark      = $_POST['addremark'];
	$dbt            = $_POST['dbt'];
	$remark         = $_POST['remark'];
	$banknm         = $_POST['banknm'];
	$bankremark     = $_POST['bankremark'];
	$rembal         = $_POST['rembal'];

    $sql = "insert into totalcollection(dt3,fsecollect,simamt,addamt,rem1,debit,rem2,bname,rem3,rembal)
    values ('$date','$fsecollect','$simamount','$additionalamt','$addremark','$dbt','$remark','$banknm','$bankremark','$rembal')";

	mysqli_query($con,$sql);
	header('location:BankCollect.php');
} 


if (isset($_POST['sumbitinfo'])) {
	$date = $_POST['date'];
	$avlbal = $_POST['avlbal'];
	$billamt = $_POST['billamt'];
	$account1= $_POST['account1'];
	$account2 = $_POST['account2'];
	$retailamt = $_POST['retailamt'];
	$rem = $_POST['rem'];
	

    $sql = "insert into bankpayment(dt4,avlbal,billamt,a1amt,a2amt,retailamt,remark)
    values ('$date','$avlbal','$billamt','$account1','$account2','$retailamt','$rem')";

	mysqli_query($con,$sql);
	header('location:BankCollect.php');
}

?>