<?php
/**
 * Slim Framework (https://slimframework.com)
 *
 * @license https://github.com/slimphp/Slim/blob/4.x/LICENSE.md (MIT License)
 */

declare(strict_types=1);

namespace Slim\Interfaces;

interface Psr17FactoryProviderInterface
{
    /**
     * @return array
     */
    public static function getFactories(): array;

    /**
     * @var array
     */
    public static function setFactories(array $factories): void;

    /**
     * @param string $factory
     * @return void
     */
    public static function addFactory(string $factory): void;
}
