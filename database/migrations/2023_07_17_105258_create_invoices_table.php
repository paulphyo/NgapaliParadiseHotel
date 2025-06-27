<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained('reservations')->onDelete("cascade");
            $table->foreignId('pay_type_id')->nullable()->constrained('pay_types');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons');
            $table->integer('total_paid_mmk');
            $table->string('preferred_currency');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['reservation_id']); // Drop foreign key by column name
            $table->dropForeign(['pay_type_id']);    // Drop foreign key by column name
            $table->dropForeign(['coupon_id']);      // Drop foreign key by column name
        });
        Schema::dropIfExists('invoices');
    }
}
