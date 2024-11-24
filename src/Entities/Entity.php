<?php declare(strict_types=1);

namespace PhpstanGenerics\Entities;

use PhpstanGenerics\Entities\AEntity;

/**
 * @template T of AEntity
 * @template-extends AEntity<T>
 */
class Entity extends AEntity
{
}
