<?php
$web_name = explode(".", $data->domain_name);
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">

  <style>
    body {
      font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
    }

    .big-txt {
      text-align: center;
      font-size: 28px;
      font-weight: 600;
    }

    .ep-1 {
      padding: 30px;
    }

    .content-txt {
      color: #8A8A8A;
      padding: 50px 100px;
    }

    .content-txt span {
      color: #ed2354;
    }

    .con-em {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .con-em a {
      color: #ffffff;
      background: #2dc1dd;
      padding: 15px 50px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: 600;
    }

    .con-em a:hover {
      background: #51cee6;
      text-decoration: none;
    }

    .nav-lnk {
      margin-top: 20px;
    }

    .nav-lnk,
    .nav-lnk a {
      color: #2dc1dd;
    }

    .center {
      text-align: center;
    }

    .ord-pl {
      color: #ed2354;
      font-size: 30px;
      font-weight: 600;
    }

    .sml-txt {
      font-size: 12px;
      text-align: center;
      color: #787878;
    }

    input[type=radio] {
      position: absolute;
      visibility: hidden;
      display: none;
    }

    label {
      color: #444444;
      display: inline-block;
      cursor: pointer;
      padding: 5px 20px;
      font-size: 14px;
      margin-bottom: 0px;
      width: 33.333333333333%;

    }

    input[type=radio]:checked+label {
      color: #000;
      background: #f4fbff;
      border: #2f8bc0 1px solid;
    }

    label+input[type=radio]+label {
      border-left: solid 1px #ebebeb;
    }

    .radio-group {
      display: inline-block;
      border-radius: 4px;
      overflow: hidden;
      width: 100%;
    }

    .radio-group label {
      margin-top: 0px !important;
      padding: 7px;
      text-align: center;
    }

    .aa label {
      width: 19%;
      font-size: 11px;
      padding: 11px 0px;
    }
  </style>

</head>

<body>

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td width="16%" height="82" bgcolor="#ED2354">&nbsp;</td>
        <td width="68%" bgcolor="#ED2354">&nbsp;</td>
        <td width="16%" bgcolor="#ED2354">&nbsp;</td>
      </tr>
      <tr>
        <td height="174" bgcolor="#ED2354">&nbsp;</td>
        <td rowspan="2" align="center" valign="top" class="ep-1">

          <div class="content-txt">

            <div class="ord-pl">Your Order has been placed!!</div>

            <p>Hi <?= $data->user_name ?>,</p>

            <p>Thank you for your Order!</p>

            <p>We're really happy you've chosen <?= ucfirst($web_name[0]) ?> to help you. Your order ID is <strong><?= $data->order_from ?>-<?=
                                                                                                                                            $data->order_id ?></strong>. You can check your order status here.</p>

            <div class="con-em"><a href="<?= $data->domain_name ?>/login">Login</a></div>

            <p>We've included a copy of your order details below, as you originally entered them, in case you need to check anything.</p>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td width="46%" height="40" valign="middle"><strong>Price:</strong></td>
                  <td width="54%" align="right" valign="middle"><?=
                                                                $data->quoted_price . ' (' . (($data->payment_type == 0) ? 'Half' : 'Full') . ')' ?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle"><strong>Document Type:</strong></td>
                  <td align="right" valign="middle"><?=
                                                    $data->document_type ?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle"><strong>Academic Level:</strong></td>
                  <td align="right" valign="middle"><?=
                                                    $data->academic_level ?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle"><strong>Pages:</strong></td>
                  <td align="right" valign="middle"><?=
                                                    $data->no_of_pages ?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle"><strong>Deadline:</strong></td>
                  <td align="right" valign="middle"><?= $data->due_date ?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle"><strong>Subject:</strong></td>
                  <td align="right" valign="middle"><?=
                                                    $data->subject ?></td>
                </tr>
                <tr>
                  <td height="40" valign="top"><strong>Description:</strong></td>
                  <td align="right" valign="middle"><?=
                                                    $data->description ?></td>
                </tr>
              </tbody>
            </table>


            <p>If you face any trouble, feel free to contact us 24 / 7 via <a href="<?= $data->domain_name ?>" target="_blank" class="nav-lnk">Live Chat</a></p>

            <p>Thank you for your cooperation.</p>

            <p><strong>Best Regards</strong></p>

          </div>

        </td>
        <td bgcolor="#ED2354">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="16%" height="82" bgcolor="#E3E3E3">&nbsp;</td>
        <td width="68%" bgcolor="#E3E3E3">

          <div class="center">Copyright © <?= date('Y'); ?> <?= ucfirst($web_name[0]) ?>. All Rights Reserved</div>

          <div class="sml-txt">If you no longer wish to receive these emails please login to your account and turn off email notifications to unsubscribe.</div>

        </td>
        <td width="16%" bgcolor="#E3E3E3">&nbsp;</td>
      </tr>
    </tbody>
  </table>


</body>

</html>