<?php
use CodingAvenue\Proof\Code;
use PHPUnit\Framework\TestCase;

class CreateAutoloaderFunctionMainTest extends TestCase
{
    protected static $code;

    public static function setupBeforeClass()
    {
        self::$code = new Code(getcwd() . "/" . getenv("TEST_INDEX"));
    }

    public function testPhpStartTag()
    {
        $checkStart = self::$code->codeStartCheck();

        $this->assertEquals(true, $checkStart, "Expecting the `<?php` tag on the first line.");
    }

    public function testActualCode()
    {
        $evaluator = self::$code->evaluator();
        $evaled    = $evaluator->evaluate();
        $expected  = "The Cat is an adult animal.";

        $this->assertEquals($expected, $evaled['output'], "Expected output is \"$expected\".");
    }

    public function testPetMammalVariable()
    {
        $petMammal = self::$code->find('variable[name="petMammal"]');

        $this->assertEquals(2, $petMammal->count(), "Expecting two occurrences of the variable named 'petMammal'.");
    }

    public function testInstantiation()
    {
        $nodes=self::$code->find('instantiate[class="Mammal"]');

        $this->assertEquals(1, $nodes->count(), "Expecting an instantiation statement of the 'Mammal' class.");
    } 

    public function testDisplayCall()
    {
        $display = self::$code->find('method-call[name="display", variable="petMammal"]');

        $this->assertEquals(1, $display->count(), "Expecting one 'display()' method call of 'petMammal'.");
    }

    public function testRequireOnceCall()
    {
        $nodes = self::$code->find('include[type="require_once"]');

        $this->assertEquals(1, $nodes->count(), "Expecting one `require_once()` statement.");
    }

    public function testRequireOnceCallArgs()
    {
        $nodes = self::$code->find('include[type="require_once"]');
        $string = $nodes->find('string[value="/includes/autoload.php"]');

        $this->assertEquals(1, $string->count(), "Expecting `/includes/autoload.php` as an argument in the `require_once()` statement.");
    }
}