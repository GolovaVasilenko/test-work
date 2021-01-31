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
        'manager' => Manager::class,
        'tester' => Tester::class,
        'designer' => Designer::class,
        'programmer' => Programmer::class,
    ];
    /**
     * @var null
     */
    protected $model = null;
    /**
     * @var EmployeeService|null
     */
    protected $service = null;

    /**
     * EmployeeController constructor.
     * @param $employee
     */
    public function __construct($employee)
    {   //TODO : using try catch
        if(isset($this->employees[$employee])) {
            $this->model = new $this->employees[$employee];
            $this->service = new EmployeeService($this->model);
        }
    }

    public function showSkills()
    {
        echo $this->service->showAllSkills();
    }

    public function employeeCan($skill)
    {
        echo $this->service->can($skill) ? 'Yes' : 'Not';
    }
}
