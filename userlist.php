<?
$thisprog="userlist.php";
$title="用户列表";
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
		  	     if($use[3]!=low) {$qx="测试用户";}
				 else $qx="<font color=green>普通用户</font>";}
				  else $qx="<font color=blue>高级用户</font>";} else $qx="<font color=red>系统管理员</font>";
				  
   	$userhgfgertkjcvxhgjv_info.="<tr><td height=20 align=center>$use[1]</td>
<td align=center>$use[7]</td><td align=center>$use[5]</td><td align=center>$use[6]</td><td align=center><a href=mailto:$use[8]?subject=hi,$use[7]>$use[8]</a></td>
<td align=center>$qx</td><td align=center> <a href=javascript:void(1) onClick=\"window.open ('writemail.php?recname=$use[1]','','top=100,left=0,width=700,height=465,status=no,resizable=yes,scrollbars=yes');\" title=\"向 $use[1] 发送消息\"><img src=images/write.gif border=0></a>
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
<b>用户名</b></td>
<td height="26" width="11%"align="center">
<b>姓   名</b></td>
<td height="26" width="11%" align="center">
<b>单   位</b></td>
<td height="26" width="12%" align="center">
<b>联系电话</b></td>
<td height="26" width="17%" align="center">
<b>E-mail</b></td>
<td height="26" width="10%"  align="center">
<b>管理权限</b></td>
<td height="26" width="12%"  align="center">
<b>发送站内消息</b></td>
<td width="15%"  align="center"><b>最后登录</b></td>
</tr>
$userhgfgertkjcvxhgjv_info
	</table>
  </center>
</div> </td></tr></td></tr></table></body></html>
EOT;
exit;
}