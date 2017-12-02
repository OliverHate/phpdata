<?php

        $id=mysql_connect("localhost","root","123456");
        if($id){
            echo "OK 数据库链接成功";
            $OK=mysql_select_db("homeword",$id);
              if ($OK) {
                    echo "OK 数据库打开成功";
                }else{
                    echo "ok 数据库打开失败";
                }
        }else{
            echo "OK 数据库链接失败";
        }
        $language="set names utf8";
        $language_excu=mysql_query($language,$id);
        if ($language_excu) {
            echo "语言更改成功";
            # code...
        }else{
            echo "ss1";
            echo $language;
        }
      
        $surname=array(
                0=>"赵",
                1=>"钱",
                2=>"孙",
                3=>"李",
                4=>"周",
                5=>"吴",
                6=>"王",
                7=>"卫",
                8=>"邹",
                9=>"胡",
        );
        $fame1=array(
                0=>"宝",
                1=>"俊",
                2=>"春",
                3=>"囯",
                4=>"子", 
                5=>"庆",
                6=>"婕",
                7=>"家",
                8=>"紫",
                9=>"可",
                10=>"思",
                11=>"东",
                12=>"一",
                13=>"艾",
                14=>"安",
                15=>"之",
                16=>"文",
                17=>"沐",
                18=>"言",
                19=>"伊",
                20=>"青",
            );
            $fame2=array(
                0=>"宝",
                11=>"俊",
                12=>"春",
                13=>"囯",
                14=>"子", 
                15=>"庆",
                16=>"婕",
                17=>"家",
                18=>"紫",
                19=>"可",
                10=>"思",
                1=>"东",
                2=>"一",
                3=>"艾",
                4=>"安",
                5=>"之",
                6=>"文",
                7=>"沐",
                8=>"言",
                9=>"伊",
                20=>"青",
            );
            $tag=1;
                for ($m=5; $m < 8 ; $m++) {
                    $stu_xh_1="201".$m;
                  
                     for ($n=51; $n <54 ; $n++) { 
                         $stu_xh_2=$n."0";
                         for ($z=1; $z < 21; $z++) { 
                            if ($z<10) {
                                $stu_xh_3="30".$z;
                                # code...
                            }else{
                                $stu_xh_3="3".$z;
                             # code...
                            }
                            $stu_xh=$stu_xh_1.$stu_xh_2.$stu_xh_3;  //学生编号 口令
                            $class_bh=$stu_xh_1.$stu_xh_2;//班级编号
                             $name=$surname[rand(0,9)].$fame1[rand(0,20)].$fame2[rand(0,20)]; 
                            $sql="INSERT INTO stu_infor(stu_xh,stu_pw,stu_name,class_bh) VALUES ('".$stu_xh."','".$stu_xh."','".$name."','".$class_bh."')";
                            // echo $sql;
                            $excu=mysql_query($sql,$id);
                            echo "<br>";
                            if($excu){
                                echo "插入成功";
                                echo $stu_xh.$name.$class_bh;
                                echo "第".$tag."条数据";
                                echo "<br>";
                                $tag++;
                            }else{
                                echo "插入失败";
                                 echo $stu_xh.$name.$class_bh;
                                echo "<br>";
                            }
                            
                         }
                         # code...
                     }
                    # code...
                }
            
  ?>