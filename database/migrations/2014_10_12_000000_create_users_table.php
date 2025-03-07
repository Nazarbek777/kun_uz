<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*/
public function up()
{
Schema::create('users', function (Blueprint $table) {
$table->id();
$table->string('name', 55);
$table->string('email', 55);
$table->timestamp('email_verified_at')->nullable();
$table->text('password');
$table->rememberToken();
$table->timestamps();
});
}

/**
* Reverse the migrations.
*/
public function down()
{
Schema::dropIfExists('users');
}
};
