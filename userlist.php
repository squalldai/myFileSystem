<?
$thisprog="userlist.php";
$title="�û��б�";
require("global.php");
echo"<title>$title /$xtm</title>";
print "<tr><td bgcolor=#CBDED8 colspan=3><b>$xtm/ $title</b>    </td></tr>";
if (empty($action)) {
	$use_info='';
	$dh=opendir("$userd");
	while ($usefile=readdir($dh)) {
		if (($usefile!=".") && ($usefile!="..") && ($usefile!="") && strpos($usefile,".php")) {
			$use=explode("|",readfrom("$userd$usefile"));
		  if($use[3]!=super){
		  	  if($use[3]!=high){
		  	     if($use[3]!=low) {$qx="�����û�";}
				 else $qx="<font color=green>��ͨ�û�</font>";}
				  else $qx="<font color=blue>�߼��û�</font>";} else $qx="<font color=red>ϵͳ����Ա</font>";
				  
   	$userhgfgertkjcvxhgjv_info.="<tr><td height=20 align=center>$use[1]</td>
<td align=center>$use[7]</td><td align=center>$use[5]</td><td align=center>$use[6]</td><td align=center><a href=mailto:$use[8]?subject=hi,$use[7]>$use[8]</a></td>
<td align=center>$qx</td><td align=center> <a href=javascript:void(1) onClick=\"window.open ('writemail.php?recname=$use[1]','','top=100,left=0,width=700,height=465,status=no,resizable=yes,scrollbars=yes');\" title=\"�� $use[1] ������Ϣ\"><img src=images/write.gif border=0></a>
<td align=center>$use[10]</td></tr>";
		}
	}
	closedir($dh);
print <<<EOT
     $tab_top
    $tab_bottom   <br>
    $tab_top
  <center>
<table border="1" cellspacing="0" width="100%" bordercolorlight="#405028" bordercolordark="#FFFFFF">
<tr> 
<td height="26" width="12%"align="center">
<b>�û���</b></td>
<td height="26" width="11%"align="center">
<b>��   ��</b></td>
<td height="26" width="11%" align="center">
<b>��   λ</b></td>
<td height="26" width="12%" align="center">
<b>��ϵ�绰</b></td>
<td height="26" width="17%" align="center">
<b>E-mail</b></td>
<td height="26" width="10%"  align="center">
<b>����Ȩ��</b></td>
<td height="26" width="12%"  align="center">
<b>����վ����Ϣ</b></td>
<td width="15%"  align="center"><b>����¼</b></td>
</tr>
$userhgfgertkjcvxhgjv_info
	</table>
  </center>
</div> </td></tr></td></tr></table></body></html>
EOT;
exit;
}