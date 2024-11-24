<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PhpstanGenerics\Entities\FinalEntity;
use PhpstanGenerics\Services\FinalService;
use PhpstanGenerics\Entities\OtherFinalEntity;
use PhpstanGenerics\Services\OtherFinalService;

$finalService = new FinalService();
$finalEntity = new FinalEntity();
$otherFinalService = new OtherFinalService();
$otherFinalEntity = new OtherFinalEntity();

$finalService->makeEntitiesSaySomething([$finalEntity]);
$otherFinalService->makeEntitiesSaySomething([$otherFinalEntity]);

// Executes but PhpStan throws an error.
$finalService->makeEntitiesSaySomething([$otherFinalEntity]);
