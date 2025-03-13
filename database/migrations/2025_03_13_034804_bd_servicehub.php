<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('IdClient');  // Cambiado a bigIncrements
            $table->string('FirstName', 100);
            $table->string('LastName', 100);
            $table->string('Email', 150)->unique();
            $table->string('PhoneNumber', 15);
            $table->string('Password', 255);
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('IdLocation');  // Cambiado a bigIncrements
            $table->unsignedBigInteger('IdClient');
            $table->foreign('IdClient')->references('IdClient')->on('clients')->onDelete('cascade');  // Corregida la clave foránea
            $table->string('Address', 255);
            $table->string('City', 100);
            $table->string('State', 100);
            $table->string('postal_code', 10);
            $table->string('Country', 50);
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('IdService');  // Cambiado a bigIncrements
            $table->string('NameService', 100);
            $table->text('Description');
            $table->timestamps();
        });

        Schema::create('agenda', function (Blueprint $table) {
            $table->bigIncrements('IdAgenda');  // Cambiado a bigIncrements
            $table->unsignedBigInteger('IdClient');
            $table->foreign('IdClient')->references('IdClient')->on('clients')->onDelete('cascade');  // Corregida la clave foránea
            $table->unsignedBigInteger('IdService');
            $table->foreign('IdService')->references('IdService')->on('services')->onDelete('cascade');  // Corregida la clave foránea
            $table->dateTime('DateAgenda');
            $table->enum('AgendaStatus', ['pending', 'confirmed', 'cancelled']);
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('IdReview');  // Cambiado a bigIncrements
            $table->unsignedBigInteger('IdAgenda');
            $table->foreign('IdAgenda')->references('IdAgenda')->on('agenda')->onDelete('cascade');  // Corregida la clave foránea
            $table->integer('Rating');
            $table->text('Comment');
            $table->dateTime('DateReview');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('IdCategory');  // Cambiado a bigIncrements
            $table->string('NameCategory', 100);
            $table->text('Description');
            $table->timestamps();
        });

        Schema::create('service_category', function (Blueprint $table) {
            $table->unsignedBigInteger('IdService');
            $table->foreign('IdService')->references('IdService')->on('services')->onDelete('cascade');  // Corregida la clave foránea
            $table->unsignedBigInteger('IdCategory');
            $table->foreign('IdCategory')->references('IdCategory')->on('categories')->onDelete('cascade');  // Corregida la clave foránea
        });

        Schema::create('keywords', function (Blueprint $table) {
            $table->bigIncrements('IdKeyWord');  // Cambiado a bigIncrements
            $table->string('Word', 45);
            $table->unsignedBigInteger('IdCategory');
            $table->foreign('IdCategory')->references('IdCategory')->on('categories')->onDelete('cascade');  // Corregida la clave foránea
            $table->timestamps();
        });

        Schema::create('professionals', function (Blueprint $table) {
            $table->bigIncrements('IdProfessional');  // Cambiado a bigIncrements
            $table->string('FirstName', 45);
            $table->string('LastName', 45);
            $table->string('CURP', 18)->unique();
            $table->string('RFC', 13)->unique();
            $table->text('Experience');
            $table->string('Availability', 100);
            $table->string('Email', 150)->unique();
            $table->string('Password', 255);
            $table->timestamps();
        });

        Schema::create('professional_service', function (Blueprint $table) {
            $table->unsignedBigInteger('IdProfessional');
            $table->foreign('IdProfessional')->references('IdProfessional')->on('professionals')->onDelete('cascade');  // Corregida la clave foránea
            $table->unsignedBigInteger('IdService');
            $table->foreign('IdService')->references('IdService')->on('services')->onDelete('cascade');  // Corregida la clave foránea
            $table->string('Email', 45);
            $table->integer('PhoneNumber');
            $table->decimal('PriceHour', 10, 2);
        });

        Schema::create('type_suscriptions', function (Blueprint $table) {
            $table->bigIncrements('IdTypeSuscription');  // Cambiado a bigIncrements
            $table->string('NameSuscription', 45);
            $table->string('Description', 45);
            $table->decimal('Price', 10, 2);
            $table->timestamps();
        });

        Schema::create('suscriptions', function (Blueprint $table) {
            $table->bigIncrements('IdSuscription');  // Cambiado a bigIncrements
            $table->unsignedBigInteger('IdProfessional');
            $table->foreign('IdProfessional')->references('IdProfessional')->on('professionals')->onDelete('cascade');  // Corregida la clave foránea
            $table->dateTime('DateStart');
            $table->dateTime('EndDate');
            $table->unsignedBigInteger('IdTypeSuscription');
            $table->foreign('IdTypeSuscription')->references('IdTypeSuscription')->on('type_suscriptions')->onDelete('cascade');  // Corregida la clave foránea
            $table->enum('StatusSuscription', ['active', 'expired', 'cancelled']);
            $table->timestamps();
        });

        Schema::create('type_payments', function (Blueprint $table) {
            $table->bigIncrements('IdTypePayment');  // Cambiado a bigIncrements
            $table->string('Type', 45);
            $table->string('Entity', 45);
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('NoReceipt');  // Cambiado a bigIncrements
            $table->unsignedBigInteger('IdSuscription');
            $table->foreign('IdSuscription')->references('IdSuscription')->on('suscriptions')->onDelete('cascade');  // Corregida la clave foránea
            $table->enum('Status', ['pending', 'completed', 'failed']);
            $table->decimal('Amount', 10, 2);
            $table->unsignedBigInteger('IdTypePayment');
            $table->foreign('IdTypePayment')->references('IdTypePayment')->on('type_payments')->onDelete('cascade');  // Corregida la clave foránea
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('type_payments');
        Schema::dropIfExists('suscriptions');
        Schema::dropIfExists('type_suscriptions');
        Schema::dropIfExists('professional_service');
        Schema::dropIfExists('professionals');
        Schema::dropIfExists('keywords');
        Schema::dropIfExists('service_category');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('agenda');
        Schema::dropIfExists('services');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('clients');
    }
};
