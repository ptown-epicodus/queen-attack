<?php
    class Queen
    {
        function attack($input_coordinates)
        {
            $start = $input_coordinates[0];
            $end = $input_coordinates[1];

            if ($start[0] == $end[0] && $start[1] == $end[1])
                return false;
            if ($start[1] == $end[1]) {
                return true;
            }
            return false;
        }
    }
?>
