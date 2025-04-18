<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\TokenParser;

use Symfony\Bridge\Twig\Node\FormThemeNode;
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Node;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

/**
 * Token Parser for the 'form_theme' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormThemeTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
        $lineno = $token->getLine();
        $stream = $this->parser->getStream();

        $parseExpression = method_exists($this->parser, 'parseExpression')
            ? $this->parser->parseExpression(...)
            : $this->parser->getExpressionParser()->parseExpression(...);

        $form = $parseExpression();
        $only = false;

        if ($this->parser->getStream()->test(Token::NAME_TYPE, 'with')) {
            $this->parser->getStream()->next();
            $resources = $parseExpression();

            if ($this->parser->getStream()->nextIf(Token::NAME_TYPE, 'only')) {
                $only = true;
            }
        } else {
            $resources = new ArrayExpression([], $stream->getCurrent()->getLine());
            do {
                $resources->addElement($parseExpression());
            } while (!$stream->test(Token::BLOCK_END_TYPE));
        }

        $stream->expect(Token::BLOCK_END_TYPE);

        return new FormThemeNode($form, $resources, $lineno, $this->getTag(), $only);
    }

    public function getTag(): string
    {
        return 'form_theme';
    }
}
