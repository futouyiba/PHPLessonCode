<!--�ļ�5-1.php�������ݴ���-->
<HTML>
	<HEAD>
		<TITLE>�����ݴ���</TITLE>
	</HEAD>
	<BODY>
    <?php
    $tag=$_POST["tag"];
    if ($tag==1){
        $addend1=$_POST["addend1"];
        $addend2=$_POST["addend2"];
        }else{
            $addend1=0;
            $addend2=0;
            }
    $sum=$addend1+$addend2;
    ?>
	��������ı������������������
	<form name="form1" method="post" action="#">
      <input type="hidden" name="tag" size="4" value="1">
	  <input type="text" name="addend1" size="4" value="<?php echo $addend1;?>">
	  +
	  <input type="text" name="addend2" size="4" value="<?php echo $addend2;?>">
	=
      <?php echo $sum;?><br>
	<br><input type="submit" name="Submit" value="����">
	<input type="reset" name="Submit2" value="����">
	</form>
	</BODY>
</HTML>

