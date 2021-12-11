<?php

use App\Models\shedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shedules', function (Blueprint $table) {
            $table->id();
            $table->string('name', );
            $table->string('day', 20);
            $table->string('arrival');
            $table->string('leave');
            $table->timestamps();
        });

        $this->newShedules('João Lima santo', 'Segunda-feira', '08:00', '18:00');
        $this->newShedules('Roberto santo lima', 'Segunda-feira', '09:00', '19:00');
        $this->newShedules('Maria flores lima', 'Terça-feira', '07:00', '14:00');
        $this->newShedules('Claudete lima santo', 'Terça-feira', '12:00', '20:00');
        $this->newShedules('Fabiano santo lima', 'Terça-feira', '13:00', '17:10');
        $this->newShedules('João cleber lima', 'Quarta-feira', '08:40', '18:30');
        $this->newShedules('Ricado neto lima', 'Quarta-feira', '09:23', '19:56');
        $this->newShedules('Roberto santo lima', 'Quinta-feira', '07:00', '14:23');
        $this->newShedules('Matheus lima santo', 'Quinta-feira', '12:00', '20:10');
        $this->newShedules('Fabiano neto lima', 'Sexta-feira', '13:54', '17:59');
        $this->newShedules('Ivanete lima chin', 'Sexta-feira', '08:54', '13:59');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shedules');
    }

    public function newShedules($name, $day, $arrival, $leave)
    {
        $cad = new shedule();
        $cad->name = $name;
        $cad->day = $day;
        $cad->arrival = $arrival;
        $cad->leave = $leave;
        $cad->save();
    }
}
