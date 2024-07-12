<?php
// Exemple de contenu de la migration pour la table 'products'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->integer('stock');
        $table->foreignId('category_id')->constrained();
        $table->foreignId('vendor_id')->constrained();
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
