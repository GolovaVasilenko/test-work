<?php

namespace App;

use App\Interfaces\EmployeeInterface;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model implements EmployeeInterface
{
    protected $skills = [  'draw', 'talkManager' ];

    public function getSkills()
    {
        return $this->skills;
    }
}
