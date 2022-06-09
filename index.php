<?php declare(strict_types = 1); 

require_once __DIR__.'/vendor/autoload.php'; 

use App\Model\User;
use Carbon\Carbon;


$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();

echo $tomorrow, PHP_EOL;
echo $lastWeek, PHP_EOL;
echo Carbon::parse('2019-07-23 14:51')->locale('fr_FR')->isoFormat('LLLL');

$user = new User();