<?php

namespace Proofs;

use PHPUnit\Framework\TestCase;
use CodingAvenue\Proof\Code;

class Proof extends TestCase
{
    protected static $code;

    public static function setupBeforeClass() {
        self::$code = new Code();
    }

    public function testEvaluate()
    {
        $evaluator = self::$code->evaluator();
        $evaled    = $evaluator->evaluate();

        $error = null;

        if (isset($evaled['error'])) {
            $error = $evaled['error'];
        }

        $this->assertNull($error, "Code error found $error");
    }

    public function testMessDetection()
    {
        $analyzer   = self::$code->analyzer();
        $output     = $analyzer->messDetection();
        $violations = "";

        if (count($output)) {
            foreach ($output as $violation) {
                $violations .= sprintf("%s on Line %s Endline %s, ", $violation['message'], $violation['beginLine'], $violation['endLine']);
            }
        }

        $this->assertEquals("", $violations, "Found some mess - ".$violations);
    }
}
