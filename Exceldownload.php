<?php 
$con=mysqli_connect('localhost','id12710932_kailash1','kailash');
mysqli_select_db($con, "id12710932_db1");
$output = ' ' ;

if (isset($_POST["export_excel1"])) 
{
	
	$sql = "SELECT * FROM easyrecharge ";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Existing Balance</th>
				<th>Available Balance</th>
				<th>Total Balance</th>
				<th>Customer number</th>
				<th> Amount</th>
				<th>OTF</th>
				<th>Remaining balance</th>
			</tr>

		';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['ebal'].'</td>
				<td>'.$row['abal'].'</td>
				<td>'.$row['tbal'].'</td>
				<td>'.$row['cno'].'</td>
				<td>'.$row['amount'].'</td>
				<td>'.$row['otf'].'</td>
				<td>'.$row['rtbal'].'</td>
			</tr>	
			';
	}
			
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		
    header("Content-Type: text/csv");
	header('Content-Disposition: attachment; filename="easyrecharge.xls"');
	print $output;
}

if(isset($_POST["export_excel2"]))
{
    $sql = "SELECT * FROM simcards ";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Customer Name</th>
				<th>MNP Customer Number</th>
				<th>MNP Customer Name</th>
				
			</tr>

		';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['ndt'].'</td>
				<td>'.$row['new_number'].'</td>
				<td>'.$row['new_name'].'</td>
				<td>'.$row['mnp_number'].'</td>
				<td>'.$row['mnp_name'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['ndt'].'</td> ';
		$output .='</table>';
		

		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="simcard.xls"');
	    print $output;
}


if(isset($_POST["export_excel3"]))
{
    $sql = "SELECT * FROM simswaps ";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Amount </th>
				<th>Customer Number</th>
				<th>Amount</th>
				<th>Other profit</th>
			    <th>Amount</th>
			    <th>Expenses</th>
			    <th>Remark</th>
			 </tr>

		';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['swap_number'].'</td>
				<td>'.$row['swap_amount'].'</td>
				<td>'.$row['fourg_number'].'</td>
				<td>'.$row['fourg_amount'].'</td>
				<td>'.$row['ost_number'].'</td>
			    <td>'.$row['ost_amount'].'</td>
			    <td>'.$row['ex_amount'].'</td>
			    <td>'.$row['ex_remark'].'</td>
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="simswap.xls"');
	    print $output;
}

if(isset($_POST["export_excel4"]))
{
    $sql = "SELECT * FROM  paybank";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Opening Balance</th>
				<th>Add balance</th>
				<th>Cash transfer number</th>
				<th>Transfered amount</th>
				<th>Cash withdraw number</th>
				<th>Amount</th>
			</tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['openbal'].'</td>
				<td>'.$row['addbal'].'</td>
				<td>'.$row['cashtno'].'</td>
				<td>'.$row['cashtamt'].'</td>
				<td>'.$row['cashwno'].'</td>
				<td>'.$row['cashwamt'].'</td>
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="Airtelpayment.xls"');
	    print $output;
}


if(isset($_POST["export_excel5"]))
{
    $sql = "SELECT * FROM  fsedis";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Name</th>
				<th>Id</th>
				<th>Old balance</th>
				<th>New balance</th>
				<th>Total balance</th>
				<th>Paid cash</th>
				<th>Total due</th>
				<th>USIM quantity</th>
			    <th>Rate</th>
			    <th>Normal SIM quantity</th>
			    <th>Rate</th>
			    <th>Amount</th>
			    <th>Cash paid</th>
			    <th>Reamining amount</th>
			</tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['fsenm'].'</td>
				<td>'.$row['fseid'].'</td>
				<td>'.$row['oldbal'].'</td>
				<td>'.$row['newbal'].'</td>
				<td>'.$row['totalbal'].'</td>
				<td>'.$row['cashpay'].'</td>
				<td>'.$row['totaldue'].'</td>
				<td>'.$row['usimq'].'</td>
				<td>'.$row['usimr'].'</td>
				<td>'.$row['nsimq'].'</td>
			    <td>'.$row['nsimr'].'</td>
			    <td>'.$row['amount1'].'</td>
			    <td>'.$row['cashp'].'</td>
			    <td>'.$row['ramt'].'</td>
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="FSE.xls"');
	    print $output;
}

if(isset($_POST["export_excel6"]))
{
    $sql = "SELECT * FROM  totalcollection";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>FSE collection</th>
				<th>SIM card amount</th>
				<th>Additional amount</th>
				<th>Remark</th>
				<th>Debit</th>
				<th>Reamrk</th>
				<th>Bank name</th>
				<th>Remark</th>
				<th>Remaining balance</th>
			</tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt3'].'</td>
				<td>'.$row['fsecollect'].'</td>
				<td>'.$row['simamt'].'</td>
				<td>'.$row['addamt'].'</td>
				<td>'.$row['rem1'].'</td>
				<td>'.$row['debit'].'</td>
				<td>'.$row['rem2'].'</td>
				<td>'.$row['bname'].'</td>
				<td>'.$row['rem3'].'</td>
				<td>'.$row['rembal'].'</td>
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt3'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="Collection.xls"');
	    print $output;
}

