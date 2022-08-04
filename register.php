<?php
include '../Controller/registerhandler.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
<!--Header inclusion-->
<?php include 'header.php' ?>

<!--Main table structure-->
<table border="1" id="home" width="100%" cellpadding="0" cellspacing="0" >
    <tr>
        <td align="center" valign="top">
            <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center" >
                <tr>
                    <td align="left" valign="top" height="50">
                        <font face="arial" color="#000000" size="6">
                            Create new account
                        </font>
                    </td>
                    <td align="left" valign="top" height="50">
                        <a href="login.php">
                            <button>
                                <font size="3" face="arial">Cancel registration</font>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <form method="post" action="" enctype="multipart/form-data">
                            <table border="1" width="55%" cellpadding="20" cellspacing="0" align="center"">
                                <tr>
                                    <td>
                                        <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center" >
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#000000">
                                                        User Name
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="user_name" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#000000">
                                                        Email
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="user_email" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#000000">
                                                        Password
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="password" name="user_password" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#000000">
                                                        Confirm Password
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="password" name="user_password_confirm" size="50">
                                                </td>
                                            </tr>
<!--                                            <tr>-->
<!--                                                <td width="30%">-->
<!--                                                    <font face="arial" size="4" color="#000000">-->
<!--                                                        Image-->
<!--                                                    </font>-->
<!--                                                </td>-->
<!--                                                <td width="70%">-->
<!--                                                    <input type="file" name="img_file" id="img_file" size="50">-->
<!--                                                </td>-->
<!--                                            </tr>-->
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%">
                                                    <button type="submit" name="submit" value="submit">
                                                        <font size="5" face="arial">Register</font>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php include '../Controller/registerprocessor.php'?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--Main table structure end-->

<!-- section padding bottom -->
<tr>
    <td height="60">

    </td>
</tr>
<!-- section padding bottom End-->


<!--Footer inclusion-->
<?php include 'footer.php' ?>
</body>
</html>