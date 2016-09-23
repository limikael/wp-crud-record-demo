<?php

require_once __DIR__."/../ext/wprecord/WpRecord.php";

class Apartment extends WpRecord {
	public static function initialize() {
		self::field("id","integer not null auto_increment");
		self::field("title","varchar(255) not null");
		self::field("address","varchar(255) not null");
		self::field("rooms","varchar(255) not null");
	}
}