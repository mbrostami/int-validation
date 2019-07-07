<?php
namespace Int\Validation\Abstracts;

use Int\Validation\Interfaces\ValidatorInterface;

abstract class ValidatorAbstract implements ValidatorInterface
{
    protected $options;

    public function setOptions(array $options): ValidatorInterface
    {
        $this->options = $options;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getOption(string $optionName)
    {
        return $this->options[$optionName] ?? null;
    }

    abstract public function validate($value): bool;
}
