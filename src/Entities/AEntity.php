<?php declare(strict_types = 1);

namespace PhpstanGenerics\Entities;

/**
 * @template T
 */
abstract class AEntity
{
  /**
   * @return void
   */
  public function saySomething(): void
  {
    echo 'Something.';
  }
}
