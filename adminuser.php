<?
$title = "�û�����";
$thisprog = "adminuser.php";
require ("global.php");
echo "<title>$title /$xtm</title>";


$link = mysql_connect('127.0.0.1', 'root', 'squall') or die('Could not connect: ' . mysql_error());
mysql_select_db('app') or die('Could not select database');
$query = 'SELECT * FROM user';
$users = mysql_query($query) or die('Query failed: ' . mysql_error());

$action=$_GET['action'];

print "<tr><td bgcolor=#CBDED8 colspan=3><b>$xtm/ �û�����</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=userlist.php>�л����û��б�</a></td></tr>";
if (empty ($action)) {
	$use_info = '';
	$countOfUsers = 0;
	while ($line = mysql_fetch_array($users, MYSQL_ASSOC)) {
		$use_info .= "<tr> <form action=$thisprog?action=edit method=post>
	<input type=hidden name=action value=\"edit\">
	<input type=hidden name=oldname value=\"$use[1]\">
	<td height=26 width=10% align=center><input type=text size=12 name=\"name\" value=\"$line[userName]\" readonly></td>
	<td height=26 width=10% align=center>
	<input type=text name=\"realname\" size=8 value=\"$line[chineseName]\"></td>
	<td height=26 width=10% align=center>
	<input type=text name=\"usrpwds\" size=12 maxlength=16 title=6-16���ַ�></td>
	<td height=26 width=10% align=center>
	<input type=text name=\"userabout\" size=20 value=\"$line[company]\"></td>
	<td height=26 width=10% align=center>
	<input type=text name=\"usertel\" size=15 value=\"$line[phoneNumber]\"></td>
	<td height=26 width=10% align=centeb>
	<input type=text name=\"email\" size=20 value=\"$line[emailAddr]\"></td>
	<td height=26 size=30  align=center>
	<input type=text name=\"ms\" size=6 title=��������������������룬���μ�></td>
	<td height=26 size=30  align=center>
	<select name=\"usrpower\"><option value=low>��ͨ�û�</option><option value=test>�����û�</option><option value=high>�߼��û�</option><option value=super>ϵͳ����</option></select></td>
	<td height=26 wiVth=100%  align=center><input name=Submit title=\"�޸� $line[userName] ������\"  type=image src=images/write.gif border=0>&nbsp; <a href=\"$thisprog?action=del&name=$line[userName]\" OnClick=\"JavaScript: if(confirm('ȷʵҪɾ���û� $line[userName] ��')) return true; else return false;\"><img src=\"images/fol-over.jpg\" title=\"ɾ�� $use[7]\" border=\"0\"></a></td></form>";
		$countOfUsers = $countOfUsers +1;
	}

	print<<<EOT
  <tr> <td bgcolor=#ffffff colspan=3>
    <form action=$thisprog?action=addnew method=post><input type=hidden name="action" value="addnew">
  <BR>    <b>1.�����û�</b> <font color=red>�û����������в��ð����ո�</font> $tab_top
<table border="0" width="100%" cellspacing="1" cellpadding="0" bgcolor="#DAEFE1" height="52">
  <tr>
    <td width="11%" align="center" height="21">�û���</td>
    <td width="11%" align="center" height="21">��&nbsp; ��</td>
    <td width="11%" align="center" height="21">&nbsp;��&nbsp; ��</td>
    <td width="11%" align="center" height="21">&nbsp; ��&nbsp; λ</td>
    <td width="12%" align="center" height="15">��ϵ�绰</td>
    <td width="14%" align="center" height="21">E-mail</td>
    <td width="9%" align="center" height="21">��Կ</td>
    <td width="8%" align="center" height="21">Ȩ&nbsp; ��</td>
    <td width="13%" align="center" height="21"></td>
  </tr>
  <tr>
    <td width="11%" align="center"><input type=text name="nameNew" size=11 maxlength=12 title=5-12���ַ�> </td>
    <td width="11%" align="center"><input type=text name="usrpwdNew" size=13 maxlength=16 title=6-16���ַ�> </td>
    <td width="11%" align="center"><input type=text  name="realnameNew" size=13> </td>
    <td width="11%" align="center"><input type=text name="useraboutNew" size=14> </td>
    <td width="12%" align="center"><input type=text name="usertelNew" size=15>  </td>
    <td width="14%" align="center"><input type=text name="emailNew" size=20>  </td>
    <td width="9%" align="center"><input type=text name="msNew" size=10 title=��������������������룬���μ�>  </td>
    <td width="8%" align="center"><select name="usrpowerNew"><option value=low>��ͨ�û�</option><option value=test>�����û�</option><option value=high>�߼��û�</option><option value=super>ϵͳ����</option></select>
    </td>
    <td width="13%" align="center">
    <input type=submit class=button name=Submit value="�ύ"></td>
  </tr>
</table>
    $tab_bottom</form>

    <b>2.�û��޸�</b>(<font color=red>�û����������в��ð����ո�</font>,���뾭MD5���ܣ�����û����ʾ���������ڲ��޸ĵ����ݣ��벻Ҫ��д)
      $tab_top
	<div align="center">
  <center>
<table width=100% border="0" cellspacing="0" cellpadding="0" bgcolor="#DAEFE1" >
<tr>
<td height="26" width="10%" align="center">
<b>�û���</b></td>
<td height="26" width="11%" align="center">
<b>��  ��</b></td>
<td height="26" width="11%" align="center">
<b>����</b></td>
<td height="26" width="11%" align="center">
<b>��λ</b></td>
<td height="26" width="14%"  align="center">
<b>��ϵ�绰</b></td>
<td height="26" width="15%"  align="center">
<b>E-mail</b></td>
<td height="26" width="6%"  align="center">
<b>��Կ</b></td>
<td height="26" width="9%"  align="center">
<b>Ȩ��</b></td>
<td height="26" width="13%"  align="center">
<b>����</b></td>
</tr>
$use_info
	</table>
  </center>
</div>
 $tab_bottom <br><center>
EOT;
	echo "&nbsp;����  <font color=red><b>$countOfUsers</b></font> λ�û�";
	echo "</center></td></tr></td></tr></table></body></html>";
	exit;
}
elseif ($action == "edit") {
	$nameEdit=$_POST["name"];
	$msEdit=$_POST["ms"];
	$usrpwdEdit=$_POST["usrpwds"];
	$realnameEdit=$_POST["realname"];
	$useraboutEdit=$_POST["userabout"];
	$usertelEdit=$_POST["usertel"];
	$emailEdit=$_POST["email"];
	$powerEdit=$_POST["usrpower"];
	if ($usrpwdEdit != "") {
		if ((strlen($usrpwdEdit) > 16) | (strlen($usrpwdEdit) < 6)) {
			echo "<scripd>alert(\"��������д6-16λ���룡\");javascript:history.go(-1);</script>";
			exit ();
		}
	}
	if ($realnameEdit == "") {
		echo "<script>alert(\"��������Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($useraboutEdit == "") {
		echo "<script>alert(\"��������д��λ��Ϣ��\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($usertelEdit == "") {
		echo "<script>alert(\"��ϵ�绰����Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($usertelEdit != "") {
		if ((strlen($usertelEdit) > 11) | (strlen($usertelEdit) < 7)) {
			echo "<script>alert(\"��������д��ϵ�绰��\");javascript:history.go(-1);</script>";
			exit ();
		}
	}
	if ($emailEdit != "") {
		if (!ereg("@", $emailEdit)) {
			echo "<script>alert(\"�������� �������лл��\");javascript:history.go(-1);</script>";
			exit ();
		}
	}
	$usrpwdEditMD5 = md5($usrpwdEdit);
	$msEditMD5 = md5($msEdit);


	mysql_query("UPDATE user SET userRight='$powerEdit',password='$usrpwdEditMD5',chineseName='$realnameEdit',company='$useraboutEdit',phoneNumber='$usertelEdit',secretKey='$msEditMD5',emailAddr='$emailEdit' WHERE userName='$nameEdit'" );
	$use_info = "<meta http-equiv=refresh content=0;url=../><?exit;?>";

	echo "<script>alert(\"�޸ĳɹ���\");</script><meta http-equiv=refresh content=0;url=$thisprog>";
}
elseif ($action == "addnew") {
	$nameNew=$_POST["nameNew"];
	$msNew=$_POST["msNew"];
	$usrpwdNew=$_POST["usrpwdNew"];
	$realnameNew=$_POST["realnameNew"];
	$useraboutNew=$_POST["useraboutNew"];
	$usertelNew=$_POST["usertelNew"];
	$emailNew=$_POST["emailNew"];
	$powerNew=$_POST["usrpowerNew"];

	$result=mysql_query("select * from user where userName='$nameNew'") or die (mysql_error());
	if ($rs=mysql_fetch_object($result)) {
		echo "<script>alert(\"��Ǹ�����û����Ѿ�����ʹ�ã��������\");javascript:history.go(-1);</script>";
		exit;
	}
	if ($nameNew == "") {
		echo "<script>alert(\"�û�������Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($msNew == "") {
		echo "<script>alert(\"��Կ����Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($msNew != "") {
		if ((strlen($msNew) < 4)) {
			echo "<script>alert(\"��Կ���ܶ���4���ַ���\");javascript:history.go(-1);</script>";
			exit ();
		}
	}

	if ($nameNew != "") {
		if ((strlen($nameNew) > 12) | (strlen($nameNew) < 4)) {
			echo "<script>alert(\"�û���������4-12���ַ���\");javascript:history.go(-1);</script>";
			exit ();
		}
	}
	if ($usrpwdNew == "") {
		echo "<script>alert(\"���벻��Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($usrpwdNew != "") {
		if ((strlen($usrpwdNew) > 16) | (strlen($usrpwdNew) < 6)) {
			echo "<script>alert(\"�뽫���������6-16�ַ���\");javascript:history.go(-1);</script>";
			exit ();
		}
	}
	if ($realnameNew == "") {
		echo "<script>alert(\"��������Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($useraboutNew == "") {
		echo "<script>alert(\" ��λ����Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($usertelNew == "") {
		echo "<script>alert(\"��ϵ�绰����Ϊ�գ�\");javascript:history.go(-1);</script>";
		exit ();
	}
	if ($usertelNew != "") {
		if ((strlen($usertelNew) > 11) | (strlen($usertelNew) < 7)) {
			echo "<script>alert(\"��������д��ϵ�绰��\");javascript:history.go(-1);</script>";
			exit ();
		}
	}
	if ($emailNew != "") {
		if (!ereg("@", $emailNew)) {
			echo "<script>alert(\"�������� �������лл��\");javascript:history.go(-1);</script>";
			exit ();
		}
	}

	$usrpwdNewMD5 = md5($usrpwdNew);
	$msNewMD5 = md5($msNew);
	mysql_query("INSERT INTO user (userName, password,chineseName,company,phoneNumber,userRight,secretKey,emailAddr) VALUES ('$nameNew', '$usrpwdNewMD5', '$realnameNew', '$useraboutNew', '$usertelNew', '$powerNew','$msNewMD5', '$emailNew')" );
	$use_info = "<meta http-equiv=refresh content=0;url=../><?exit;?>";

	echo "<script>alert(\"�����ɹ���\");</script><meta http-equiv=refresh content=0;url=$thisprog>";
}
elseif ($action == "del") {
	$delName=$_GET['name'];
	mysql_query("delete from user where userName='$delName'") or die (mysql_error());
	echo "<script>alert(\"�ɹ�ɾ���û���\");</script><meta http-equiv=refresh content=0;url=$thisprog>";
}
print "</td></tr></table></body></html>";
exit;