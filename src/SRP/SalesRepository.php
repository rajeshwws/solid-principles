<?php

namespace App\SRP;


class SalesRepository
{
    public function between($start_date, $end_date)
    {
        return [
            'start' => $start_date,
            'end' => $end_date,
            'data' => []
        ];
    }
}