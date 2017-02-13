<?php

// db_type:           Database type (mysql, pgsql, etc.)
// db_host:           SQL Server Hostname or IP address
// db_port:           SQL Server port
// db_database:       SQL Database Name
// db_user:           SQL Username
// db_pass:           SQL Password
// db_prefix          SQL Database Prefix
$site_name = "PvPGN server";
$db_type = "mysql";
$db_host = "127.0.0.1";
$db_port = 3306;
$db_database = "pvpgn";
$db_user = "pvpgn";
$db_pass = "pvpgn_rocks";
$db_prefix = "";
$db_record = $db_prefix . "Record";
$db_bnet = $db_prefix . "BNET";
$db_profile = $db_prefix . "profile";
$db_teams = $db_prefix . "team";
$db_friend = $db_prefix . "friend";
$db_counters = $db_prefix . "counters";
$db_d2 = $db_prefix . "d2ladder";
$homepage = "http://www.myserver.net/";
$ladderroot = "http://ladders.myserver.net/";
$theme = "bnet";
$use_php_xslt = true; // only change this if you know you have xsltproc installed and not php-xslt
// for when you don't have php4-xslt but have the xsltproc command or sabcmd
// set pvpgn_dir to where you pvpgn directory is, include trailing slash
$xslt_command = "xsltproc";
$pvpgn_dir = "/usr/local/pvpgn";
$ladders_dir = $pvpgn_dir . "var/pvpgn/ladders/";
$w3ladder_xsl_file = getcwd() . "/themes/$theme/w3ladder.xsl";
$d2ladder_xml_file = $ladders_dir . "d2ladder.xml";
$d2ladder_xsl_file = getcwd() . "/themes/$theme/d2ladder.xsl";
// icon_levelx: Wins required for TFT icon
$icon_level1 = 25;
$icon_level2 = 50;
$icon_level3 = 100;
$icon_level4 = 200;
$icon_level5 = 500;
// site_theme:        Theme you want to run
// page_max:          How many players you want to display on one page
// default_game:      Defines stats for which game user will see on entering
// default_type:      Defines which type of game user will see on entering
// date_format:       Defines PHP date format used in stats displaying
// d2ladder_file:     Path on your system which shows ladder.D2DV location
// d2update_time:     Time to update your D2 DB (in seconds), 0 is off
// stats_version:     Don't change, just for easier version display
$site_theme = "bnet";
$page_max = "50";
$default_game = "W3XP";
$default_type = "solo";
$date_format = " F j - G:i";
$d2ladder_file = "/usr/local/pvpgn/var/pvpgn/ladders/ladder.D2DV";
$d2update_time = "3600";
$stats_version = "2.4.5";
// max_rank:          Maximum rank number allowed on your server
// default_sort_by:   Can be auth_lock, auth_admin, uid or acct_username
// default_sort_dir:  Can be DESC or ASC
$max_rank = "1000";
$default_sort_by = "auth_admin";
$default_sort_dir = "DESC";
// pvpgn_users:       Path on your system which shows user dir location
// use_files:         Defines whether we use files or database
$pvpgn_users = "/usr/local/pvpgn/var/pvpgn/users";
$use_files = false;
?>