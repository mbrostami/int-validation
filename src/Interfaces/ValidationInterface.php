<?php
namespace Int\Validation\Interfaces;

interface ValidationInterface
{
    /**
     * @param ValidatorInterface $validator
     * @return ValidationInterface
     */
    public function addValidator(ValidatorInterface $validator): ValidationInterface;

    /**
     * @param array $values Associated array - validator names mapped to the values
     * @return bool
     */
    public function validate(array $values): bool;
}
