<?php
namespace Int\Validation\Interfaces;

interface ValidatorInterface
{
    /**
     * @param array $options
     * @return ValidatorInterface
     */
    public function setOptions(array $options): ValidatorInterface;

    /**
     * @return array $options
     */
    public function getOptions(): array;

    /**
     * @param string $optionName
     * @return mixed|null $options
     */
    public function getOption(string $optionName);

    /**
     * @param string $validatorName
     * @return ValidatorInterface
     */
    public function setName(string $validatorName): ValidatorInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param mixed $value
     * @return bool
     */
    public function validate($value): bool;
}
