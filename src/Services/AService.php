<?php declare(strict_types=1);

namespace PhpstanGenerics\Services;

use PhpstanGenerics\Entities\AEntity;

/**
 * @template T of AEntity
 */
abstract class AService
{
  /**
   * @param array<T> $entities
   * @return void
   */
  public function makeEntitiesSaySomething(array $entities): void
  {
    array_map(fn(AEntity $e) => $e->saySomething(), $entities);
  }
}