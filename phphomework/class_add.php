<?php   include 'ini/ini.php' ?>
<?php   include 'ini/mysql.php' ?>

  <?php  
        $tag=1;
    if ($_POST["class_add"]!="") {


        $class_bh=$_POST['class_bh'];
        $class_name=$_POST["class_name"];
        $class_bh=$_POST["class_bh"];

        $sql="INSERT INTO class_infor(class_bh,class_name) VALUES ($class_bh,$class_name)";
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
        <p>班级名称：<?php echo $class_name; ?></p>
        
        
        </div>

        <?php }?>
           <div class="contenttitle2">
                        <h3>班级添加</h3>
                    </div><!--contenttitle-->
                    
                    <form class="stdform stdform2" method="post" action="class_add.php">
                        <p>
                            <label>编号</label>
                            <span class="field"><input type="text" name="class_bh"  class="longinput" /></span>
                        </p>
                        <p>
                            <label>名称</label>
                            <span class="field"><input type="text" name="class_name"  class="longinput" /></span>
                        </p>
                    <button type="submit" value="class_add" name="class_add" style=" width: 120px;">添加</button>
                        </form>
</div>