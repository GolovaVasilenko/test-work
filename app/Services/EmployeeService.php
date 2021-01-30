<?php

namespace App\Services;

use App\Interfaces\CanInterface;
use App\Interfaces\EmployeeInterface;

class EmployeeService implements CanInterface
{
    protected $employee = null;

    public function __construct(EmployeeInterface $employee)
    {
        $this->employee = $employee;
    }

    public function showAllSkills()
    {
        $data = '';
        foreach($this->employee->getSkills() as $skill) {
            $data .= '- ' . $skill . PHP_EOL;
        }
        return $data;
    }

    public function can($skill)
    {
        return in_array($skill, $this->employee->getSkills());
    }
}
