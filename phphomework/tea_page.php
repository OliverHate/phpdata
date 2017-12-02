<?php   include 'ini/ini.php' ?>
<?php   include 'ini/mysql.php' ?>
  
  <?php 
 

    
    $tea_sql="select * from teacher_login_infor";
    $tea_excu=mysql_query($tea_sql);
  
    //获取记录总数
 
    
?>
<div class="centercontent">      
              <div class="contenttitle2">
                    <h3>教师信息</h3>

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
                            <th class="head0">教师序号</th>
                            <th class="head1">教师编号</th>
                            <th class="head0">教师姓名</th>
                            <th class="head1">最近登录时间</th>
                          
                        </tr>
                    </thead>
                <!--     <tfoot>
                        <tr>
                          <th class="head0"><span class="center">
                            <input type="checkbox" />
                          </span></th>
                            <th class="head0">Rendering engine</th>
                            <th class="head1">Browser</th>
                            <th class="head0">Platform(s)</th>
                            <th class="head1">Engine version</th>
                            <th class="head0">CSS grade</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                    <?php while($tea_info=mysql_fetch_array($tea_excu)){ ?>
                        <tr class="gradeX">
                          <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span>
                          </td>
                            <td style=" text-align: center;"><?php echo $tea_info['id']; ?></td>
                            <td style=" text-align: center;"><?php echo $tea_info['teacher_bh']; ?></td>
                            <td style=" text-align: center;"><?php echo $tea_info['teacher_name']; ?></td>
                          <td style=" text-align: center;"><?php echo $tea_info['login_time']; ?></td>
                           
                        </tr>

                        <?php }  ?>

                
                      
                    </tbody>
                </table>

            
        </div><!--contentwrapper-->
       
</div>