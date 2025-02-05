<?php namespace stg\Voorraad\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStgVoorraadUsersProducts2 extends Migration
{
    public function up()
    {
        Schema::create('stg_voorraad_users_products', function($table)
        {
            $table->bigIncrements('id');
            $table->foreignId('product_id')->constrained('stg_voorraad_products')->onDelete('cascade');
            $table->string('user');
            $table->integer('old_stock')->unsigned();
            $table->integer('new_stock')->unsigned();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stg_voorraad_users_products');
    }
}
