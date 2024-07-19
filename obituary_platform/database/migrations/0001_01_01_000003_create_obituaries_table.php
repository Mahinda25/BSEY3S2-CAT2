public function up()
{
    Schema::create('obituaries', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('date_of_birth');
        $table->date('date_of_death');
        $table->text('content');
        $table->string('author');
        $table->timestamp('submission_date')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->string('slug')->unique();
        $table->timestamps();
    });
}
