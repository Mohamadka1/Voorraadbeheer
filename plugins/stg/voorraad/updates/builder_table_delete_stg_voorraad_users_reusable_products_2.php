<?php namespace stg\Voorraad\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteStgVoorraadUsersReusableProducts2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('stg_voorraad_users_reusable_products');
    }
    
    public function down()
    {
        Schema::create('stg_voorraad_users_reusable_products', function($table)
        {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('reusable_product_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('old_stock')->unsigned();
            $table->integer('new_stock')->unsigned();
            $table->text('remarks')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
