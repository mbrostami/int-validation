<?php
namespace Int\Validation\Abstracts;

use Int\Validation\Interfaces\ValidationInterface;
use Int\Validation\Interfaces\ValidatorInterface;

abstract class ValidationAbstract implements ValidationInterface
{
    /**
     * @var ValidatorInterface[]
     */
    protected $validators = [];

    public function addValidator(ValidatorInterface $validator): ValidationInterface
    {
        $this->validators[] = $validator;
        return $this;
    }

    public function validate(array $values): bool
    {
        $valid = true;
        foreach ($this->validators as $validator) {
            $value = $values[$validator->getName()] ?? null;
            $valid &= $validator->validate($value);
        }
        return $valid;
    }
}
