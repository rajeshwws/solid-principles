<?php

namespace App\OCP;


class AreaCalculator
{
    public function calculate($shapes)
    {
        $area = [];
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}