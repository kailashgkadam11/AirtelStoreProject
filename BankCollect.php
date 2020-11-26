

<!DOCTYPE html>
<html>
<head>
	<title>Bank Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style>
.row-header {
  margin: 0px auto;
  padding: 0px 0px; 
    
}
.jumbotron {
    margin: 0px auto;
    padding: 70px 30px;
    background: #9575CD;
    color: floralwhite; 
    background-image: url('bg2.jpg');
}


* {
  box-sizing: border-box;
}

div::after{

  content: "";
  background-color: #ab5e32;
    opacity: 0.1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;

}
body {
    padding: 50px 0px 0px 0px;
    z-index: 0;
    background-image: url('bg2.jpg');
 
  font-family: Arial;
}
.buttonR {background-color: #f44336;} /* Red */ 
.bg {
 
  background-color:#ac8d9a;
 
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.box
{
  width: 1200px;
  height: 400px;
  padding: 20px;
  margin: 10px auto;
  background-repeat: no-repeat;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
  background-color:#465C8B;
  background-image: url(bg2.jpg);
  background-size: cover; 
}

.box2
{
  width: 1200px;
  height: 830px;
  padding: 20px;
  margin: 10px auto;
  background-repeat: no-repeat;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
  background-color:#465C8B;
  background-image: url(bg2.jpg);
  background-size: cover; 
}

.box3
{
  width: 1200px;
  height: 350px;
  padding: 20px;
  margin: 10px auto;
  background-repeat: no-repeat;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
  background-color:#465C8B;
  background-image: url(bg2.jpg);
  background-size: cover; 
}

</style>
</style>
<script language="javascript">
    function RimBal(){
        var FSECol = parseInt(document.getElementById("fseColl").value);
        var SimAmt = parseInt(document.getElementById("simAmt").value);
  		var Additional = parseInt(document.getElementById("additional").value);
  	    var TotalAdditional = parseInt(document.getElementById("totaladditional").value);  
  	    var Debit = parseInt(document.getElementById("debit").value);
        var TotalDebit = parseInt(document.getElementById("totaldebit").value);
        var Bank = parseInt(document.getElementById("bank").value);
        var TotalBank = parseInt(document.getElementById("totalbank").value);
        var ansRimBal = document.getElementById("rimBal");
        ansRimBal.value = FSECol + SimAmt + (Additional||TotalAdditional) - (Debit||TotalDebit) - 
        (Bank||TotalBank);
    }
</script>
</head>
<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Airtel Store</h1>
                    <p>Collection Of Easy Recharge,FSE Distributors,Bank Distributors</p>
                </div>
            </div>
        </div>
</header>


<body class="bg">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="Welcome.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Home &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand " href="easyRecharge.php">&nbsp&nbsp&nbsp&nbsp Easy Recharge &nbsp&nbsp&nbsp&nbsp</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="FSE-Dis.php"> &nbsp&nbsp&nbsp&nbsp FSE Distributor &nbsp&nbsp&nbsp&nbsp</a>
      </li>
          <li class="nav-item active">
        <a class="navbar-brand" href="BankCollect.php"> &nbsp&nbsp&nbsp&nbsp Bank Distributor &nbsp&nbsp&nbsp&nbsp</a>
      </li>
    </ul><li>
        
  </div>  
</nav>
<br><br>

<div class="container box">
  <form action="push.php" method="post">
  
    <div class="row">
      <h2>Collection</h2>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label for="date"><b>Date</b></label>&nbsp
            <input type="date"  name="date" required>
        </div>
        <br>
        <div class="col-sm-10">
        <br>
        <div class="row">
          <input type="text" id="fseColl" name="fsecollect" placeholder="FSE Collection">&nbsp
          <input type="text" id="simAmt" name="simamount" placeholder="SIM Card Amount">&nbsp
        </div>
        <br>
        <div class="row">
          <input type="text" id="additional" name="additionalamt" placeholder="Additional Amount">&nbsp
          <input type="text" name="addremark" placeholder="Remark">&nbsp
          <a href="Additional_amt.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
          <input type="text" id="totaladditional" name="addamt" placeholder="Total Amount">
        </div>
        <br>
        <div class="row">
          <input type="text" id="debit" name="dbt" placeholder="Debit">&nbsp
          <input type="text" name="remark" placeholder="Remark">&nbsp
          <a href="debit1.php" class="btn btn-primary" type="button" role="button">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              </a>&nbsp
          <input type="text" id="totaldebit" name="dbtamt" placeholder="Total Debited Amount">
        </div>
        <br>
        <div class="row">
          <input type="text" id="bank" name="banknm" placeholder="Bank Name">&nbsp
          <input type="text" name="bankremark" placeholder="Remark">&nbsp
          <a href="Bank.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
          <input type="text" id="totalbank" name="totamt" placeholder="Total Bank Amount">&nbsp
        </div>
        <br>
        <div class="row">
          <a href="javascript: void(0)"  class="btn btn-outline btn-info" type="button" onClick="RimBal()">Remaining Balance</a>&nbsp
          <input type="text" id="rimBal" name="rembal">&nbsp
          <!--<a href="javascript: void(0)" class="btn btn-outline-primary" type="button" onClick="">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Edit
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              </a>&nbsp-->
          <button type="submit" class="btn btn-danger" style="color: black" name="banksubmit"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Submit
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>&nbsp
          <button type="submit" class="btn btn-link btn-info" style="color: black" name="export_excel6" formaction="/Exceldownload.php">Excel download</button>
        </div>
      </div>
    </div>
  </form>
</div>
<br>
<br>
<div class="container box2">
  <form action="push.php" method="post">
    <div class="row">
      <br>
      <div class="col-sm-3">
        <h2>Bank Details</h2>
      </div>
      <br><br>
      <div class="col-sm">
        <label for="date"><b>Date</b></label>
        <input type="date"  name="date" required></br></br></br>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <h5>Bank Details 1</h5>
        </div>
        <div class="row">
          <input type="text" placeholder="Bank Name"  name="bnm" required>&nbsp
          <input type="text" placeholder="Available Balance" name="avl" required>&nbsp
          <input type="text" placeholder="Deposit" name="dep">&nbsp
          <input type="text" placeholder="Remark" name="remark1">&nbsp
          <a href="deposite.php" class="btn btn-primary" type="button" role="button"> 
              Multi
              </a>&nbsp
          <input type="text" placeholder="total Deposited" >
        </div>
          <br>
          
        <div class="row">
            <input type="text"  placeholder="Debit" name="debit">&nbsp
            <input type="text" name="remark2" placeholder="Remark">&nbsp
            <a href="debit2.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <input type="text"  name="totdebit" placeholder="Total Debit">
        </div>
          <br>
          
        <div class="row">
            <input type="text" name="neft" placeholder="NEFT">&nbsp
            <input type="text" name="remark3" placeholder="Remark">&nbsp
            <a href="NEFT.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <input type="text" name="totneft" placeholder="Total NEFT">&nbsp
            <button type="submit" class="btn btn-primary" name="submit31">Submit</button>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <h5>Bank Details 2</h5>
        </div>
        <div class="row">
          <input type="text" placeholder="Bank Name"  name="bnm2" required>&nbsp
          <input type="text" placeholder="Available Balance" name="avl2" required >&nbsp
          <input type="text" placeholder="Deposit" name="dep2">&nbsp
          <input type="text" placeholder="Remark" name="remark12">&nbsp
          <a href="deposite.php" class="btn btn-primary" type="button" role="button"> 
              Multi
             </a>&nbsp
          <input type="text" placeholder="total Deposited" >
        </div>
          <br>
          
        <div class="row">
            <input type="text"  placeholder="Debit" name="debit2">&nbsp
            <input type="text" name="remark22" placeholder="Remark">&nbsp
            <a href="debit2.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <input type="text"  name="totdebit" placeholder="Total Debit">
        </div>
          <br>
          
        <div class="row">
            <input type="text" name="neft2" placeholder="NEFT">&nbsp
            <input type="text" name="remark32" placeholder="Remark">&nbsp
            <a href="NEFT.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <input type="text" name="totneft" placeholder="Total NEFT">&nbsp
            <button type="submit" class="btn btn-primary" name="submit32">Submit</button>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <h5>Bank Details 3</h5>
        </div>
        <div class="row">
          <input type="text" placeholder="Bank Name"  name="bnm3" >&nbsp
          <input type="text" placeholder="Available Balance" name="avl3" >&nbsp
          <input type="text" placeholder="Deposit" name="dep3">&nbsp
          <input type="text" placeholder="Remark" name="remark13">&nbsp
          <a href="deposite.php" class="btn btn-primary" type="button" role="button"> 
              Multi
          </a>&nbsp
          <input type="text" placeholder="total Deposited" >
        </div>
          <br>
          
        <div class="row">
            <input type="text"  placeholder="Debit" name="debit3">&nbsp
            <input type="text" name="remark23" placeholder="Remark">&nbsp
            <a href="debit2.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <input type="text"  name="totdebit" placeholder="Total Debit">
        </div>
          <br>
          
        <div class="row">
            <input type="text" name="neft3" placeholder="NEFT">&nbsp
            <input type="text" name="remark33" placeholder="Remark">&nbsp
            <a href="NEFT.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <input type="text" name="totneft" placeholder="Total NEFT">&nbsp
            <button type="submit" class="btn btn-primary" name="submit33">Submit</button>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <button type="submit" class="btn btn-danger" name="submit35">
           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           Submit
           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>&nbsp&nbsp
      <button type="submit" name="export_excel7" class="btn btn-link btn-info" style="color: black" formaction="/Exceldownload.php">Excel download</button>
    </div>
  </form>
</div>
<br>
<div class="container box3">
  <form action="push.php" method="post">
  
    <div class="row">
      <h2>Day Billing</h2>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-3">
        <label for="date"><b>Date</b></label>&nbsp
        <input type="date"  name="date" required>&nbsp
      </div>

      <div class="col-sm-9">
        <div class="row">
          <input type="text" name="avlbal" placeholder="Available Balance">&nbsp
          <input type="text" name="billamt" placeholder="Billing Amount">&nbsp
        </div>
        <br>
        <div class="row">
          <label><b>Account 1</b></label>
          <input type="text" name="account1" placeholder="Amount">&nbsp
          <label><b>Account 2</b></label>
          <input type="text" name="account2" placeholder="Amount">
        </div>
        <br>
        <div class="row">
            <lable><b>Retail</b></lable>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="text" name="retailamt" placeholder="Retail Amount">&nbsp
          <input type="text" name="rem" placeholder="Remark">&nbsp
            <a href="Retail.php" class="btn btn-primary" type="button" role="button"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Multi
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
        </div>
        
        <br>
        <div class="row">
          <button type="submit" name="sumbitinfo" class="btn btn-danger" >
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              Submit
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              </button>&nbsp&nbsp
          <button type="submit" name="export_excel8" style="color: black" class="btn btn-link btn-info" formaction="/Exceldownload.php">Excel download</button>
        </div>
      </div>
    </div>
  </form>
</div>





</body>
</html>