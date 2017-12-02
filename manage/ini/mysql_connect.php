<?php
/**
 * Created by PhpStorm.
 * User: hate
 * Date: 2017/11/30
 * Time: 10:50
 */
?>
<?php
        $id=mysql_connect("localhost","root","123456");
        $OK=mysql_select_db("homeword",$id);
        $language="set names utf8";
        $language_excu=mysql_query($language,$id);


  ?>