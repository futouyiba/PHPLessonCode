<?php
include "session.inc";
?>
<HTML>
<HEAD><TITLE>�������˵�</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<SCRIPT src="menu.js"></SCRIPT>
<LINK href="left.css" type=text/css rel=stylesheet>
</HEAD>
<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<TABLE cellSpacing=0 cellPadding=0 width=180 align=center border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height=44><IMG src="image/title.gif"></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=180 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle0
    onmouseover="this.className='menu_title2';"
    onmouseout="this.className='menu_title';" 
    background=image/title_bg_quit.gif 
      height=26>&nbsp;&nbsp;<A href="Admin_Main.php"  target="_top"><B><SPAN class=glow>������ҳ</SPAN></B></A><SPAN class=glow> |
      </SPAN><A href="login.php" target="_top"><B><SPAN class=glow>�˳�</SPAN></B></A> </TD></TR>
  <TR>
    <TD id=submenu0 background=image/title_bg_admin.gif height=97>
      <DIV style="WIDTH: 180px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=16>�����û�����<?php echo $_SESSION[manage_name];?></TD></TR>
        <TR>
          <TD height=16>������ݣ�<?php echo $_SESSION[manage_name];?></TD></TR>
		  <TR>
		   <TD height=16>IP��<?php echo $_SERVER["REMOTE_ADDR"];?></TD>
          </TR>		  
        <TR>
		<TD height=16>&nbsp;</TD>
          </TR>
		</TBODY></TABLE></DIV>
      <DIV style="WIDTH: 167px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle1 
    onmouseover="this.className='menu_title2'" style="CURSOR: hand" 
    onclick="new Element.toggle('submenu1')" 
    onmouseout="this.className='menu_title'" 
    background=image/Admin_left_1.gif height=28 ;><SPAN class=glow>��̳������</SPAN></TD>
  </TR>
  <TR>
    <TD id=submenu1 style="DISPLAY: none" align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=132 align=center>
        <TBODY>
		<TR>
          <TD height=20><A href="father_module_add.php" target=main>��������</A></TD>
		</TR>
		<TR>
          <TD height=20><A href="father_module_list.php" target=main>��������</A></TD>
		</TR>
		<TR>
          <TD height=20><A href="son_module_add.php" target=main>�Ӱ�����</A></TD>
		</TR>
        <TR>
          <TD height=20><A href="son_module_list.php" target=main>�Ӱ�����</A></TD>
        </TR>		
          </TABLE>
      </DIV>
      <DIV style="WIDTH: 158px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=4></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle2 
    onmouseover="this.className='menu_title2'" style="CURSOR: hand" 
    onclick="new Element.toggle('submenu2')" 
    onmouseout="this.className='menu_title'" 
    background=image/Admin_left_11.gif height=28 ;><SPAN class=glow>��̳�û�����</SPAN></TD>
  </TR>
  <TR>
    <TD id=submenu2 style="DISPLAY: none" align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=132 align=center>
        <TBODY>
        <TR>
          <TD height=20><A href="user_list.php" target=main>�����û�</A></TD>
        </TR>
		<TR>
          <TD height=20><A href="user_js.php" target=main>�û�����</A></TD>
		</TR>        
</TBODY></TABLE>
      </DIV>
      <DIV style="WIDTH: 158px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=4></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle3 
    onmouseover="this.className='menu_title2'" style="CURSOR: hand" 
    onclick="new Element.toggle('submenu3')" 
    onmouseout="this.className='menu_title'" 
    background=image/Admin_left_3.gif height=28 ;><SPAN class=glow>��ȫ����</SPAN></TD>
  </TR>
  <TR>
    <TD id=submenu3 style="DISPLAY: none" align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=132 align=center>
        <TBODY>
		<TR>
          <TD height=20><A href="user_pw_change.php" target=main>�������</A></TD>
		</TR>		
		<TR>
          <TD height=20><A href="../" target=_blank>���ӹ���</A></TD>
		</TR>
</TBODY></TABLE>
      </DIV>
      <DIV style="WIDTH: 158px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=4></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle208 
    onmouseover="this.className='menu_title2';" 
    onmouseout="this.className='menu_title';" 
    background=image/Admin_left_04.gif 
      height=28><SPAN>ϵͳ��Ϣ</SPAN> </TD></TR>
  <TR>
    <TD align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=20><br>�汾��:verson 1.0<BR>��Ȩ���У�&nbsp;<A href= "http://www.etpt.net/" target=_blank>ET������</A>
		  <BR>���������&nbsp;<A href="http://www.etpt.net/" target=_blank>ET������</A>
		  <BR>����֧�֣�&nbsp;<A href="http://bbs.etpt.net/" target=_blank>ET������</A>
		  <BR><BR></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
</BODY>
</HTML>
