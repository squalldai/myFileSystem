<html>
<head>
<META http-equiv=Content-Type content="text/html; charset=UTF-8">
<title>Register</title>
<style type="text/css">
#all {margin-left:auto; margin-right:auto; text-align: center;width: 540px;}
body {text-align:center;}
#main {background:url(./reference/login_mid.gif); height:240px; text-align:center;}
#title {height:66px;margin-top: 120px;}
#login { margin-top: 32px; width: 420px; margin-left: auto; margin-right:auto;}
#btm_left {background:url(./reference/login_btm_left.gif) no-repeat; width:21px; float:left;}
#btm_mid {background:url(./reference/login_btm_mid.gif); width:498px; float:left;}
#btm_right {background:url(./reference/login_btm_right.gif) no-repeat; width:21px; float:left;}
</style>

<script src="registerVerify.js"></script>
</head>
<body>

<div id="all">
    <div id="title"><img src="./reference/register_title.png" /></div>
    <div id="main">
    	<form id="form1" name="form1" action="registerAction.php" method="post" >
    	<br><br>
        <table id="login">
            	<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="./reference/usern.png" width="100" height="20" /></td>
              <td><input type="text" value="" name="NewName" id="NewName" size="32" onBlur="checkNode(this)" style="background:url(./reference/username_bg.gif) left no-repeat #FFF; border:1px #ccc solid;height: 20px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: 800; margin:0; padding-left: 24px;"></td>
            </tr>
            <tr>
           		<td></td>
            	<td><span id="NewNameCheckDiv"></span></td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
            <tr>
            	<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="./reference/passw.png" width="100" height="20" / align="middle"> </td>
              <td><input type="password" value="" name="NewPass1" id="NewPass1" onBlur="checkPassword()" size="32" style="background:url(./reference/password_bg.gif) left no-repeat #FFF; border: 1px #ccc solid; height: 20px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: 800; margin:0; padding-left: 24px;"><span id="passwordCheckDiv"></span></td>
            </tr>
            <tr>
            	<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="./reference/passw.png" width="100" height="20" / align="middle"> </td>
              <td><input type="password" value="" name="NewPass2" id="NewPass2" onBlur="checkPassword()" size="32" style="background:url(./reference/password_bg.gif) left no-repeat #FFF; border: 1px #ccc solid; height: 20px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight: 800; margin:0; padding-left: 24px;"></td>
            </tr>
            <tr>
            	<td></td><td><span id="NewPass2CheckDiv"></span></td>
            </tr>
            <tr>
            	<td></td>
            	<td style="text-align: left; padding-top: 32px;">
                   <input name="register" type="submit" value="Register" width="70" height="28" />
                  &nbsp;&nbsp;&nbsp;

                </td>
            </tr>
        </table>
	<form>
    </div>
    <div id="btm">
        <div id="btm_left"></div>
        <div id="btm_mid"></div>
        <div id="btm_right"></div>
    </div>
</div>
</body>
</html>