<?php

namespace App;

use App\Interfaces\EmployeeInterface;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model implements EmployeeInterface
{
    protected $skills = [  'createTasks' ];

    public function getSkills()
    {
        return $this->skills;
    }

    public function showSkills()
    {
        $data = '';
        foreach($this->skills as $skill) {
            $data .= '- ' . $skill . PHP_EOL;
        }
        return $data;
    }
}
