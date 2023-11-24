<?php
	//check if the database file exists and create a new if not
	if(!is_file('../db/dmbuildingcleaning.sqlite3')){
		file_put_contents('../db/dmbuildingcleaning.sqlite3', null);
	}
    //Create a new SQLite3 Database
    $db = new SQLite3('../db/dmbuildingcleaning.sqlite3');

    //Create a new table to our database 
    $query = "CREATE TABLE IF NOT EXISTS reviews (review_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, firstname STRING, lastname STRING, location STRING, review_message STRING)";
    $db->exec($query);

?>
