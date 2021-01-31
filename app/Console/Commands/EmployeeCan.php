<?php

namespace App\Console\Commands;

use App\Http\Controllers\EmployeeController;
use App\Services\EmployeeService;
use Illuminate\Console\Command;

class EmployeeCan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:can {employee} {skill}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get employee skills: programmer, designer, tester, manager';

    /**
     * Create a new command instance.
     *
     * @return void
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
        $employee = new EmployeeController($this->argument('employee'));
        $employee->employeeCan($this->argument('skill'));
    }
}
