<?php

use App\Models\item;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount');
            $table->string('brand');
            $table->string('product_warranty');
            $table->timestamps();
        });

        $this->newItem("Saco de Lixo", 50, "Limpe Sempre", '1 Anos');
        $this->newItem("Luvas", 1100, "Limpeza++", '7 Anos');
        $this->newItem("Óculos de Proteção", 80, "AxxxxT", '1 Anos');
        $this->newItem("Espátulas de Remoção", 120, "Limpeza++", '6 meses');
        $this->newItem("Detergente", 12000, "Limpeza++", '2 Anos');
        $this->newItem("Sabão em Pó", 15000, "Omo", '2 Anos');
        $this->newItem("Sabão de Álcool", 2000, "Limpe Sempre", '2 Anos');
        $this->newItem("Esponja", 30000, "Clean77", '15 dias');
        $this->newItem("Palha de Aço", 8000, "Limpeza++", '6 meses');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }

    private function newItem($name, $amount, $brand, $product_warranty) {
        $newItem = new item();
        $newItem->name = $name;
        $newItem->amount = $amount;
        $newItem->brand = $brand;
        $newItem->product_warranty = $product_warranty;
        $newItem->save();
    }
}
