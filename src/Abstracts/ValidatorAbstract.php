<?php
namespace Int\Validation\Abstracts;

use Int\Validation\Interfaces\ValidatorInterface;

abstract class ValidatorAbstract implements ValidatorInterface
{
    protected $options;

    protected $name;

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

    public function setName(string $validatorName): ValidatorInterface
    {
        $this->name = $validatorName;
        return $this;
    }

    public function getName(): string
    {
        return $this->name ?: get_called_class();
    }

    abstract public function validate($value): bool;
}
