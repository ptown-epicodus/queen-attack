<?php
    class Queen
    {
        function attack($input_coordinates)
        {
            $start = $input_coordinates[0];
            $end = $input_coordinates[1];

            if (! $this->onBoard($start))
                return false;
            if (! $this->onBoard($end))
                return false;
            if ($start[0] == $end[0] && $start[1] == $end[1])
                return false;

            if ($start[1] == $end[1])
                return true;
            if ($start[0] == $end[0])
                return true;
            if (abs($end[1] - $start[1]) == abs($end[0] - $start[0]))
                return true;

            return false;
        }

        function onBoard($coordinates)
        {
            $x = $coordinates[0];
            $y = $coordinates[1];

            if ($x < 0 || $x >= 8)
                return false;
            if ($y < 0 || $y >= 8)
                return false;
            return true;
        }
    }
?>
