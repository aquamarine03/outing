<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUserDetailsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("user_details", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id');
						$table->string('address',100);
						$table->string('gender',255)->nullable();
						$table->integer('age')->nullable();
						$table->timestamps();
						$table->softDeletes();

                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("user_details");
                }
            }
        