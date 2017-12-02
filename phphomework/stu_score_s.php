<?php   include 'ini/ini.php' ?>
<?php   include 'ini/mysql.php' ?>
<?php 
        $stu_xh=$_GET['stu_xh'];

        $stu_score_sql="select * from score_infor where stu_xh=$stu_xh";
        $stu_score_excu=mysql_query($stu_score_sql);

        $stu_score_sql1="select * from score_infor where stu_xh=$stu_xh";
        $stu_score_excu1=mysql_query($stu_score_sql1);

        $stu_name_sql="select * from stu_infor where stu_xh=$stu_xh";
        $stu_name_excu=mysql_query($stu_name_sql);
        $stu_name_info=mysql_fetch_array($stu_name_excu);
?>


<div class="centercontent">      
              <div class="contenttitle2">
                    <h3><?php echo $stu_name_info['stu_name']; ?></h3>

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
                          <?php while ($stu_score_info=mysql_fetch_array($stu_score_excu)) {
                           ?>
                        
                            <th class="head0" style="text-align: center;">
       
                        <?php 
                        $tag=$stu_score_info['lesson_bh'];
        $lesson_name_sql="select * from lesson_infor where lesson_bh=$tag";
        $lesson_name_excu=mysql_query($lesson_name_sql);
        $lesson_name_infor=mysql_fetch_array($lesson_name_excu);
        echo $lesson_name_infor['lesson_name'];

        ?>
        </th>
                           
                    <?php  }  ?> 
                    
                    </thead>
           
                    <tbody>


                    
                        <tr class="gradeX">
                          <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span>
                          </td>
                          <?php while($stu_score_info1=mysql_fetch_array($stu_score_excu1)){ ?>
                            <td style=" text-align: center;">
                            <?php 
                            $score_tag=$stu_score_info1['score'];
                            echo $stu_score_info1['score']; ?>
                                
                            </td>
                             <?php }  ?>
                        </tr>

                      

                
                      
                    </tbody>
                </table>

            
        </div><!--contentwrapper-->
       
</div>