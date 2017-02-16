<?php
    class Number
    {
        function getNumber($input)
        {
            $num_array = array();
            $input_array = array_reverse(str_split($input)); //[915876532] //[235678519]

            $ones_array = array("","one","two","three","four","five","six","seven","eight","nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
            $tens_array = array("", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");
            $hundreds_array = array("hundred");
            $word_array = array($ones_array, $tens_array, $hundreds_array, array("thousand"), array("thousand"),array("hundred"),array("million"),array("million"),array("hundred"), array("billion"),array("billion"),array("hundred"), array("trillion"));

            $y = 1;
            for($x=0;$x<count($input_array);$x++){//915
                if(($x - 1)%3==0){
                    if ($input_array[$x] == 1){
                        array_shift($num_array);
                        $teenStr_Position = $input_array[$x] . $input_array[$x-1];//"19"
                        array_unshift($num_array, $ones_array[(int) $teenStr_Position]);
                    }else{
                        array_unshift($num_array, $word_array[1][(int)$input_array[$x]]);
                    }
                }
                else {
                    array_unshift($num_array, $word_array[0][$input_array[$x]],$word_array[$x][0]);
                }
            }

            $result =  implode(" ", $num_array);
            while(substr($result,-1)==" "){
                // substr($result,-1,1);
                $result = substr($result,0,strlen($result)-1);
            }
            $result = preg_replace('/\s+/', ' ',$result);

            return $result;
        }

    }


?>
