<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrawlerActivityLogsTable extends Migration {

	public function up()
	{
		Schema::create('crawler_activity_logs', function(Blueprint $table) {
			$table->bigIncrements('crawler_activity_log_id');
			$table->integer('crawler_id')->unsigned()->index();
			$table->enum('status', array('started', 'prepared', 'crawled', 'validated', 'reported', 'finished'))->index();
			$table->text('message')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('crawler_activity_logs');
	}
}