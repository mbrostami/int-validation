<?php
namespace Int\Tests\Validation;

use PHPUnit\Framework\TestCase;
use Int\Tests\Examples\SimpleValidator;

class SimpleValidatorTest extends TestCase
{
    public function testImplementation()
    {
        $validator = new SimpleValidator();
        $this->assertTrue($validator->validate('test'));
    }

    public function testSetOption()
    {
        $validator = new SimpleValidator();
        $validator->setOptions([
            'test' => false
        ]);
        $this->assertFalse($validator->validate('test'));
    }

    public function testGetOption()
    {
        $validator = new SimpleValidator();
        $validator->setOptions([
            'test' => 'value'
        ]);
        $this->assertEquals('value', $validator->getOption('test'));
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
