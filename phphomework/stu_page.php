<?php   include 'ini/ini.php' ?>
<?php   include 'ini/mysql.php' ?>
  
  <?php /**
  *  $num 信息总数
    $curr_page 当前分页
    $perpage 每页显示数
    $pages 分页总数
  */
 

    $perpage=$_GET['perpage'];
    $curr_page=$_GET['curr_page'];
    if ($perpage=="") {
        $perpage=10;
        # code...
    }else{
        $perpage=$_GET['perpage'];
    }
    if($curr_page==""){
        $curr_page=1;
    }else{
        $curr_page=$_GET["curr_page"];
    }
    $stu_num_sql="select * from stu_infor";
    $stu_num_excu=mysql_query($stu_num_sql);
    $num=mysql_num_rows($stu_num_excu);
    //获取记录总数
    $pages=ceil($num/$perpage);  //获取分页总数

    if ($pages <= 5) { 
        $page_start=1;
        $page_end=$pages;
    }else{
         $page_start=($curr_page-2 > 1)? $curr_page-2:1;
         $page_end=($curr_page+2 > $pages)?$pages:(($page_start==1)?6-$page_start:$curr_page+2); 
    }
        $last_page=($curr_page-1>0)?$curr_page-1:1;
        $next_page=($curr_page >=$pages)?$pages:$curr_page+1;
        // 分页前一页 后一页 首页 尾页代码
           
    $start_num=($curr_page-1)*$perpage;
    $stu_page_sql="select * from stu_infor  limit $start_num ,$perpage";
    $stu_page_excu=mysql_query($stu_page_sql);
    
?>
<div class="centercontent">      
              <div class="contenttitle2">
                    <h3>学生信息</h3>

            </div><!--contenttitle-->
               <div class="tableoptions">
                    <button class="deletebutton radius3" title="table2">Delete Selected</button> &nbsp;
                    <select class="radius3">
                        <option value="">Show All</option>
                        <option value="">Rendering Engine</option>
                        <option value="">Platform</option>
                    </select> &nbsp;
                    <button class="radius3">搜索</button>
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable2">
                    <colgroup>
                        <col class="con0" style="width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                          <th class="head0 nosort"><input type="checkbox" /></th>
                            <th class="head0">编号</th>
                            <th class="head1">学号</th>
                            <th class="head0">姓名</th>
                            <th class="head1">班级</th>
                          
                        </tr>
                    </thead>

                    <tbody>
                    <?php while($stu_page_info=mysql_fetch_array($stu_page_excu)){ 
                        $stu_tag=$stu_page_info['stu_xh'];
                        ?>
                        <tr class="gradeX">
                          <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span>
                          </td>
                            <td style=" text-align: center;"><?php echo $stu_page_info['id']; ?></td>
                            <td style=" text-align: center;"><?php echo  $stu_tag;  ?></td>
                            <td style=" text-align: center;"><a href="stu_score.php?stu_xh=<?php echo $stu_tag;?> "> <?php echo $stu_page_info['stu_name']; ?></a></td>
                            <td style=" text-align: center;"><?php 
                                $class_bh=$stu_page_info['class_bh'];
                                $stu_class_bh_sql="select * from class_infor where class_bh=  $class_bh";
                                $stu_class_bh_excu=mysql_query($stu_class_bh_sql);
                                $stu_class_bh_info=mysql_fetch_array($stu_class_bh_excu);
                                echo $stu_class_bh_info["class_name"];


                             ?></td>
                           
                        </tr>

                        <?php }  ?>

                
                      
                    </tbody>
                </table>

                <div class="dataTables_paginate paging_full_numbers">
                <a href="stu_page.php?curr_page=1">
                <span class="paginate_button">首页</span>
                </a>
                 <a href="stu_page.php?curr_page=<?php echo $last_page;?>">
                <span class="paginate_button">上一页</span>
                </a>
               
                 <?php for ($i=$page_start; $i <= $page_end; $i++) { ?>  
                    <?php if ($i==$curr_page) { ?>
                    <a href="stu_page.php?curr_page=<?php echo $i;?>"> 
                    <span class="paginate_active"><?php echo $i; ?>
                    </span> 
                    </a>
                    <?php continue; } ?> 

                <a href="stu_page.php?curr_page=<?php echo $i;?>">
                <span class="paginate_button"><?php echo $i; ?>
                </span> 
                </a> 
                <?php } ?>
              
               <a href="stu_page.php?curr_page=<?php echo $next_page;?>">
                <span class="paginate_button">下一页</span>
                </a>
                <a href="stu_page.php?curr_page=<?php echo $pages;?>">
                <span class="paginate_button">尾页</span>
                </a>
                </div>   <!-- limit end -->
        </div><!--contentwrapper-->
       
</div>