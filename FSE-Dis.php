
<!DOCTYPE html>
  <html>
  <head>
  <title>FSE distributor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
.row-header {
  margin: 0px auto;
  padding: 0px 0px; }
.jumbotron {
  margin: 0px auto;
  padding: 70px 30px;
  background: #9575CD;
  color: floralwhite; 
    background-image: url("bg3.jpg");
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
    background-image: url("bg3.jpg");
  /*background-color: #f1f1f1;*/
  padding: 20px;
  font-family: Arial;
  padding: 50px 0px 0px 0px;
  z-index: 0;
}
.bg {
 background-color:#C09F80;
  /*background-image: url("backimg.jpg");*/
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.buttonR {background-color: #f44336;} /* Red */ 

.box
{
  width: 1200px;
  height: 300px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid blue;
  background-image: url(Rit3.jpg);
  background-size: cover; 
}

.box2
{
  width: 1200px;
  height: 250px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid blue;
  background-image: url(Rit3.jpg);
  background-size: cover; 
}

.box3
{
  width: 1200px;
  height: 400px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid blue;
  background-image: url(Rit3.jpg);
  background-size: cover; 
}

.box4
{
  width: 1200px;
  height: 400px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid blue;
  background-image: url(Rit3.jpg);
  background-size: cover; 
}
</style>

  <script language="javascript">
       function totalBalF1()
                {
                        var Old = parseInt(document.getElementById("old1").value);
                        var New = parseInt(document.getElementById("new1").value);
                        var ansTF = document.getElementById("totalBf1");
                        ansTF.value = Old + New;
                }
                function totalDue1()
                {
                        var TotalBF = parseInt(document.getElementById("totalBf1").value);
                        var CashP = parseInt(document.getElementById("cashPaid1").value);
                        var ansDue = document.getElementById("totaldue1");
                        ansDue.value = TotalBF - CashP ; 
                }
                function Sim1()
                {
                        var USim = parseInt(document.getElementById("uSimQ1").value);
                        var URate = parseInt(document.getElementById("uSimR1").value);
                        var NSim = parseInt(document.getElementById("nSimQ1").value);
                        var NRate = parseInt(document.getElementById("nSimR1").value);
                        var ansAmount1 = document.getElementById("amount11");
                        ansAmount1.value = USim * URate + NSim * NRate ; 
                }
                function RimAmt1()
                {
                        var Amount1 = parseInt(document.getElementById("amount11").value);
                        var CPaid = parseInt(document.getElementById("cashP1").value);
                        
                        var ansRAmt = document.getElementById("rAmt1");
                        ansRAmt.value = Amount1 - CPaid ; 
                }///module 1

                 function totalBalF2()
                {
                        var Old = parseInt(document.getElementById("old2").value);
                        var New = parseInt(document.getElementById("new2").value);
                        var ansTF = document.getElementById("totalBf2");
                        ansTF.value = Old + New;
                }
                function totalDue2()
                {
                        var TotalBF = parseInt(document.getElementById("totalBf2").value);
                        var CashP = parseInt(document.getElementById("cashPaid2").value);
                        
                        var ansDue = document.getElementById("totaldue2");
                        ansDue.value = TotalBF - CashP ; 
                }
                function Sim2()
                {
                        var USim = parseInt(document.getElementById("uSimQ2").value);
                        var URate = parseInt(document.getElementById("uSimR2").value);
                        var NSim = parseInt(document.getElementById("nSimQ2").value);
                        var NRate = parseInt(document.getElementById("nSimR2").value);
                        var ansAmount1 = document.getElementById("amount12");
                        ansAmount1.value = USim * URate + NSim * NRate ; 
                }
                function RimAmt2()
                {
                        var Amount1 = parseInt(document.getElementById("amount12").value);
                        var CPaid = parseInt(document.getElementById("cashP2").value);
                        
                        var ansRAmt = document.getElementById("rAmt2");
                        ansRAmt.value = Amount1 - CPaid ; 
                }// modiule 2

                 function totalBalF3()
                {
                        var Old = parseInt(document.getElementById("old3").value);
                        var New = parseInt(document.getElementById("new3").value);
                        var ansTF = document.getElementById("totalBf3");
                        ansTF.value = Old + New;
                }
                function totalDue3()
                {
                        var TotalBF = parseInt(document.getElementById("totalBf3").value);
                        var CashP = parseInt(document.getElementById("cashPaid3").value);
                        
                        var ansDue = document.getElementById("totaldue3");
                        ansDue.value = TotalBF - CashP ; 
                }
                function Sim3()
                {
                        var USim = parseInt(document.getElementById("uSimQ3").value);
                        var URate = parseInt(document.getElementById("uSimR3").value);
                        var NSim = parseInt(document.getElementById("nSimQ3").value);
                        var NRate = parseInt(document.getElementById("nSimR3").value);
                        var ansAmount1 = document.getElementById("amount13");
                        ansAmount1.value = USim * URate + NSim * NRate ; 
                }
                function RimAmt3()
                {
                        var Amount1 = parseInt(document.getElementById("amount13").value);
                        var CPaid = parseInt(document.getElementById("cashP3").value);
                        
                        var ansRAmt = document.getElementById("rAmt3");
                        ansRAmt.value = Amount1 - CPaid ; 
                } /// module 3
                 function totalBalF4()
                {
                        var Old = parseInt(document.getElementById("old4").value);
                        var New = parseInt(document.getElementById("new4").value);
                        var ansTF = document.getElementById("totalBf4");
                        ansTF.value = Old + New;
                }
                function totalDue4()
                {
                        var TotalBF = parseInt(document.getElementById("totalBf4").value);
                        var CashP = parseInt(document.getElementById("cashPaid4").value);
                        
                        var ansDue = document.getElementById("totaldue4");
                        ansDue.value = TotalBF - CashP ; 
                }
                function Sim4()
                {
                        var USim = parseInt(document.getElementById("uSimQ4").value);
                        var URate = parseInt(document.getElementById("uSimR4").value);
                        var NSim = parseInt(document.getElementById("nSimQ4").value);
                        var NRate = parseInt(document.getElementById("nSimR4").value);
                        var ansAmount1 = document.getElementById("amount14");
                        ansAmount1.value = USim * URate + NSim * NRate ; 
                }
                function RimAmt4()
                {
                        var Amount1 = parseInt(document.getElementById("amount14").value);
                        var CPaid = parseInt(document.getElementById("cashP4").value);
                        
                        var ansRAmt = document.getElementById("rAmt4");
                        ansRAmt.value = Amount1 - CPaid ; 
                } /// module 4
                 function totalBalF5()
                {
                        var Old = parseInt(document.getElementById("old5").value);
                        var New = parseInt(document.getElementById("new5").value);
                        var ansTF = document.getElementById("totalBf5");
                        ansTF.value = Old + New;
                }
                function totalDue5()
                {
                        var TotalBF = parseInt(document.getElementById("totalBf5").value);
                        var CashP = parseInt(document.getElementById("cashPaid5").value);
                        
                        var ansDue = document.getElementById("totaldue5");
                        ansDue.value = TotalBF - CashP ; 
                }
                function Sim5()
                {
                        var USim = parseInt(document.getElementById("uSimQ5").value);
                        var URate = parseInt(document.getElementById("uSimR5").value);
                        var NSim = parseInt(document.getElementById("nSimQ5").value);
                        var NRate = parseInt(document.getElementById("nSimR5").value);
                        var ansAmount1 = document.getElementById("amount15");
                        ansAmount1.value = USim * URate + NSim * NRate ; 
                }
                function RimAmt5()
                {
                        var Amount1 = parseInt(document.getElementById("amount15").value);
                        var CPaid = parseInt(document.getElementById("cashP5").value);
                        
                        var ansRAmt = document.getElementById("rAmt5");
                        ansRAmt.value = Amount1 - CPaid ; 
                } /// module 5

  </script>
  </head>

<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Airtel Store</h1>
                    <p>Collection of Easy Recharge,FSE Distributors,Bank Distributors</p>
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
      <li class="nav-item active">
        <a class="navbar-brand" href="FSE-Dis.php"> &nbsp&nbsp&nbsp&nbsp FSE Distributor &nbsp&nbsp&nbsp&nbsp</a>
      </li>
          <li class="nav-item">
        <a class="navbar-brand" href="BankCollect.php"> &nbsp&nbsp&nbsp&nbsp Bank Distributor &nbsp&nbsp&nbsp&nbsp</a>
      </li>
    </ul><li>
        
  </div>  
</nav>

<br><br>
<div class="container">
  <form action="push.php" method="post">
    <div class="row">
      <h2>FSE Distributors</h2>
    </div>
    <br>
    <div class="row">
      <br>
      <div class="row">
      <div class="col-sm-2">
        <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
        <input type="date"  name="date1" >&nbsp&nbsp&nbsp
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h5><b>FSE Distributor 1</b></h5>
        </div>
        <div class="row">
          <input type="text"   placeholder="FSE Distributor Name" name="fsenm1">&nbsp
          <input type="text"  placeholder="FSE Distributor ID" name="fseid1">&nbsp
          <input type="text"  placeholder="Old Balance" id="old1" name="oldbal1">&nbsp
          <input type="text"  placeholder="New Balance" id="new1" name="newbal1">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalBalF1()">TotalCal</a>
        </div>
        <br>
        <div class="row">
          <input type="text"  placeholder="Total Balance" id="totalBf1" name="totalbal1">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashPaid1" name="cashpay1">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalDue1()">DueCal</a>&nbsp
          <input type="text"  placeholder="Total Due" id="totaldue1" name="totaldue1">
        </div>

        <br>
        <div class="row">
          <label><b>USIM</b></label>
          <input type="text"  placeholder="Quantity" id="uSimQ1" name="usimq1">&nbsp
          <input type="text"  placeholder="Rate" id="uSimR1" name="usimr1">&nbsp
          <label><b>Normal Sim</b></label>&nbsp
          <input type="text"  placeholder="Quantity" id="nSimQ1" name="nsimq1">&nbsp
          <input type="text"  placeholder="Rate" id="nSimR1" name="nsimr1">
        </div>
        <br>
        <div class="row">
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="Sim1()">Submit</a>&nbsp
          <input type="text"  placeholder="Amount" id="amount11" name="amount11">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashP1" name="cashp1">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="RimAmt1()">Submit</a>&nbsp
          <input type="text"  placeholder="Remaining Amount" id="rAmt1" name="ramt1">
        </div>
        <br>
        <div class="row">
          <button type="submit" class="btn btn buttonR" name="submit11">Submit</button>&nbsp&nbsp
        </div>
        <br>
      </div>

      <hr>
<!-- ----------------------------------------------------------------- -->
      <br>
      <div class="row">
      <div class="col-sm-2">
        <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
        <input type="date"  name="date2" >&nbsp&nbsp&nbsp
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h5><b>FSE Distributor 2</b></h5>
        </div>
        <div class="row">
          <input type="text"   placeholder="FSE Distributor Name" name="fsenm2">&nbsp
          <input type="text"  placeholder="FSE Distributor ID" name="fseid2">&nbsp
          <input type="text"  placeholder="Old Balance" id="old2" name="oldbal2">&nbsp
          <input type="text"  placeholder="New Balance" id="new2" name="newbal2">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalBalF2()">TotalCal</a>
        </div>
        <br>
        <div class="row">
          <input type="text"  placeholder="Total Balance" id="totalBf2" name="totalbal2">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashPaid2" name="cashpay2">&nbsp
          <a href="javascript: void(0)" class="btn btn-primarys" type="button" onClick="totalDue2()">DueCal</a>&nbsp
          <input type="text"  placeholder="Total Due" id="totaldue2" name="totaldue2">
        </div>

        <br>
        <div class="row">
          <label><b>USIM</b></label>
          <input type="text"  placeholder="Quantity" id="uSimQ2" name="usimq2">&nbsp
          <input type="text"  placeholder="Rate" id="uSimR2" name="usimr2">&nbsp
          <label><b>Normal Sim</b></label>&nbsp
          <input type="text"  placeholder="Quantity" id="nSimQ2" name="nsimq2">&nbsp
          <input type="text"  placeholder="Rate" id="nSimR2" name="nsimr2">
        </div>
        <br>
        <div class="row">
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="Sim2()">Submit</a>&nbsp
          <input type="text"  placeholder="Amount" id="amount12" name="amount12">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashP2" name="cashp2">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="RimAmt2()">Submit</a>&nbsp
          <input type="text"  placeholder="Remaining Amount" id="rAmt2" name="ramt2">
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit12">Submit</button>&nbsp&nbsp
             
        </div>
        <br>
      </div>
<!-- ------------------------------------------------------------ -->
      <div class="row">
      <div class="col-sm-2">
        <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
        <input type="date"  name="date3" >&nbsp&nbsp&nbsp
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h5><b>FSE Distributor 3 </b></h5>
        </div>
        <div class="row">
          <input type="text"   placeholder="FSE Distributor Name" name="fsenm3">&nbsp
          <input type="text"  placeholder="FSE Distributor ID" name="fseid3">&nbsp
          <input type="text"  placeholder="Old Balance" id="old3" name="oldbal3">&nbsp
          <input type="text"  placeholder="New Balance" id="new3" name="newbal3">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalBalF3()">TotalCal</a>
        </div>
        <br>
        <div class="row">
          <input type="text"  placeholder="Total Balance" id="totalBf3" name="totalbal3">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashPaid3" name="cashpay3">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalDue3()">DueCal</a>&nbsp
          <input type="text"  placeholder="Total Due" id="totaldue3" name="totaldue3">
        </div>

        <br>
        <div class="row">
          <label><b>USIM</b></label>
          <input type="text"  placeholder="Quantity" id="uSimQ3" name="usimq3">&nbsp
          <input type="text"  placeholder="Rate" id="uSimR3" name="usimr3">&nbsp
          <label><b>Normal Sim</b></label>&nbsp
          <input type="text"  placeholder="Quantity" id="nSimQ3" name="nsimq3">&nbsp
          <input type="text"  placeholder="Rate" id="nSimR3" name="nsimr3">
        </div>
        <br>
        <div class="row">
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="Sim3()">Submit</a>&nbsp
          <input type="text"  placeholder="Amount" id="amount13" name="amount13">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashP3" name="cashp3">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="RimAmt3()">Submit</a>&nbsp
          <input type="text"  placeholder="Remaining Amount" id="rAmt3" name="ramt3">
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit13">Submit</button>&nbsp&nbsp
        </div>
        <br>
      </div>
    <br>
<!-----------------_________________________-->
    <div class="row">
      <div class="col-sm-2">
        <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
        <input type="date"  name="date4" >&nbsp&nbsp&nbsp
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h5><b>FSE Distributor 4</b></h5>
        </div>
        <div class="row">
          <input type="text"   placeholder="FSE Distributor Name" name="fsenm4">&nbsp
          <input type="text"  placeholder="FSE Distributor ID" name="fseid4">&nbsp
          <input type="text"  placeholder="Old Balance" id="old4" name="oldbal4">&nbsp
          <input type="text"  placeholder="New Balance" id="new4" name="newbal4">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalBalF4()">TotalCal</a>
        </div>
        <br>
        <div class="row">
          <input type="text"  placeholder="Total Balance" id="totalBf4" name="totalbal4">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashPaid4" name="cashpay4">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalDue4()">DueCal</a>&nbsp
          <input type="text"  placeholder="Total Due" id="totaldue4" name="totaldue4">
        </div>

        <br>
        <div class="row">
          <label><b>USIM</b></label>
          <input type="text"  placeholder="Quantity" id="uSimQ4" name="usimq4">&nbsp
          <input type="text"  placeholder="Rate" id="uSimR4" name="usimr4">&nbsp
          <label><b>Normal Sim</b></label>&nbsp
          <input type="text"  placeholder="Quantity" id="nSimQ4" name="nsimq4">&nbsp
          <input type="text"  placeholder="Rate" id="nSimR4" name="nsimr4">
        </div>
        <br>
        <div class="row">
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="Sim4()">Submit</a>&nbsp
          <input type="text"  placeholder="Amount" id="amount14" name="amount14">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashP4" name="cashp4">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="RimAmt4()">Submit</a>&nbsp
          <input type="text"  placeholder="Remaining Amount" id="rAmt4" name="ramt4">
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit14">Submit</button>&nbsp&nbsp
             
        </div>
        <br>
     </div>
    
<!-----------------_________________________-->
        <div class="row">
      <div class="col-sm-2">
        &nbsp&nbsp&nbsp<label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp<br>
        &nbsp&nbsp&nbsp&nbsp&nbsp<input type="date"  name="date5" >&nbsp&nbsp&nbsp
      </div>
      <div class="col-sm-10">
        <div class="row">
          <h5><b>FSE Distributer 5</b></h5>
        </div>
        <div class="row">
          <input type="text"   placeholder="FSE Distributor Name" name="fsenm5">&nbsp
          <input type="text"  placeholder="FSE Distributor ID" name="fseid5">&nbsp
          <input type="text"  placeholder="Old Balance" id="old5" name="oldbal5">&nbsp
          <input type="text"  placeholder="New Balance" id="new5" name="newbal5">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalBalF5()">TotalCal</a>
        </div>
        <br>
        <div class="row">
          <input type="text"  placeholder="Total Balance" id="totalBf5" name="totalbal5">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashPaid5" name="cashpay5">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalDue5()">DueCal</a>&nbsp
          <input type="text"  placeholder="Total Due" id="totaldue5" name="totaldue5">
        </div>

        <br>
        <div class="row">
          <label><b>USIM</b></label>
          <input type="text"  placeholder="Quantity" id="uSimQ5" name="usimq5">&nbsp
          <input type="text"  placeholder="Rate" id="uSimR5" name="usimr5">&nbsp
          <label><b>Normal Sim</b></label>&nbsp
          <input type="text"  placeholder="Quantity" id="nSimQ5" name="nsimq5">&nbsp
          <input type="text"  placeholder="Rate" id="nSimR5" name="nsimr5">
        </div>
        <br>
        <div class="row">
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="Sim5()">Submit</a>&nbsp
          <input type="text"  placeholder="Amount" id="amount15" name="amount15">&nbsp
          <input type="text"  placeholder="Cash Paid" id="cashP5" name="cashp5">&nbsp
          <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="RimAmt5()">Submit</a>&nbsp
          <input type="text"  placeholder="Remaining Amount" id="rAmt5" name="ramt5">
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit15">Submit</button>&nbsp&nbsp
             
        </div>
        <br>
      </div>
      <!----------------------------------->
      <div class="col-sm-12" style="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="submit" class="btn btn buttonR" name="submit16">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Submit
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </button>&nbsp&nbsp
        <button type="submit" class="btn btn-link btn-info" name="export_excel5" formaction="/Exceldownload.php">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            FSE Distributors Excel Download
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </button>

      </div>
    </div>
  </form>
</div>





</body>
</html>