if(isset($_POST["export_excel7"]))
{
    $sql = "SELECT * FROM  bankdetails";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Bank name</th>
				<th>Available balance</th>
				<th>Deposit</th>
				<th>Remark</th>
				<th>Debit</th>
				<th>Reamrk</th>
				<th>NEFT</th>
				<th>Remark</th>
			</tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['banknm'].'</td>
				<td>'.$row['avlbal'].'</td>
				<td>'.$row['deposit'].'</td>
				<td>'.$row['remark1'].'</td>
				<td>'.$row['debit'].'</td>
				<td>'.$row['remark2'].'</td>
				<td>'.$row['neft'].'</td>
				<td>'.$row['remark3'].'</td>
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="Bankdetail.xls"');
	    print $output;
}


if(isset($_POST["export_excel8"]))
{
    $sql = "SELECT * FROM  bankpayment";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Available balance</th>
				<th>Billing amount</th>
				<th>Account 1</th>
				<th>Account 2</th>
				<th>Reatil amount</th>
				<th>Reamrk</th>
			</tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt4'].'</td>
				<td>'.$row['avlbal'].'</td>
				<td>'.$row['billamt'].'</td>
				<td>'.$row['a1amt'].'</td>
				<td>'.$row['a2amt'].'</td>
				<td>'.$row['retailamt'].'</td>
				<td>'.$row['remark'].'</td>
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt4'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="Bankpayment.xls"');
	    print $output;
}

//multi pages

if(isset($_POST["export_excel9"]))
{
    $sql = "SELECT * FROM  simcard";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Customer Name</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['ndt'].'</td>
				<td>'.$row['new_number'].'</td>
				<td>'.$row['new_name'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="newsim.xls"');
	    print $output;
}

if(isset($_POST["export_excel10"]))
{
    $sql = "SELECT * FROM  simswap";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Amount</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['swap_number'].'</td>
				<td>'.$row['swap_amount'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="swapsim.xls"');
	    print $output;
}

if(isset($_POST["export_excel12"]))
{
    $sql = "SELECT * FROM  fourg";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Amount</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['fourg_number'].'</td>
				<td>'.$row['fourg_amount'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="4g.xls"');
	    print $output;
}


if(isset($_POST["export_excel13"]))
{
    $sql = "SELECT * FROM  simswap";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Amount</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['swap_number'].'</td>
				<td>'.$row['swap_amount'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="otherprofit.xls"');
	    print $output;
}
 
 
if(isset($_POST["export_excel14"]))
{
    $sql = "SELECT * FROM expense";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['dt'].'</td>
				<td>'.$row['ex_amount'].'</td>
				<td>'.$row['ex_remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['dt'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="expenses.xls"');
	    print $output;
}
 
 
if(isset($_POST["export_excel15"]))
{
    $sql = "SELECT * FROM  bank1";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Amount</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['number'].'</td>
				<td>'.$row['amount'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="cashtransfer.xls"');
	    print $output;
}


if(isset($_POST["export_excel16"]))
{
    $sql = "SELECT * FROM  cashwithdraw";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Customer Number</th>
				<th>Amount</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['number'].'</td>
				<td>'.$row['amount'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="cashwithdraw.xls"');
	    print $output;
}




if(isset($_POST["export_excel17"]))
{
    $sql = "SELECT * FROM  additional";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Additional amount</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['amount'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="additional.xls"');
	    print $output;
}




if(isset($_POST["export_excel18"]))
{
    $sql = "SELECT * FROM  debit";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Debit amount</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['ammount'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="debit.xls"');
	    print $output;
}

if(isset($_POST["export_excel19"]))
{
    $sql = "SELECT * FROM  bank";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Bank Name</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['bankname'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="bank.xls"');
	    print $output;
}


if(isset($_POST["export_excel20"]))
{
    $sql = "SELECT * FROM  deposite";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['amount'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="deposit.xls"');
	    print $output;
}

if(isset($_POST["export_excel21"]))
{
    $sql = "SELECT * FROM  debit2";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['amount'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="bank_debit.xls"');
	    print $output;
}


if(isset($_POST["export_excel22"]))
{
    $sql = "SELECT * FROM  neft";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['amount'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="bank_NEFT.xls"');
	    print $output;
}



if(isset($_POST["export_excel23"]))
{
    $sql = "SELECT * FROM  retail";
	$result = mysqli_query($con,$sql);
	
		$output .= '
			<table class="table" borderd="5" text-align:"center">
			<tr>
				<th>Date</th>
				<th>Retail</th>
				<th>Remark</th>
		    </tr>
			';
	while ($row = mysqli_fetch_array($result)) 
	{
		$output .='
			<tr>
				<td>'.$row['date'].'</td>
				<td>'.$row['retail'].'</td>
				<td>'.$row['remark'].'</td>
				
			</tr>	
			';
	}
			
		$output .=' <td>'.$row['date'].'</td> ';
		$output .='</table>';
		header("Content-Type: text/csv");
		header('Content-Disposition: attachment; filename="retail.xls"');
	    print $output;
}

?>			