
<!DOCTYPE html>
<html>
<head>
	<title>StoreCollection</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style>
* {
  box-sizing: border-box;
}
.row-header {
  margin: 0px auto;
  padding: 0px 0px; 
    
}

.jumbotron {
  margin: 0px auto;
  padding: 70px 30px;
  background: #9575CD;
  color: floralwhite; 
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
  background-color: #f1f1f1;
  
padding: 50px 0px 0px 0px;
  z-index: 0;
  font-family: Arial;
}
.buttonR {background-color: #f44336;} /* Red */ 
.bg {
 background-color:#ac8d9a;
  /*background-image: url("bg8.jpg");*/
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
  border: 5px solid blue;
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
  border: 5px solid blue;
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
  border: 5px solid blue;
  background-image: url(bg2.jpg);
  background-size: cover; 
}


.blue-square-container{
  text-align: center;
}

div.blocktext{
  margin-right: auto;
  margin-left: auto;
  width: 8em;
}


div::after{

  content: "";
  background: url(o.jpg);
  opacity: 0.10;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;
}

.grid-container{
  display: grid;
  justify-content: space-between;
}


 </style>
  <script language="javascript">

  function totalbal() {

    var one= parseInt(document.getElementById("one").value);
    var two= parseInt(document.getElementById("two").value);
    var three= parseInt(document.getElementById("three").value);
    var four= parseInt(document.getElementById("four").value);
   
    var total1= document.getElementById("total")
    total1.value= one + two + three + four;
    // body...
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
        <a class="navbar-brand" href="FSE-Dis.php"> &nbsp&nbsp&nbsp&nbsp FSE Distributer &nbsp&nbsp&nbsp&nbsp</a>
      </li>
          <li class="nav-item">
        <a class="navbar-brand" href="BankCollect.php"> &nbsp&nbsp&nbsp&nbsp Bank Distributer &nbsp&nbsp&nbsp&nbsp</a>
      </li>
    </ul><li>
        
  </div>  
</nav>

<div class="container" >
  <form action="push_dist.php" method="post">
  

 <div class="row"  >
      <div class="col-sm-3 "    >
        <label for="date" style="margin-left: 250px;" ><b>Date</b></label>
        <input type="date" style="margin-left: 250px;"  name="date">&nbsp&nbsp&nbsp
    </div>
    </div>
      <br>

      <div class="col-sm-8"   >
          
        <div class="row" style="margin-left: 250px;" >
          <input type="text"  name="number1" placeholder="Bank name" id="one" >&nbsp
          <input type="text"  name="ammount1" placeholder="remark"  >
      </div>
  
        </div>   
        <br>


         <div class="col-sm-8"  >
          
        <div class="row" style="margin-left:250px;">
          <input type="text"  name="number2" placeholder="Bank name" id="two">&nbsp
          <input type="text"  name="ammount2" placeholder="remark" >
          </div>
        
      </div>
      <br>



       <div class="col-sm-8"  >
          
        <div class="row" style="margin-left:250px;">
          <input type="text"  name="number3" id="three" placeholder="Bank name">&nbsp
          <input type="text"  name="ammount3" placeholder="remark" >
      
  </div>

        </div>   
        <br>






         <div class="col-sm-8"  >
          
        <div class="row" style="margin-left:250px;">
          <input type="text"  name="number4" placeholder="Bank name" id="four">&nbsp
          <input type="text"  name="ammount4" placeholder="remark">
      
        </div>
      

        <br>



        

<!--
  <div class="row"> 
    <div class="col-sm-6" style="margin-left:250px;" >
      <div class="container-mt-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <a href="javascript:void(0)" class="btn btn-primary" type="button" onclick="totalbal()">TOTAL</a>          
            </div>
            <input type="text" class="form-control" placeholder="total " id="total">
          </div>
      </div>
    </div>
  </div>
-->

           
    
      <div class="row">
        <div class="col-sm-10" style="margin-left:250px;">
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <button type="submit" class="btn btn-success" name="submit126"> Submit</button>
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <button type="submit" class="btn btn-link" name="export_excel19"  style="color:black" formaction="/Exceldownload.php"><b>Excel Download</b></button>
        </div>
        </div>   
        




  </div>
</form>
</div>
  
</body>
</html>