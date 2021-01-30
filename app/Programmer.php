<?php

namespace App;

use App\Interfaces\EmployeeInterface;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model implements EmployeeInterface
{
    protected $skills = [  'writeCode', 'testCode', 'talkManager' ];

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
