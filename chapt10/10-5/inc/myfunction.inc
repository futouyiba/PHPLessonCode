<?php
class myfunction{
/////////////////�ַ�ת���������ݿ��в�������ʱ��//////////////////////////
      function str_to($str)
      {
        $str=str_replace(" ","&nbsp;",$str);  //�ѿո��滻html���ַ����ո�
        $str=str_replace("<","&lt;",$str);  //��html�������־�������
        $str=str_replace(">","&gt;",$str);  //��html�������־�������
        $str=nl2br($str);               //�ѻس��滻��html�е�br
        return $str;
          }
/////////////////////���Ӱ���id���ظ��Ӱ���������///////////////////////
	function son_module_idtonote_num($son_module_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where module_id='$son_module_id' and up_id='0'";
         $rst=$aa->excu($query);
         return mysql_num_rows($rst);
	}
////////////////////////////////////////////////////////////////////////////
/////////////////////���Ӱ���id���ظ��Ӱ���������///////////////////////
    function son_module_idtonote_num2($son_module_id){
     //���Ӱ���id���ظ��Ӱ���������
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where module_id='$son_module_id' and up_id='0'";
         $rst=$aa->excu($query);
         $num=mysql_num_rows($rst);
         while ($note=mysql_fetch_array($rst,MYSQL_ASSOC)){
             $query="select * from note_info where up_id='$note[id]' and module_id='0'";
             $rst=$aa->excu($query);
             $num+=mysql_num_rows($rst);
             }
             return $num;
	}
/////////////////////���Ӱ���id������Ӱ�����������/////////////////////
    function son_module_idtolast_note($son_module_id){
     //���Ӱ���id������Ӱ�����������
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where module_id='$son_module_id' order by time desc limit 0,1";
         $rst=$aa->excu($query);
         $note=mysql_fetch_array($rst,MYSQL_ASSOC);
             $query2="select * from note_info where id='$note[up_id]'";
             $rst2=$aa->excu($query);
             $note2=mysql_fetch_array($rst2,MYSQL_ASSOC);
             echo $note2[title];
             echo "<br>";
             echo $note[time]."&nbsp;&nbsp;".$note[user_name];
	}
/////////////////////���Ӱ���id������Ӱ��İ���///////////////////////
    function son_module_idtouser_name($son_module_id){
     //���Ӱ���id������Ӱ��İ���
         $aa=new mysql;
         $aa->link("");
         $query="select * from son_module_info where id='$son_module_id'";
         $rst=$aa->excu($query);
         $module=mysql_fetch_array($rst,MYSQL_ASSOC);
         if ($module[user_name]==""){
             return "������ȱ";
             }else{
                 return $module[user_name];
                 }
	}
////////////////������а��������б����Ӱ���в�����////////////////////
    function son_module_list($son_module_id){
     //������а��������б����Ӱ���в�����
         $aa=new mysql;
         $aa->link("");
         $query="select * from father_module_info order by id";
         $rst=$aa->excu($query);
         echo "<select name=module_id>";
         while($father_module=mysql_fetch_array($rst,MYSQL_ASSOC)){
             echo "<option value=>".$father_module[module_name]."</option>";
             $query="select * from son_module_info where father_module_id='$father_module[id]' order by id ";
             $rst2=$aa->excu($query);
             while($son_module=mysql_fetch_array($rst2,MYSQL_ASSOC)){
                 echo "<option value=".$son_module[id].">&nbsp;&nbsp;".$son_module[module_name]."</option>";
                 }
             }
         echo "</select>";
	}
/////////////////////��������������б�////////////////////////////////////
    function father_module_list($father_module_id){
     //��������������б�
         $aa=new mysql;
         $aa->link("");
         echo "<select name=father_module_id>";
         if ($father_module_id==""){
             echo "<option selected>��ѡ��...</option>";
             }else{
                 $query="select * from father_module_info where id='$father_module_id'";
                 $rst=$aa->excu($query);
                 $father_module=mysql_fetch_array($rst,MYSQL_ASSOC);
                 echo "<option value=".$father_module[id].">".$father_module[module_name]."</option>";
                 }
         $query="select * from father_module_info order by show_order";
         $rst=$aa->excu($query);
         while($father_module=mysql_fetch_array($rst,MYSQL_ASSOC)){
             echo "<option value=".$father_module[id].">".$father_module[module_name]."</option>";
             }
         echo "</select>";
	}
/////////////////////�����ӵ�id���ظ����ӱ�����Ĵ���///////////////////////
	function note_idtotimes($note_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where id='$note_id'";
         $rst=$aa->excu($query);
         $note=mysql_fetch_array($rst,MYSQL_ASSOC);
         return $note[times];
	}
/////////////////////�����ӵ�id���ظ����ӵı���///////////////////////
	function note_idtotitle($note_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where id='$note_id'";
         $rst=$aa->excu($query);
         $note=mysql_fetch_array($rst,MYSQL_ASSOC);
         return $note[title];
	}
/////////////////////�����ӵ�id�������ӵĻظ���//////////////////////
	function note_idtonote_num($note_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where up_id='$note_id'";
         $rst=$aa->excu($query);
         $num=mysql_num_rows($rst);
         return $num+1;
	}
///////////////////�����ӵ�id������ӵ����ظ�ʱ��////////////////////
	function note_idtolast_time($note_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where up_id='$note_id' order by time desc limit 0,1";
         $rst=$aa->excu($query);
         $note=mysql_fetch_array($rst,MYSQL_ASSOC);
         echo $note[time];
	}
/////////////////////�����ӵ�id������ӵ����ظ���//////////////////////
	function note_idtolast_user_name($note_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info where up_id='$note_id' order by time desc limit 0,1";
         $rst=$aa->excu($query);
         $note=mysql_fetch_array($rst,MYSQL_ASSOC);
         echo $note[user_name];
	}
/////////////////////���Ӱ���id�����丸��������///////////////////////
	function son_module_idtofather_name($son_module_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from son_module_info where id='$son_module_id'";
         $rst=$aa->excu($query);
         $module=mysql_fetch_array($rst,MYSQL_ASSOC);
         $query2="select * from father_module_info where id='$module[father_module_id]'";
         $rst2=$aa->excu($query2);
         $module2=mysql_fetch_array($rst2,MYSQL_ASSOC);
         return $module2[module_name];
	}
/////////////////////���Ӱ���id���ر���������///////////////////////
	function son_module_idtomodule_name($son_module_id){
         $aa=new mysql;
         $aa->link("");
         $query="select * from son_module_info where id='$son_module_id'";
         $rst=$aa->excu($query);
         $module=mysql_fetch_array($rst,MYSQL_ASSOC);
         return $module[module_name];
	}
/////////////////////�������ӵ�����///////////////////////
	function note_total_num(){
         $aa=new mysql;
         $aa->link("");
         $query="select * from note_info";
         $rst=$aa->excu($query);
         return mysql_num_rows($rst);
	}
/////////////////////���л�Ա������///////////////////////
	function user_total_num(){
         $aa=new mysql;
         $aa->link("");
         $query="select * from user_info";
         $rst=$aa->excu($query);
         return mysql_num_rows($rst);
	}
/////////////////////���л�Ա������///////////////////////
	function last_username(){
         $aa=new mysql;
         $aa->link("");
         $query="select * from user_info order by id desc limit 0,1";
         $rst=$aa->excu($query);
         $user=mysql_fetch_array($rst,MYSQL_ASSOC);
         return $user[user_name];
	}
/////////////��ҳ����////////////////////
      function page($query,$page_id,$add,$num_per_page){
     //  include "mysql.inc";
     ////////ʹ�÷���Ϊ:
     ///////  $myf=new myfunction;
     ///////  $query="";
	 ///////  $myf->page($query,$page_id,$add,$num_per_page);
     ///////  $bb=$aa->excu($query);
       $bb=new mysql;
       global $query;      //����ȫ�ֱ���
       $bb->link("");
       $page_id=$_GET[page_id];    //����page_id
       if ($page_id==""){
           $page_id=1;
           }
       $rst=$bb->excu($query);
       $num=mysql_num_rows($rst);
       if ($num==0){
           echo "û�в鵽��ؼ�¼��û����ػظ���<br>";
           }
       $page_num=ceil($num/$num_per_page);
       for ($i=1;$i<=$page_num;$i++){
           echo "&nbsp;[<a href=?".$add."page_id=$i>".$i."</a>]";
           }
       $page_up=$page_id-1;
       $page_down=$page_id+1;

       if ($page_id==1){
           echo "<a href=?".$add."page_id=$page_down>��һҳ</a>&nbsp;&nbsp;��".$page_id."ҳ,��".$page_num."ҳ";
           }
       else if ($page_id>=$page_num-1){
            echo "<a href=?".$add."page_id=$page_up>��һҳ</a>&nbsp;&nbsp;��".$page_id."ҳ,��".$page_num."ҳ";
            }
       else{
            echo "<a href=?".$add."page_id=$page_up>��һҳ</a>&nbsp;&nbsp;<a href=?".$add."page_id=$page_down>��һҳ</a>&nbsp;&nbsp;��".$page_id."ҳ,��".$page_num."ҳ";
            }
       $page_jump=$num_per_page*($page_id-1);
       $query=$query." limit $page_jump,$num_per_page";
      }
 }//end myfunction
?>