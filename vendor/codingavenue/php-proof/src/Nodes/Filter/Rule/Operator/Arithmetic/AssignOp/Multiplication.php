<?php

namespace CodingAvenue\Proof\Nodes\Filter\Rule\Operator\Arithmetic\AssignOp;

use CodingAvenue\Proof\Nodes\Filter\Rule\Rule;
use CodingAvenue\Proof\Nodes\Filter\Rule\RuleInterface;

class Multiplication extends Rule implements RuleInterface
{
    const CLASS_ = '\PhpParser\Node\Expr\AssignOp\Mul';

    public function getRule(): callable
    {
        $class = self::CLASS_;

        return function($node) use ($class) {
            return $node instanceof $class;
        };
    }

    public function allowedOptionalFilter()
    {
        return array();
    }
}
