<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url(''); ?>assets/front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<style type="text/css">
		.logo {
			padding: 15px 20px;
			/*background: #212529;*/
			color: #fff;
		}
		.title {
			padding: 15px 0;
		}
		.custom-table {
			border-collapse:
			collapse;
			width:100%;
			border-top:1px solid #dddddd;
			border-left:1px solid #dddddd;
			margin-bottom:20px;
		}
		.custom-table thead tr td {
			font-size:12px;
			border-right:1px solid #dddddd;
			border-bottom:1px solid #dddddd;
			background-color:#efefef;
			font-weight:bold;
			text-align:left;
			padding:7px;
			color:#222222;
		}
		.custom-table tbody tr td {
			font-size:12px;
			border-right:1px solid #dddddd;
			border-bottom:1px solid #dddddd;
			text-align:left;
			padding:7px;
		}
		.custom-table tfoot tr td {
			font-size:12px;
			border-right:1px solid #dddddd;
			border-bottom:1px solid #dddddd;
			text-align:left;
			padding:7px;
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="padding: 0;">
		<div class="logo">
			<img style="border-width: 0" src="<?php echo base_url('assets/front/images/') ?>logo.png" height="50" alt="Booming Logo" title="Booming Logo" style="display:block;">
			<!-- <h2>Insurance Company</h2> -->
		</div>
	</div>
	<div class="container-fluid">
		<div class="title">
			<p style="margin: 0;">Welcome! <br> <pre>You are now part of the blooming dales nursery family. 
Kindly fill-out the following forms and slide them down our blue mailbox located at the front of our school building in dasma, facing the highway. 
Thank you.
<a href="<?php echo base_url('assets/front/files/') ?>Registration.pdf">Registeration form</a>

</pre></p>
		</div>
		<div class="table">
			<table class="custom-table">
				<thead>
				  <tr>
				    <td  colspan="2">Booking Details</td>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td>
				      <b>Date Added:</b> <?php echo date('Y-m-d'); ?><br>
				      <b>Payment Method:</b> KNET
				     </td>
				    <td><b>E-mail:</b> <a href="#"><?=$email ?></a>
				    <br>
				      <b>Telephone:</b> <?=$phone ?><br>
				      <b>Order Status:</b> Confirmed</td>
				  </tr>
				</tbody>
			</table>
		
			<!--<table class="custom-table">-->
			<!--    <thead>-->
			<!--      <tr>-->
			<!--        <td >Name</td>-->
			<!--        <td>Student Type</td>-->
			<!--        <td style="text-align: right;" colspan="2">Price</td>-->
			        <!--<td style="text-align: right;">Years</td>-->
			<!--        <td style="text-align: right;">Total</td>-->
			<!--      </tr>-->
			<!--    </thead>-->
			<!--    <tbody>-->
			<!--        <tr>-->
			<!--	      <td><?=$name ?></td>      -->
			<!--	      <td ><?=$student_type ?></td>-->
			<!--	      <td style="text-align: right;" colspan="2"><?=$price ?></td>-->
				      <!--<td style="text-align: right;">3 Year</td>-->
			<!--	      <td style="text-align: right;"><?=$price ?></td>-->
			<!--    	</tr>-->
			    	
			<!--    </tbody>-->
			  
   <!-- 		</table>-->
	    	
	    	<table class="custom-table">
			    <thead>
			      <tr>
			        <td >Name</td>
			        
			        <td style="text-align: right;" > Student Type</td>
			        <td style="text-align: right;" > Price</td>
			        <td style="text-align: right;">Total</td>
			      </tr>
			    </thead>
			    <tbody>
			        <tr>
				      <td><?=$name ?></td> 
				      <td><?=$student_type ?></td>
				      <td style="text-align: right;">
				          <?=$price ?>
				          </td>
				         
				      <td style="text-align: right;"><?=$price ?></td>
			    	</tr>
			    	
			    </tbody>
			    <tfoot>
                    <tr>
                        <td colspan="3" style="text-align: right;"><strong>Total</strong></td>
                        <td style="text-align: right;"><?=$price ?></td>
                    </tr>
			        
			    </tfoot>
    		</table>
	    
		</div>
	</div>
</body>
</html>