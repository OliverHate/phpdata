<?php   include 'dashboard.php' ?>
<?php   include 'ini/mysql.php' ?>

  <?php  
        $tag=1;
    if ($_POST["lesson_add"]!="") {


        $lesson_bh=$_POST['lesson_bh'];
        $lesson_name=$_POST["lesson_name"];
      

        $sql="INSERT INTO lesson_infor(lesson_bh,lesson_name) VALUES ($lesson_bh,$lesson_name)";
        $excu=mysql_query($sql);
        if ($excu) {
            $tag=2;
            # code...
        }
    }
  ?>

<div class="centercontent">    
    <?php if($tag==2){ ?> 
        <div class="notibar announcement">
        <a class="close"></a>
        <h3>添加成功</h3>
        <p>课程名称：<?php echo $lesson_name; ?></p>
        
        
        </div>

        <?php }?>
           <div class="contenttitle2">
                        <h3>课程添加</h3>
                    </div><!--contenttitle-->
                    
                    <form class="stdform stdform2" method="post" action="lesson_add.php">
                        <p>
                            <label>编号</label>
                            <span class="field"><input type="text" name="lesson_bh"  class="longinput" /></span>
                        </p>
                        <p>
                            <label>名称</label>
                            <span class="field"><input type="text" name="lesson_name"  class="longinput" /></span>
                        </p>
                    <button type="submit" value="lessons_add" name="lesson_add" style=" width: 120px;">添加</button>
                        </form>
</div>