<?php

$config = require "config.php";

$db = new Database($config['database']);

$heading = "My Notes";

$query = "SELECT * FROM my_app.notes WHERE user_id = 1";

$notes = $db->query($query)->fetchAll();

require "views/notes.view.php";