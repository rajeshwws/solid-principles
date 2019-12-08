<?php

namespace App\SRP;


class SalesReporter
{
    /**
     * @var SalesRepository
     */
    private $repository;

    public function __construct(SalesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function between($start_date, $end_date, SalesOutputInterface $formatter)
    {
        $sales = $this->repository->between($start_date, $end_date);

        $formatter->output($sales);
    }
}