<?php
    class Number
    {
        function getNumber($input)
        {
            $numStr = "";
            $input_array = array_reverse(str_split($input)); //[9,1,5] //[91521]
            $teens_array = array("","one","two","three","four","five","six","seven","eight","nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");

            $word_array = array(array("","one","two","three","four","five","six","seven","eight","nine"),array("", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"),array("hundred"),array("thousand"), array("ten thousand"));

            $y = 0;
            for($x=0;$x<count($input_array);$x++){//915
                if($x==0 || $x == 1){
                    if ($input_array[1] == 1){
                        $teenStr_Position = $input_array[1] . $input_array[0];//"19"
                        $numStr = $teens_array[(int) $teenStr_Position] . $numStr;//nineteen
                        $x++;
                    }else{
                        $numStr = $word_array[$x][(int)$input_array[$x]] . $numStr;
                    }
                }
                else if($x == 4){
                    if ($input_array[4] == 1){
                        $teenStr_Position = $input_array[4] . $input_array[3];//"19"
                        $numStr = $teens_array[(int) $teenStr_Position] . " " . $word_array[$x][0] . " " . $numStr;//nineteen
                        $x++;
                    }else{
                        $numStr = $word_array[$x][(int)$input_array[$x]] . $numStr;
                    }
                }
                else {
                    $numStr = $word_array[0][$input_array[$x]] . " " . $word_array[$x][0] . " " . $numStr;
                }
            }
            return $numStr;
        }



        function save($results)
        {
            array_unshift($_SESSION['dates'], $results);
        }

        static function getAll()
        {
            return $_SESSION['dates'];
        }

        static function deleteAll()
        {
            $_SESSION['dates'] = array();
        }




    }


?>
