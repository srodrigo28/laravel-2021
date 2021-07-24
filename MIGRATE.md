# https://laravel.com/docs/7.x/migrations

$table->id();
$table->timestamps();
$table->string('nome', 50);
$table->string('telefone', 25);
$table->string('email', 60);
$table->integer('motivo_contato', 1);
$table->text();
$table->decial('amount', 8,2);
$table->enum('level', ['easy', 'hard']);

