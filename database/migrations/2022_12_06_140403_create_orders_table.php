<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('farmer_id');
            $table->string('farmer_name');
            $table->string('order_date');
            $table->string('order_price');
            $table->string('order_collected');
            $table->integer('product_or_service_id');
            $table->timestamps();
            $table->enum('Status', ['Active', 'Completed', 'Cancelled','Accepted','Denied'])->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};