<?php

require "vendor/autoload.php";

$report = new \App\SRP\SalesReporter(new \App\SRP\SalesRepository());

$report->between('2019-11-20', '2019-12-05', new \App\SRP\HtmlOutput());