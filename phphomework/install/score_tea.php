<?php  include 'mysql.php';

             $tea_s=array(
                1=>"201501",
                2=>"201601",
                3=>"201701",

                4=>"201502",
                5=>"201602",
                6=>"201702",

                7=>"201603",
                8=>"201503",
                9=>"201703",

                10=>"201504",
                11=>"201604",
                12=>"201704",
            
                13=>"201505",
                14=>"201605",
                15=>"201705",
               
            );
                $tag=1;
             for ($i=1; $i <16 ; $i++) {
                $tea=$tea_s[$i];
                for ($n=1; $n <61 ; $n++) { 
                    $sql="UPDATE score_infor SET teacher_bh='".$tea."' where id =".$tag;
                    $ecxu=mysql_query($sql);
                    if ($ecxu) {
                        echo "success";
                        echo $tea;
                        echo $tag;
                        $tag++;
                        # code...
                    }
                    # code...
                }


                 # code...
             }

?>