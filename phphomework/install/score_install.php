<?php  include 'mysql.php';


        $lessons=array(
                1=>"810",
                2=>"820",
                3=>"830",
                4=>"840",
                5=>"850",
            );
        // 课程编号
            $tag=1;
        for ($m=1; $m <6 ; $m++) { 
            $lesson=$lessons[$m];
             
            for ($i=1; $i<181 ; $i++) { 
                  
            $sql="UPDATE score_infor SET lesson_bh='".$lesson."' where id =".$tag;
                $excu=mysql_query($sql); 
                if ($excu) {
                    echo "success".$i;
                    echo "</br>";
                    $tag++;
                    # code...
                }else{
                    echo "file";
                }

    # code...
         
            }
        }

?>