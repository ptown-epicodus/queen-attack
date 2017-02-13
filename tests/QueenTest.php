<?php
    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_attack_originalCoordinates()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(1, 2), array(1, 2));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_attack_horizontally()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(1, 2), array(4, 2));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_attack_vertically()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(1, 2), array(1, 5));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_attack_diagonally()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(3, 3), array(5, 1));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_attack_elsewhere()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(1, 2), array(3, 3));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_attack_offBoard()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(1, 2), array(9, 2));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(false, $result);
        }
    }
?>
