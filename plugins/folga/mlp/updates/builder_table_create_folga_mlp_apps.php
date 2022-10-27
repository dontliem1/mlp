<?php namespace Folga\Mlp\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateFolgaMlpApps extends Migration
{
    public function up()
    {
        Schema::create('folga_mlp_apps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name');
            $table->date('birthday');
            $table->string('city');
            $table->string('job');
            $table->text('contact');
            $table->text('achievements');
            $table->string('level');
            $table->string('title');
            $table->text('team');
            $table->text('social');
            $table->string('project1');
            $table->text('about1');
            $table->date('start1');
            $table->date('finish1');
            $table->string('area1');
            $table->string('geography1');
            $table->string('quantity1');
            $table->text('achievements1');
            $table->text('social1');
            $table->text('media1');
            $table->string('vk1');
            $table->string('project2')->nullable();
            $table->text('about2')->nullable();
            $table->date('start2')->nullable();
            $table->date('finish2')->nullable();
            $table->string('area2')->nullable();
            $table->string('geography2')->nullable();
            $table->string('quantity2')->nullable();
            $table->text('achievements2')->nullable();
            $table->text('social2')->nullable();
            $table->text('media2')->nullable();
            $table->string('vk2')->nullable();
            $table->string('project3')->nullable();
            $table->text('about3')->nullable();
            $table->date('start3')->nullable();
            $table->date('finish3')->nullable();
            $table->string('area3')->nullable();
            $table->string('geography3')->nullable();
            $table->string('quantity3')->nullable();
            $table->text('achievements3')->nullable();
            $table->text('social3')->nullable();
            $table->text('media3')->nullable();
            $table->string('vk3')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('folga_mlp_apps');
    }
}
