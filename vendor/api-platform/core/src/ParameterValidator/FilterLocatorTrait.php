<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\ParameterValidator;

use ApiPlatform\Metadata\Exception\InvalidArgumentException;
use ApiPlatform\Metadata\FilterInterface;
use Psr\Container\ContainerInterface;

/**
 * Manipulates filters with a backward compatibility between the new filter locator and the deprecated filter collection.
 *
 * @internal
 *
 * @author Baptiste Meyer <baptiste.meyer@gmail.com>
 */
trait FilterLocatorTrait
{
    private ?ContainerInterface $filterLocator = null;

    /**
     * Sets a filter locator with a backward compatibility.
     */
    private function setFilterLocator(?ContainerInterface $filterLocator, bool $allowNull = false): void
    {
        if ($filterLocator instanceof ContainerInterface || (null === $filterLocator && $allowNull)) {
            $this->filterLocator = $filterLocator;
        } else {
            throw new InvalidArgumentException(\sprintf('The "$filterLocator" argument is expected to be an implementation of the "%s" interface%s.', ContainerInterface::class, $allowNull ? ' or null' : ''));
        }
    }

    /**
     * Gets a filter with a backward compatibility.
     */
    private function getFilter(string $filterId): ?FilterInterface
    {
        if ($this->filterLocator && $this->filterLocator->has($filterId)) {
            return $this->filterLocator->get($filterId);
        }

        return null;
    }
}
