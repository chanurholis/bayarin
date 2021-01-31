<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFieldClassroomIdToClassroomStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('students', 'classroom_id')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropColumn('classroom_id');
            });
        }

        Schema::table('students', function (Blueprint $table) {
            $table->integer('classroom')->after('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('students', 'classroom_id')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropColumn('classroom');
            });
        }

        Schema::table('students', function (Blueprint $table) {
            $table->integer('classroom_id')->after('address');
        });
    }
}
