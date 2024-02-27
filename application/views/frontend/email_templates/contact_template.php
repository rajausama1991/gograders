<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title><?= $name ?> wants to Connect with You</title>
</head>
<body style="margin:0px; background: #f8f8f8; ">
<div width="100%"
	 style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
	<div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">

		<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
			<tbody>
			<tr>
				<td style="background:#00c0c8; padding:20px; color:#fff; text-align:center;">
				Requested By <?= $name ?> </td>
			</tr>
			</tbody>
		</table>
		<div style="padding: 40px; background: #fff;">
			<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
				<tbody>
				<tr>
					<?php
					$Date = date("F-d-y");
					?>
					<td><b><?= $name ?></b>
						<!-- <p style="margin-top:0px;">Invoice #52342</p> -->
					</td>
					<td align="right" width="100"> <?= $Date ?> </td>
				</tr>
				<tr>
					<td colspan="2" style="padding:20px 0; border-top:1px solid #f6f6f6;">
						<div>
							<table width="100%" cellpadding="0" cellspacing="0">
								<tbody>
								<tr>
									<td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;">
										Email
									</td>
									<td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;"
										align="right"><?= $email ?></td>
								</tr>
								<tr>
									<td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;">
										Phone
									</td>
									<td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;"
										align="right"><?= $phone ?></td>
								</tr>

								</tbody>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
						<b>(<?= $subject ?>)</b>
						</center>

						<center>
						<p><?= $message ?></p>
						</center>

						<b>- Thanks (gograders.com)</b></td>
				</tr>
				</tbody>
			</table>
		</div>
		<div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
			<p> Powered by gograders.com <br>

		</div>
	</div>
</div>
</body>
</html>
