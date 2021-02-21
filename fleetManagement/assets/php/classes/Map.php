<?php
require_once "Vessel.php";

class Map
{
    public function __construct()
    {

    }

    public function mapInit(int $x, int $y)
    {
        $vessel = new Vessel();
        echo '<table class="table"> <tbody>';
        for ($i = 0; $i <= $x; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= $y; $j++) {
                echo '<td>';
                    if ($vessel->showVesselOnPosition($i, $j)){
                        echo '<i class="fas fa-ship"></i>';
                    }else {
                        echo '<i class="fas fa-water"></i>';
                    }
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
}