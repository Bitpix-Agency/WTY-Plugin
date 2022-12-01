<?php namespace JakeFeeley\PlayYorkshire\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJakefeeleyPlayyorkshireGolfClubs12 extends Migration
{
    public function up()
    {
        Schema::table('jakefeeley_playyorkshire_golf_clubs', function($table)
        {
            $table->boolean('is_published')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('jakefeeley_playyorkshire_golf_clubs', function($table)
        {
            $table->dropColumn('is_published');
        });
    }
}
