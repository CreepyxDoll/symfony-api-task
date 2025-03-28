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

namespace ApiPlatform\GraphQl\Resolver\Stage;

use ApiPlatform\Metadata\GraphQl\Operation;
use GraphQL\Error\Error;

/**
 * Security post validation stage of GraphQL resolvers.
 *
 * @author Vincent Chalamon <vincentchalamon@gmail.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @deprecated
 */
interface SecurityPostValidationStageInterface
{
    /**
     * @throws Error
     */
    public function __invoke(string $resourceClass, Operation $operation, array $context): void;
}
