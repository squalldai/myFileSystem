<?php
error_reporting(7);

$userd = "use/"; //�û��ļ���
$xtm = "��ӭ�����ļ�����ϵͳ ";
$file = "file/"; //�ϴ��ļ����Ŀ¼
$jl = "record/"; //ϵͳ��־�ļ���
$mail = "mailbox"; //�û������ļ���
$mailn = "30"; //�û���������
$ip = "http://www.ip38.com/?ip="; //IP��ѯ��ַ

session_start();
if(!isset($_SESSION['userName'])){
	header('location:login.php');
}

admintitle();

function admintitle() {
	global $checkpower;
	print<<<EOT
     <html>
   <head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<LINK href="images/cs.css" rel=stylesheet>�� <STYLE type="text/css">
���� TD{
�������� word-break: break-all;
��������}
���� </style>
 </head>
 <SCRIPT    LANGUAGE="JavaScript">
   document.onkeydown    =    function()    {
   if(event.keyCode==116)    {
   event.keyCode=0;
   event.returnValue    =    false;
   }
   }
   document.oncontextmenu    =    function()    {event.returnValue    =    false;}
   </SCRIPT> <body onkeydown='if(event.keyCode==78 && event.ctrlKey)return false;'>
<body bgcolor=#99CCFF topmargin=5 leftmargin=5><table width=98% cellpadding=0 cellspacing=1 border=0 bgcolor=#99CCFF align=center>
    <tr><td>
    <table width=100% cellpadding=0 cellspacing=1 border=0>
    <tr><td width=10% valign=top bgcolor=#FFFFFF>
    <table width=100% cellpadding=6 cellspacing=0 border=0>
    <tr><td bgcolor=#CBDED8><center><font color=red>
    <b>�� �� ѡ ��</b>
    </td></tr>
    <tr>
    <td bgcolor=#FFFFFF valign=center><br>
<font color=red>���<a href="http://$_SERVER[SERVER_NAME]" target=_blank>��վ��ҳ</a><br><br>
�� <a href=><font color="#339900"><b>ϵͳ��ҳ</b></font></a><br> <br>
�� <a href=wj.php>�ļ��б�</a><br> <br>
�� <a href=gl.php>�ļ�����</a><br> <br>
�� <a href="javascript:void(0)" onClick="window.open ('upfile.php','','top=0,left=0,width=700,height=363,status=no,resizable=yes,scrollbars=yes');">�ϴ��ļ�</a><br><br>
�� <a href=jl.php>��ȫ��־</a><br><br>
�� <a href=adminuser.php>�û�����</a> <br><br>
�� <a href=sitemail.php>վ�ڶ���</a> <br><br>
�� <a href=editmy.php>�����޸�</a> <br><br>
�� <a href=bfleasin.php>���ݹ���</a> <br><br>
�� <a href=logout.php?login=leasin><font color=red>�˳�ϵͳ</font></a> </p>
    </td></tr>
  </table>
    </td><td width=65% valign=top bgcolor=#FFFFFF>
    <table width=100% cellpadding=6 cellspacing=0 border=0  valign=top>
EOT;
}
