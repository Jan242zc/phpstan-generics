<?php declare(strict_types=1);

namespace PhpstanGenerics\Services;

use PhpstanGenerics\Entities\Entity;
use PhpstanGenerics\Services\AService;

/**
 * @template T of Entity
 * @template-extends AService<T>
 */
class Service extends AService
{

}