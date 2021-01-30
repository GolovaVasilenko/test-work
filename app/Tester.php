<?php

namespace App;

use App\Interfaces\EmployeeInterface;
use Illuminate\Database\Eloquent\Model;

class Tester extends Model implements EmployeeInterface
{
    protected $skills = [  'createTasks', 'testCode', 'talkManager' ];

    public function getSkills()
    {
       return $this->skills;
    }
}
