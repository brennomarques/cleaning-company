<?php

use App\Models\employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role', 150);
            $table->float('payment', 8, 2);
            $table->string('contract_time');
            $table->timestamps();
        });

        $this->newEmployees('João Ramos lima','Supervisor de limpeza','600.50', '2 anos');
        $this->newEmployees('Felipe netto santo','Jardineiro','300.80', '6 anos');
        $this->newEmployees('Flores maria lima','Serviços gerais','1500.80', '12 anos');
        $this->newEmployees('Claudete santo oliveira','Serviços mecânico','800.00', '8 anos');
        $this->newEmployees('Ronaldo lima chin','Manutenção','1800.50', '2 anos');
        $this->newEmployees('Renato rocha lima','Encanador','1800.50', '2 anos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }

    public function newEmployees($name,$role,$payment,$contract_time){
        $cad = new employee();
        $cad->name = $name;
        $cad->role = $role;
        $cad->payment = $payment;
        $cad->contract_time = $contract_time;
        $cad->save();
    }
}
