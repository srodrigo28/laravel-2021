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


  Schema::create('produto_detalhes', function (Blueprint $table) {
    $table->id();
    // fild de ligação abaixo
    $table->unsignedBigInteger('produto_id');
    $table->float('comprimento', 8,2);
    $table->float('largura', 8,2);
    $table->float('altura', 8,2);

    // constraint
    $table->foreign('produto_id')->references('id')->on('produtos');
    $table->unique('produto_id');
    $table->timestamps();
});

