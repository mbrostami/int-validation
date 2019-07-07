<?php
namespace Int\Tests\Validation;

use PHPUnit\Framework\TestCase;
use Int\Tests\Examples\SimpleValidator;
use Int\Tests\Examples\SimpleValidation;

class SimpleValidationTest extends TestCase
{
    public function testValidatorName()
    {
        $validator = new SimpleValidator();
        $validator->setName('field');

        $validation = new SimpleValidation();
        $validation->addValidator($validator);

        $this->assertTrue($validation->validate([
            'field' => true
        ]));
        $this->assertFalse($validation->validate([
            'field' => false
        ]));
    }

    public function testDefaultValidatorName()
    {
        $validator = new SimpleValidator();

        $validation = new SimpleValidation();
        $validation->addValidator($validator);

        $this->assertTrue($validation->validate([
            SimpleValidator::class => true
        ]));
        $this->assertFalse($validation->validate([
            SimpleValidator::class => false
        ]));
    }

    public function testWrongNameForValidator()
    {
        $validator = new SimpleValidator();

        $validation = new SimpleValidation();
        $validation->addValidator($validator);

        $this->assertFalse($validation->validate([
            'wrong_name' => false
        ]));
    }

    public function testEmptyValidator()
    {
        $validation = new SimpleValidation();
        $this->assertTrue($validation->validate([]));
    }
}
