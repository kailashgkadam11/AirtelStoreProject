

 
  <!DOCTYPE html>
  <html>
  <head>
  <title>Easy recharge</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
html { font-size:100%; }

img { max-width: 100%; height: auto; }
.row-header {
  margin: 0px auto;
  padding: 0px 0px; 
    
}

.jumbotron {
  margin: 0px auto;
  padding: 70px 30px;
  /*background: #9575CD;*/
  color: floralwhite; 
  background-image: url("bg1.jpg");
  background-repeat:no-repeat;
}

* {
  box-sizing: border-box;
}

div::after{

  content: "";
  /*background-color:#6D7993 ;#ab5e32*/
    opacity: 0.1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;

}
body {
  /*background-color:#E7717D; #f1f1f1*/
  padding: 20px;
  font-family: Arial;
  padding: 50px 0px 0px 0px;
  z-index: 0;
}
.bg {
 
 /*background-color:#D1E8E2;*/
 background-image: url("bg1.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.buttonR {background-color: #f44336;} /* Red */ 

.box
{
    margin: 0px auto;
  padding: 70px 30px;
  width: 1200px;
  height: 300px;
/*  padding: 20px;
  margin: 10px auto;*/
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
 /* background-color: #B1A296;  background-image: url(bg61.jpg);*/
  background-size: cover; 
  background-image: url("bg1.jpg");
}

.box2
{
  width: 1200px;
  height: 250px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
  /*background-color: #B1A296;*/
  background-size: cover; 
  background-image: url("bg1.jpg");
}

.box3
{
  width: 1200px;
  height: 400px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
 /* background-color: #B1A296;*/
  background-size: cover; 
  background-image: url("bg1.jpg");
}

.box4
{
  width: 1200px;
  height: 400px;
  padding: 20px;
  margin: 10px auto;
  box-shadow: 0px 0px 10px 2px grey;
  border: 5px solid grey;
  /*background-color: #B1A296;*/
  background-size: cover; 
  background-image: url("bg1.jpg");
}
</style>

  <script language="javascript">
      function totalBal()
      {
          var exit = parseInt(document.getElementById("ExitBal").value);
          var add = parseInt(document.getElementById("AddBal").value);
          var ansT = document.getElementById("totalB");
          ansT.value = exit + add;
      }
      
      function RTBal()
      {
      	var total = parseInt(document.getElementById("totalB").value);
      	var Amount = parseInt(document.getElementById("amount").value);
      	var Otf = parseInt(document.getElementById("otf").value);
      	var ansRT = document.getElementById("rtbal");
          ansRT.value = total - Amount + Otf; 
      }
      
    //   function sum()
      {
        var Amount1 = parseInt(document.getElementById("swapamt").value);
        var Total1 = parseInt(document.getElementById("totalswap").value);
        var Amount2 = parseInt(document.getElementById("fourgamt").value);
        var Total2 = parseInt(document.getElementById("totalfg").value);  
        var Amount3 = parseInt(document.getElementById("ostamt").value);
        var Total3 = parseInt(document.getElementById("totalost").value);
        var Amount4 = parseInt(document.getElementById("examt").value);
        var Total4 = parseInt(document.getElementById("totalex").value);
        var ansTotalcol = document.getElementById("totalcollection");
        ansTotalcol.value = (Swapamt||Totalswap) + (Fourgamt||Totalfg) + (Ostamt||Totalost) - (Examt||Totalex);
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

<body class="bg container">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="Welcome.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Home &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="navbar-brand " href="easyRecharge.php">&nbsp&nbsp&nbsp&nbsp Easy Recharge &nbsp&nbsp&nbsp&nbsp</a>
      </li>
      <li class="nav-item" >
        <a class="navbar-brand" href="FSE-Dis.php"> &nbsp&nbsp&nbsp&nbsp FSE Distributor &nbsp&nbsp&nbsp&nbsp</a>
      </li>
          <li class="nav-item">
        <a class="navbar-brand" href="BankCollect.php"> &nbsp&nbsp&nbsp&nbsp Bank Distributor &nbsp&nbsp&nbsp&nbsp</a>
      </li>
    </ul><li>
        
  </div>  
</nav>

  <br>
  <div class="container box">
    <form action="push.php" method="post">
      <div class="row">
        <h2>Easy Recharge</h2>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
          <input type="date"  name="date" required>&nbsp&nbsp&nbsp
        </div>
        <div class="col-sm-9">
          <div class="row">
            <input type="text"  name="ebal" id="ExitBal" placeholder="Existing Balance">&nbsp
            <input type="text" class="" id="AddBal" name="abal" placeholder="Add Balance">&nbsp
            <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="totalBal()">Total Balance</a>&nbsp
            <input type="text"  id="totalB" name="totalBal" >
          </div>
          <br>
          <div class="row">
            <input type="text"  name="cno" placeholder="Customer Number">&nbsp
            <input type="text" id="amount" name="amount" placeholder="Amount">&nbsp
            <input type="text"  id="otf" name="otf" placeholder="OTF">&nbsp
            <a href="javascript: void(0)" class="btn btn-primary" type="button" onClick="RTBal()">&nbsp&nbsp&nbsp&nbsp&nbspSubmit&nbsp&nbsp&nbsp&nbsp&nbsp</a>
          </div>
          <br>
          <div class="row">
            <label for="rtbal"><b>R T Balance</b></label>&nbsp
            <input type="text" name="rtbal" id="rtbal">&nbsp
            <!--<button type="submit" class="btn btn-outline-primary" name="edit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Edit &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>&nbsp-->
            <button type="submit" class="btn btn buttonR" name="submit1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Submit &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>&nbsp
            <button type="submit" class="btn btn-link btn-info" name="export_excel1" formaction="/Exceldownload.php">&nbsp&nbsp&nbsp&nbsp&nbsp Excel Download &nbsp&nbsp&nbsp&nbsp&nbsp</button>
          </div>
        </div>
        <div class="col-sm-3">
         
        </div>
      </div>
      <hr>
    </form>
  </div>
  <dir class="container box2">
    <form action="push.php" method="post">
      <div class="row">
        <h2>Sim Cards</h2>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
          <input type="date"  name="date" required>&nbsp&nbsp&nbsp
        </div>
        <div class="col-sm-10">
          <div class="row">
            <label ><b>New Sim</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text"  name="newcno" placeholder="Customer Number" >&nbsp
            <input type="text"  name="newcnm" placeholder="Customer Name">&nbsp
            <a href="new_sim.php" type="submit" class="btn btn-primary" name="submit">&nbsp&nbsp&nbsp&nbsp&nbsp Multi &nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <button type="submit" class="btn btn-primary" name="submit2">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    
                Submit
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    
            </button>
          </div>
          <br>
          <div class="row">
            <label><b>MNP </b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text"  name="mnpcno" placeholder="Customer Number">&nbsp
            <input type="text"  name="mnpcnm" placeholder="Customer Name">&nbsp
            <a href="mnp.php" type="submit" class="btn btn-primary" name="submit">&nbsp&nbsp&nbsp&nbsp Multi &nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp
            <button type="submit" class="btn btn-primary" name="submit3"> 
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Submit
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </button>
          </div><br>
          <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit22">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Submit
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="submit" class="btn btn-link btn-info" name="export_excel2" formaction="/Exceldownload.php">Excel Download</button>
          </div>
        </div>
      </div>
      <hr>
    </form>
  </dir>
  <dir class="container box3">
    <form action="push.php" method="post">
      <div class="row">
        <h2>Sim Swap</h2>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
          <input type="date"  name="date" required>&nbsp&nbsp&nbsp
        </div>
        <div class="col-sm-10">
          <div class="row">
            <label><b>Sim Swap</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text"  name="swapno" placeholder="Number">&nbsp
            <input type="text"  name="swapamt" placeholder="Amount">&nbsp
            <a href="sim_swap.php" type="submit" class="btn btn-primary" name="submit">Multi</a>&nbsp
            <input type="text"   placeholder="total swap amount ">&nbsp
            <button type="submit" class="btn btn-primary" name="submit81">Submit</button>
          </div>
          <br>
          <div class="row">
            <label><b>4G</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text"  name="fourgno" placeholder="Number" >&nbsp
            <input type="text"  name="fourgamt" placeholder="Amount" >&nbsp
            <a href="4G.php" type="submit" class="btn btn-primary" name="submit">Multi</a>&nbsp
            <input type="text" placeholder="total 4g amount" >&nbsp
            <button type="submit" class="btn btn-primary" name="submit82">Submit</button>
          </div>
          <br>
          <div class="row">
            <label><b>Other Source profit</b></label>&nbsp&nbsp&nbsp
            <input type="text"  name="ostno" placeholder="Number">&nbsp
            <input type="text"  name="ostamt" placeholder="Amount">&nbsp
            <a href="other_source.php" type="submit" class="btn btn-primary" name="submit">Multi</a>&nbsp
            <input type="text" placeholder="total OST amount"  >&nbsp
            <button type="submit" class="btn btn-primary" name="submit83">Submit</button>
          </div>
          <br>
          <div class="row">
            <label><b>Expenses</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text"  name="examt" placeholder="Amount">&nbsp
            <input type="text"  name="exremark" placeholder="Remark">&nbsp
            <a href="expenses.php" type="submit" class="btn btn-primary" name="submit">Multi</a>&nbsp
            <input type="text" placeholder="total Ex amount"  >&nbsp
            <button type="submit" class="btn btn-primary" name="submit84">Submit</button>
          </div>
          <br>
          <!--<div class="row">-->
          <!--  <label><b>Total Collection</b></label>&nbsp-->
          <!--  <a href="javascript: void(0)" type="submit" class="btn btn-primary" onclick="sum()">Total</a>&nbsp-->
          <!--  <input type="text"  name="newcnm" >-->
          <!--</div><br>-->
          <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit23">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp   
                Submit
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp   
            </button>&nbsp&nbsp
            <button type="submit" class="btn btn-link btn-info" name="export_excel3" formaction="/Exceldownload.php">Excel Download</button>
          </div>
        </div>
      </div>
      <br>
      <hr>
    </form>
  </dir>
  <dir class="container box4">
    <form action="push.php" method="post">
      <div class="row">
        <h2>Airtel Payment Bank</h2>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <label for="date"><b>Date</b></label>&nbsp&nbsp&nbsp
          <input type="date"  name="date" required>&nbsp&nbsp&nbsp
        </div>
        <div class="col-sm-10">
          <div class="row">
            <label><b></b></label>
          </div>
          <div class="row">
            <input type="text" placeholder="openning Balanace" name="openbal" >&nbsp
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp
            <input type="text" placeholder="Add Balanace" name="addbal" >&nbsp
            <!--<button type="submit" class="btn btn-primary" name="submit">Update</button>&nbsp-->
          </div>
          <br>
          <div class="row">
            <label><b>Cash Transfer</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text"  name="cashtno" placeholder="Number">&nbsp
            <input type="text"  name="cashtamt"  placeholder="amount">&nbsp
            <a href="cash_transfer.php" type="submit" class="btn btn-primary" name="submit">Multi</a>&nbsp
            <input type="text" placeholder="total amount"  >&nbsp
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp
          </div>
          <br>
          <div class="row">
            <label><b>Cash Withdraw</b></label>&nbsp&nbsp&nbsp
            <input type="text"  name="cashwno" placeholder="Number" >&nbsp
            <input type="text"  name="cashwamt" placeholder="amount">&nbsp
            <a href="cash_withdraw.php" type="submit" class="btn btn-primary" name="submit">Multi</a>&nbsp
            <input type="text"  placeholder="total amount" >&nbsp
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp
          </div><br>
          <div class="row">
            <label><b>Closing Balance</b></label>&nbsp&nbsp
            <input type="text"  name="cbal" required>&nbsp&nbsp&nbsp
          </div><br>
          <div class="row">
            <button type="submit" class="btn btn buttonR" name="submit20">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    
                Submit
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    
                </button>&nbsp
            <button type="submit" class="btn btn-link btn-info" name="export_excel4" formaction="/Exceldownload.php">Excel Download</button>
          </div>
        </div>
    </form>
  </div>

      
      

  </body>
  </html>