<?php
namespace Int\Tests\Validation;

use PHPUnit\Framework\TestCase;
use Int\Tests\Examples\SimpleValidator;

class SimpleValidatorTest extends TestCase
{
    public function testImplementation()
    {
        $validator = new SimpleValidator();
        $this->assertTrue($validator->validate('value'));
    }

    public function testGetOption()
    {
        $validator = new SimpleValidator();
        $validator->setOptions([
            'test' => 'value'
        ]);
        $this->assertEquals('value', $validator->getOption('test'));
        $this->assertNull($validator->getOption('not_exists'));
    }

    public function testGetOptions()
    {
        $validator = new SimpleValidator();
        $validator->setOptions([
            'test' => 'value'
        ]);
        $this->assertEquals(['test' => 'value'], $validator->getOptions());
    }
}
