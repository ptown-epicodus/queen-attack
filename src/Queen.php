<?php
    class Queen
    {
        private $x;
        private $y;

        function __construct($x_coordinate, $y_coordinate)
        {
            $this->x = $x_coordinate;
            $this->y = $y_coordinate;
        }

        function getX()
        {
            return $this->x;
        }

        function getY()
        {
            return $this->y;
        }

        function attack($input_coordinates)
        {
            $start = [$this->getX(), $this->getY()];
            $end = $input_coordinates;

            if (! Queen::onBoard($start))
                return false;
            if (! Queen::onBoard($end))
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

        static function onBoard($coordinates)
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
