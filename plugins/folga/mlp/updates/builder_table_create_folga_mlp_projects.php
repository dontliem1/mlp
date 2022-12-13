<?php namespace Folga\Mlp\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateFolgaMlpProjects extends Migration
{
    public function up()
    {
        Schema::create('folga_mlp_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->smallInteger('year')->unsigned();
            $table->boolean('active');
            $table->string('slug');
            $table->string('link')->nullable();
            $table->text('gallery')->nullable();
            $table->text('content')->nullable();
            $table->text('team')->nullable();
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('folga_mlp_projects');
    }
}
