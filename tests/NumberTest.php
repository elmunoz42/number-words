<?php

    require_once 'src/Number.php';

    class NumberTest extends PHPUnit_Framework_TestCase
    {
        function test_one()
        {

            $test_num = new Number;
            $first_input = "1";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("one", $result);
        }
        function test_nineteen()
        {

            $test_num = new Number;
            $first_input = "19";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("nineteen", $result);
        }
        function test_twenty()
        {

            $test_num = new Number;
            $first_input = "20";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("twenty", $result);
        }
        function test_hundreds()
        {

            $test_num = new Number;
            $first_input = "519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("five hundred nineteen", $result);
        }
        function test_thousands()
        {

            $test_num = new Number;
            $first_input = "2519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("two thousand five hundred nineteen", $result);
        }

        function test_10k_nonteen()
        {

            $test_num = new Number;
            $first_input = "20520";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("twenty thousand five hundred twenty", $result);
        }

        function test_10k()
        {

            $test_num = new Number;
            $first_input = "12519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("twelve thousand five hundred nineteen", $result);
        }

        function test_100k()
        {

            $test_num = new Number;
            $first_input = "112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_mil()
        {

            $test_num = new Number;
            $first_input = "2112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("two million one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_10_mil()
        {

            $test_num = new Number;
            $first_input = "32112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("thirty two million one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_100_mil()
        {

            $test_num = new Number;
            $first_input = "422112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("four hundred twenty two million one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_bil()
        {

            $test_num = new Number;
            $first_input = "1422112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("one billion four hundred twenty two million one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_teenbil()
        {

            $test_num = new Number;
            $first_input = "13422112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("thirteen billion four hundred twenty two million one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_100bil()
        {

            $test_num = new Number;
            $first_input = "113422112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("one hundred thirteen billion four hundred twenty two million one hundred twelve thousand five hundred nineteen", $result);
        }

        function test_tril()
        {

            $test_num = new Number;
            $first_input = "1113422112519";

            $result = $test_num->getNumber($first_input);

            $this->assertEquals("one trillion one hundred thirteen billion four hundred twenty two million one hundred twelve thousand five hundred nineteen", $result);
        }




    }






?>
