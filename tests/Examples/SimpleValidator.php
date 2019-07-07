<?php
namespace Int\Tests\Examples;

use Int\Validation\Abstracts\ValidatorAbstract;

class SimpleValidator extends ValidatorAbstract
{
    public function validate($value): bool
    {
        return $this->options['test'] ?? true;
    }
}
