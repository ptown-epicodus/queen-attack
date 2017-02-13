<?php
    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_attack_OriginalCoordinates()
        {
            //Arrange
            $test_Queen = new Queen;
            $input = array(array(1, 2), array(1, 2));

            //Act
            $result = $test_Queen->attack($input);

            //Assert
            $this->assertEquals(false, $result);
        }
    }
?>
