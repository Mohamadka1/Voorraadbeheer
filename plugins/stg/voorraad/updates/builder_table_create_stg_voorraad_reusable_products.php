<?php namespace stg\Voorraad\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStgVoorraadReusableProducts extends Migration
{
    public function up()
    {
        Schema::create('stg_voorraad_reusable_products', function($table)
        {
     	    $table->id();
            $table->string('name')->unique();
            $table->string('invoice_id')->unique();
            $table->string('status');
            $table->integer('total')->unsigned();
            $table->integer('stock')->unsigned();
            $table->integer('min_stock')->unsigned();
            $table->timestamps();
    
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stg_voorraad_reusable_products');
    }
}
