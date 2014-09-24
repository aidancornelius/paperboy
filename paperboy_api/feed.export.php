<?php

require "authentication_header.fnc.php";

require "api.fnc.php";

require "settings.php";

$socket = ConnectToDatabase(configure_active_database());

?>

{
	[ "id":"1", "error":"true", ],
}