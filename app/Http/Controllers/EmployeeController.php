<?php

namespace App\Http\Controllers;

use App\Interfaces\EmployeeInterface;
use App\Services\EmployeeService;
use Illuminate\Http\Request;
use App\Designer;
use App\Tester;
use App\Programmer;
use App\Manager;

class EmployeeController extends Controller
{
    /**
     * @var array
     */
    protected $employees = [
        'manager' => 'Manager',
        'tester' => 'Tester',
        'designer' => 'Designer',
        'programmer' => 'Programmer',
    ];

    protected $model = null;

    protected $service = null;

    public function __construct($employee)
    {
        if(isset($this->employees[$employee])) {
            $this->model = new $this->employees[$employee]();
        }
        $this->service = new EmployeeService($this->model);
    }


}
