<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Choose a new password for <?php echo $this->config->item('WEBSITE_NAME');?></title>

    <style type="text/css" rel="stylesheet" media="all">

        /* Base ------------------------------ */

        *:not(br):not(tr):not(html) {

            font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;

            -webkit-box-sizing: border-box;

            box-sizing: border-box;

        }

        body {

            width: 100% !important;

            height: 100%;

            margin: 0;

            line-height: 1.4;

            background-color: #F2F4F6;

            color: #74787E;

            -webkit-text-size-adjust: none;

        }

        a {

            color: #3869D4;

        }

        /* Layout ------------------------------ */

        .email-wrapper {

            width: 100%;

            margin: 0;

            padding: 0;

            background-color: #F2F4F6;

        }

        .email-content {

            width: 100%;

            margin: 0;

            padding: 0;

        }

        /* Masthead ----------------------- */

        .email-masthead {

            padding: 25px 0;

            text-align: center;

        }

        .email-masthead_logo {

            max-width: 400px;

            border: 0;

        }

        .email-masthead_name {

            font-size: 16px;

            font-weight: bold;

            color: #bbbfc3;

            text-decoration: none;

            text-shadow: 0 1px 0 white;

        }

        /* Body ------------------------------ */

        .email-body {

            width: 100%;

            margin: 0;

            padding: 0;

            border-top: 1px solid #EDEFF2;

            border-bottom: 1px solid #EDEFF2;

            background-color: #FFF;

        }

        .email-body_inner {

            width: 570px;

            margin: 0 auto;

            padding: 0;

        }

        .email-footer {

            width: 570px;

            margin: 0 auto;

            padding: 0;

            text-align: center;

        }

        .email-footer p {

            color: #AEAEAE;

        }

        .body-action {

            width: 100%;

            margin: 30px auto;

            padding: 0;

            text-align: center;

        }

        .body-sub {

            margin-top: 25px;

            padding-top: 25px;

            border-top: 1px solid #EDEFF2;

        }

        .content-cell {

            padding: 35px;

        }

        .align-right {

            text-align: right;

        }

        /* Type ------------------------------ */

        h1 {

            margin-top: 0;

            color: #2F3133;

            font-size: 19px;

            font-weight: bold;

            text-align: left;

        }

        h2 {

            margin-top: 0;

            color: #2F3133;

            font-size: 16px;

            font-weight: bold;

            text-align: left;

        }

        h3 {

            margin-top: 0;

            color: #2F3133;

            font-size: 14px;

            font-weight: bold;

            text-align: left;

        }

        p {

            margin-top: 0;

            color: #74787E;

            font-size: 16px;

            line-height: 1.5em;

            text-align: left;

        }

        p.sub {

            font-size: 12px;

        }

        p.center {

            text-align: center;

        }

        /* Buttons ------------------------------ */

        .button {

            display: inline-block;

            width: 200px;

            background-color: #3869D4;

            border-radius: 3px;

            color: #ffffff;

            font-size: 15px;

            line-height: 45px;

            text-align: center;

            text-decoration: none;

            -webkit-text-size-adjust: none;

            mso-hide: all;

        }

        .button--red {

            background-color: #32c5d2;

        }

        /*Media Queries ------------------------------ */

        @media only screen and (max-width: 600px) {

            .email-body_inner,

            .email-footer {

                width: 100% !important;

            }

        }

        @media only screen and (max-width: 500px) {

            .button {

                width: 100% !important;

            }

        }

    </style>

</head>

<body>

<table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">

    <tr>

        <td align="center">

            <table class="email-content" width="100%" cellpadding="0" cellspacing="0">

                <!-- Logo -->

                <tr>

                    <td class="email-masthead">

                        <table style="margin: 0 auto;">

                            <tr>

                                <td>

                                    <img alt="" class="img-circle" src="<?php echo echo base_url('/assets/img/LOGO-Main.png');?>" style="max-width: 200px;max-height: 60px;">

                                </td>

                                <td>

                                    <a class="email-masthead_name"><?php echo $this->config->item('WEBSITE_NAME');?><br> Administrator</a>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

                <!-- Email Body -->

                <tr>

                    <td class="email-body" width="100%">

                        <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">

                            <!-- Body content -->

                            <tr>

                                <td class="content-cell">

                                    <h1>Hi <?php // echo $administrator_user->username;?>,</h1>

                                    <p>You recently requested to reset your password for your <?php // echo $administrator_user->username;?> account. Click the button below to reset it.</p>

                                    <!-- Action -->

                                    <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">

                                        <tr>

                                            <td align="center">

                                                <div>

                                                    <!--[if mso]>

                                                    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?php // echo $url;?>" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="7%" stroke="f" fill="t">

                                                        <v:fill type="tile" color="#dc4d2f" />

                                                        <w:anchorlock/>

                                                        <center style="color:#ffffff;font-family:sans-serif;font-size:15px;">Reset your password</center>

                                                    </v:roundrect>

                                                    <![endif]-->

                                                    <img alt="" class="img-circle" src="<?php echo $qr_url?>" style="max-width: 200px;max-height: 60px;">

                                                    <a href="<?php // echo $url;?>" class="button button--red">Reset your password</a>

                                                </div>

                                            </td>

                                        </tr>

                                    </table>

                                    <p>If you did not request a password reset, please ignore this email or reply to let us know. This password reset is only valid for the next 30 minutes.</p>

                                    <p>Thanks,<br><?php echo $this->config->item('WEBSITE_OWNER');?> and the <?php echo $this->config->item('WEBSITE_TEAM');?> Team</p>

                                    <p><strong>P.S.</strong> We also love hearing from you and helping you with any issues you have. Please reply to this email if you want to ask a question or just say hi.</p>

                                    <!-- Sub copy -->

                                    <table class="body-sub">

                                        <tr>

                                            <td>

                                                <p class="sub">If you’re having trouble clicking the password reset button, copy and paste the URL below into your web browser.</p>

                                                <p class="sub"><a href="<?php // echo $url;?>" style="word-break: break-all;"><?php // echo $url;?></a></p>

                                            </td>

                                        </tr>

                                    </table>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

                <tr>

                    <td>

                        <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">

                            <tr>

                                <td class="content-cell">

                                    <p class="sub center">&copy; <?php echo date("Y");?> <?php echo $this->config->item('WEBSITE_NAME');?> . All rights reserved.</p>

                                    <p class="sub center">

                                        <?php echo $this->config->item('WEBSITE_NAME');?>

                                        <br><?php echo $this->config->item('WEBSITE_ADDRESS');?>

                                    </p>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

</body>

</html>

