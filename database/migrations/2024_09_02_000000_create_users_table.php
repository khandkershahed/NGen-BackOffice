<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('username', 200)->unique()->nullable();
            $table->string('email', 200)->unique();
            $table->string('phone', 200)->nullable();
            $table->string('profile_image', 200)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 200)->nullable();
            $table->string('country', 200)->nullable();
            $table->string('postal', 200)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('company_name', 200)->nullable();
            // Common Columns for Both Clients and Partners
            $table->enum('user_type', ['client', 'partner', 'job_seeker'])->default('job_seeker');
            // Client-specific Columns
            $table->text('about')->nullable();
            $table->string('client_id', 200)->unique()->nullable();
            $table->string('support_tier', 200)->nullable();
            $table->text('support_tier_description')->nullable();
            $table->enum('client_type', ['online', 'corporate'])->default('online')->nullable();
            $table->json('sector')->nullable();
            $table->json('sub_sector')->nullable();
            $table->text('area')->nullable();
            $table->string('contact_person', 200)->nullable();
            $table->string('designation', 200)->nullable();
            $table->string('department', 200)->nullable();
            $table->string('official_phone', 200)->nullable();
            $table->string('client_status', 200)->nullable();
            $table->string('tier', 200)->nullable();
            $table->text('comments')->nullable();
            // Partner-specific Columns
            $table->string('company_phone_number', 200)->nullable();
            $table->string('company_logo', 200)->nullable();
            $table->text('company_url')->nullable();
            $table->date('company_established_date')->nullable();
            $table->text('company_address')->nullable();
            $table->string('vat_number', 200)->nullable();
            $table->string('tax_number', 200)->nullable();
            $table->string('trade_license_number', 200)->nullable();
            $table->string('tin_number', 200)->nullable();
            $table->string('tin', 200)->nullable()->comment('pdf');
            $table->string('bin_certificate', 200)->nullable()->comment('pdf');
            $table->string('trade_license', 200)->nullable()->comment('pdf');
            $table->string('audit_paper', 200)->nullable()->comment('pdf');
            $table->json('industry_id_percentage')->nullable()->comment('multi_id');
            $table->json('product', 200)->nullable()->comment('multi_id');
            $table->json('solution', 200)->nullable()->comment('multi_id');
            $table->json('working_country', 200)->nullable()->comment('multi_id');
            $table->string('yearly_revenue', 200)->nullable()->comment('dropdown-select');

            $table->string('last_seen', 200)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 200);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
