<?php
class mysql{
    //���ӷ����������ݿ��Լ�ִ��SQL�������
    public $database;
    public $server_username;
    public $server_userpassword;
    function mysql()
  	{  //���캯����ʼ����Ҫ���ӵ����ݿ�
       $this->server_username="root";
       $this->server_userpassword="root";
       }//end mysql()
	function link($database)
  	{  //���ӷ����������ݿ�
       //�����������ӵ����ݿ�
        if ($database==""){
            $this->database="bbs_data";
            }else{
            $this->database=$database;
            }
        //���ӷ����������ݿ�
     	if(@$id=mysql_connect('localhost',$this->server_username,$this->server_userpassword)){
          if(!mysql_select_db($this->database,$id)){
		       echo "���ݿ����Ӵ��󣡣���";
               exit;
               }
 	       }else{
               echo "����������ά���У����Ժ����ԣ�����";
               exit;
      	   }
	}//end link($database)
	function excu($query)
    {     //ִ��SQL���
    		if($result=mysql_query($query)){
				return $result;
        	}else{
             	echo "sql���ִ�д��󣡣���������!!!";
       		    exit;
        	}
    } //end  exec($query)
} //end class mysql
?>