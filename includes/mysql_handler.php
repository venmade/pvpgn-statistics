<?php

class sql_handle {

    var $db_connection;

    function db_connect($db_hostname, $db_username, $db_password, $db) {
        global $db_port;
        $this->db_connection = mysql_connect($db_hostname . ":" . $db_port, $db_username, $db_password) OR die("Connection Error to Mysql Server");
        mysql_select_db($db) OR die("Connection Error to Database");
        return $this->db_connection;
    }

    function sql_num_rows($result) {
        return mysql_num_rows($result);
    }

    function sql_fetch_row($query) {
        return mysql_fetch_row($query);
    }

    function sql_fetch_assoc($result) {
        return mysql_fetch_assoc($result);
    }

    function db_query($db_query) {
        $result = mysql_query($db_query, $this->db_connection) or die("Query: $db_query  <br /> Error: " . mysql_error() . "<br />");
        return $result;
    }

    function print_db_error($string) {
        if ($error_handle == "DIE") {
            die($string . "<br />\n<strong>MySQL Error:</strong>" . mysql_error($this->db_connection));
        } else if ($error_handle == "PRINT") {
            print "<hr />" . $string . "<br />\n<strong>MySQL Error:</strong>" . mysql_error($this->db_connection) . "<hr />";
        }
    }

    function db_fetch($db_result) {
        while ($value = mysql_fetch_assoc($db_result)) {
            $results[] = $value;
        }
        return $results;
    }

    function db_query_fetch($query) {
        $result = mysql_query($query, $this->db_connection) or $this->print_db_error("Failed to query Database<br />\nQuery: $query");
        if ($result) {
            for ($n = 0; $row = mysql_fetch_array($result); $n++) {
                $results[$n] = $row;
            }
        } else
            $results = array();
        return $results;
    }

    function db_disconnect() {
        mysql_close($this->db_connection);
    }

    function db_search($value, $column, $column_want, $table) {
        $query = "SELECT $column_want FROM $table WHERE `$column` LIKE '$value'";
        $result = mysql_query($query, $this->db_connection);
        while ($entry = mysql_fetch_assoc($result)) {
            $results[] = $entry;
        }
        return $results;
    }

}
