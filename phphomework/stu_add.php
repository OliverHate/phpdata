<?php   include 'ini/ini.php' ?>
<?php   include 'ini/mysql.php' ?>

  <?php  
        $tag=1;
    if ($_POST["stu_add"]=="stu_add") {


        $stu_xh=$_POST['stu_xh'];
        $stu_name=$_POST["stu_name"];
        $class_bh=$_POST["class_bh"];
       

    

        $sql="INSERT INTO stu_infor(stu_xh,stu_pw,stu_name,class_bh) VALUES ($stu_xh,$stu_xh,'$stu_name',$class_bh)";
        $excu=mysql_query($sql);
        if ($excu) {
            $tag=2;
          $stu_lesson_add_sql="select * from lesson_infor";
          $stu_lesson_add_excu=mysql_query($stu_lesson_add_sql);
          while ($stu_lesson_add_info=mysql_fetch_array($stu_lesson_add_excu)) {
            $lesscon_tag=$stu_lesson_add_info['lesson_bh'];
            $stu_score_add_sql="INSERT INTO score_infor (stu_xh,lesson_bh,score) VALUES ($stu_xh,$lesscon_tag,0)";
            $ec=mysql_query($stu_score_add_sql);

              # code...
          }
        }
    }
  ?>

<div class="centercontent">    
    <?php if($tag==2){ ?> 
        <div class="notibar announcement">
        <a class="close"></a>
        <h3>添加成功</h3>
        <p>学生名称：<?php echo $stu_name; ?></p>
        <p>登陆口令：<?php echo $stu_xh; ?></p>
         <p>所在班级：<?php 
            $s_sql="select * from class_infor where class_bh=$class_bh";
            $s_excu=mysql_query($s_sql);
            $s_info=mysql_fetch_array($s_excu);
            echo $s_info['class_name'];

                ?></p>
        </div>

        <?php }?>
           <div class="contenttitle2">
                        <h3>学生添加</h3>
                    </div><!--contenttitle-->
                    
                    <form class="stdform stdform2" method="post" action="stu_add.php">
                        <p>
                            <label>学号</label>
                            <span class="field"><input type="text" name="stu_xh"  class="longinput" /></span>
                        </p>
                        
                        <p>
                            <label>姓名</label>
                            <span class="field"><input type="text" name="stu_name"  class="longinput" /></span>
                        </p>
                   
                         <p>
                            <label>班级</label>
                            <span class="field">
                            <select  multiple="multiple" size="5" name="class_bh">
                            <?php  
                                $class_sql="select * from class_infor";
                                $class_excu=mysql_query($class_sql);
                                while ($class_info=mysql_fetch_array($class_excu)) {
                                  
                            ?>
                            <option value="<?php echo $class_info['class_bh']; ?>">
                            <?php echo $class_info['class_name']; ?></option>
                            
                               
                                <?php  } ?>
                            </select>
                            </span>
                        </p>
                         <button type="submit" value="stu_add" name="stu_add" style=" width: 120px;">添加</button>
                        </form>
</div>