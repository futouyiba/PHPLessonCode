<?php
include "mysql.inc";
include "myfunction.inc";
$aa=new mysql;
$bb=new mysql;

$aa->link("mysql");
//�������ݿ�
$query="CREATE DATABASE `bbs_data`";
if ($aa->excu($query)){
    echo "===���ݿⴴ���ɹ���===";
    }

$bb->link("bbs_data");
//////////�������ݱ�father_module_info/////////////
$query="CREATE TABLE `father_module_info` (
  `id` int(11) NOT NULL auto_increment,
  `module_name` varchar(66) default NULL,
  `show_order` int(11) default '0',
  UNIQUE KEY `id` (`id`)
) ";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;���ݱ�-father_module_info-�����ɹ���";
//////////�������ݱ�manage_user_info/////////////
$query="CREATE TABLE `manage_user_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pw` varchar(16) NOT NULL,
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;���ݱ�-manage_user_info-�����ɹ���";
//////////�������ݱ�note_info/////////////
$query="CREATE TABLE `note_info` (
  `id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default '0',
  `up_id` int(11) default '0',
  `title` varchar(88) NOT NULL,
  `cont` text NOT NULL,
  `time` datetime NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `times` int(11) default '0',
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;���ݱ�-note_info-�����ɹ���";
//////////�������ݱ�son_module_info/////////////
$query="CREATE TABLE `son_module_info` (
  `id` int(11) NOT NULL auto_increment,
  `father_module_id` int(11) NOT NULL,
  `module_name` varchar(66) NOT NULL,
  `module_cont` text NOT NULL,
  `user_name` varchar(16) default NULL,
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;���ݱ�-son_module_info-�����ɹ���";
//////////�������ݱ�user_info/////////////
$query="CREATE TABLE `user_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pw` varchar(16) NOT NULL,
  `time1` datetime default '0000-00-00 00:00:00',
  `time2` datetime default '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;���ݱ�-user_info-�����ɹ���";
//////////////////��ʼ������//////////////////////////
echo "<br>===��ʼ����������===";
$query="INSERT INTO `manage_user_info` VALUES (1, 'admin', 'admin')";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;����Ա�û����������ʼ�ɹ�";
echo "<br>&nbsp;&nbsp;&nbsp;�û�����admin";
echo "<br>&nbsp;&nbsp;&nbsp;�� �룺admin";

$query="INSERT INTO `father_module_info` VALUES (1, '���Ը����', 1)";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;��ӡ����Ը���顱�ɹ���";

$query="INSERT INTO `son_module_info` VALUES (1, 1, '�����Ӱ��', '����Ϊ�˲����Ӱ�����ӵ�', '');";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;��ӡ������Ӱ�顱�ɹ���";
?>
