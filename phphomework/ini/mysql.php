<?php
        $id=mysql_connect("localhost","root","123456");
        $OK=mysql_select_db("tour",$id);
        $language="set names utf8";
        $language_excu=mysql_query($language,$id);


//        if ( $language_excu=mysql_query($language,$id)){
//            echo 'sussecc';
//        } 测试数据库联通

//        $select='select * from new_info';
//        $select_excu=mysql_query($select);
//        while ($select_info=mysql_fetch_array($select_excu)){
//            echo $select_info['id'];
//            echo '</br>';
//        }测试数据库联通
  ?>