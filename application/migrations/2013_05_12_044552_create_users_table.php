<?php

class Create_Users_Table {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 64);
			$table->string('password', 250);
			$table->string('email', 250);
			$table->string('status', 12);
			$table->timestamps();
		});


		DB::table('users')->insert(array(
	        array('username' => 'jdelacruz', 'email' => 'hello@jdelacruz.com', 'status' => 'active'),
	        array('username' => 'tedmdelacruz', 'email' => 'hello@tedmdelacruz.com', 'status' => 'active'),
	        array('username' => 'jtravolta', 'email' => 'hello@jtravolta.com', 'status' => 'active')                          
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}