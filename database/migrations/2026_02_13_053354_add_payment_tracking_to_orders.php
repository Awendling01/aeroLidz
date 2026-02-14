<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('payment_method')->after('payment_status')->nullable();
            $table->string('ach_transaction_id')->nullable();
            $table->timestamp('payment_due_date')->nullable();
            $table->timestamp('payment_completed_at')->nullable();
            $table->decimal('late_fee', 10, 2)->default(0);
            $table->boolean('reminder_sent')->default(false);
            $table->timestamp('reminder_sent_at')->nullable();
            $table->text('payment_notes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'payment_method', 'ach_transaction_id', 'payment_due_date',
                'payment_completed_at', 'late_fee', 'reminder_sent',
                'reminder_sent_at', 'payment_notes'
            ]);
        });
    }
};
