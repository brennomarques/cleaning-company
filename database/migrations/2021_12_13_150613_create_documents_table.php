<?php

use App\Models\Document;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 20);
            $table->string('document_size');
            $table->integer('subscription_number');
            $table->string('responsible_signature', 20);
            $table->integer('number_pages');
            $table->timestamps();
        });

        $this->newDocument('Contrado de compras', '2 mb', 4, 'RRmmaria', 3);
        $this->newDocument('Contrado de estoque', '6 mb', 4, 'JdJose', 3);
        $this->newDocument('Contrado de vendas', '1 mb', 4, 'FgRonaldo', 3);
        $this->newDocument('Contrado de Aluguel', '7 mb', 4, 'RRsolução', 3);
        $this->newDocument('Contrado de carros', '8 mb', 4, 'RRLucas', 3);
        $this->newDocument('Contrado de casas', '1 mb', 4, 'RRfelipe', 3);
        $this->newDocument('Aluguel de chacaras', '10 mb', 4, 'RRJose', 3);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }

    public function newDocument($title, $document_size, $subscription_number, $responsible_signature, $number_pages)
    {
        $cad = new Document();
        $cad->title = $title;
        $cad->document_size = $document_size;
        $cad->subscription_number = $subscription_number;
        $cad->responsible_signature = $responsible_signature;
        $cad->number_pages = $number_pages;
        $cad->save();
    }
}
