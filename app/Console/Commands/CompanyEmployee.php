<?php

namespace App\Console\Commands;

use App\Http\Controllers\EmployeeController;
use Illuminate\Console\Command;

class CompanyEmployee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:employee {employee}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a list of worker skills: programmer, designer, tester, manager';

    protected $employee = null;

    /**
     * Create a new command instance.
     *
     * @param EmployeeController $employee
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->employee = new EmployeeController($this->argument('employee'));
        $this->employee->showSkills();
    }
}
