# Database
    # https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/learn/lecture/21441882#overview
# outros

# outros


 public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->text('descricao')->nullable();
            $table->integer('peso')->nullable();
            $table->float('preco_venda', 8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo');
            $table->timestamps();
        });
    }