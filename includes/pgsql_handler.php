<?php

class sql_handle {

    var $db_connection, $port;

    function db_connect($db_hostname, $db_username, $db_password, $db_name) {
        global $db_port;
        $this->db_connection = pg_connect("host=" . $db_hostname . " port=" . $db_port . " dbname=" . $db_name . " user=" . $db_username . " password=" . $db_password) OR die("Connection Error to PostgreSQL Server");
        return $this->db_connection;
    }

    function sql_num_rows($result) {
        return pg_num_rows($result);
    }

    function sql_fetch_row($query) {
        return pg_fetch_row($query);
    }

    function sql_fetch_assoc($result) {
        return pg_fetch_assoc($result);
    }

    function db_query($db_query) {
        $result = pg_query($this->db_connection, $db_query) or die("Query: $db_query  <br /> Error: " . pg_last_error($this->db_connection) . "<br />");
        return $result;
    }

    function print_db_error($string) {
        if ($error_handle == "DIE") {
            die($string . "<br />\n<strong>PostgreSQL Error:</strong>" . pg_last_error($this->db_connection));
        } else if ($error_handle == "PRINT") {
            print "<hr />" . $string . "<br />\n<strong>PostgreSQL Error:</strong>" . pg_last_error($this->db_connection) . "<hr />";
        }
    }

    function db_fetch($db_result) {
        while ($value = pg_fetch_assoc($db_result)) {
            $results[] = $value;
        }
        return $results;
    }

    function db_query_fetch($query) {
        $result = pg_query($this->db_connection, $query) or $this->print_db_error("Failed to query Database<br />\nQuery: $query");
        if ($result) {
            for ($n = 0; $row = pg_fetch_array($result); $n++) {
                $results[$n] = $row;
            }
        } else
            $results = array();
        return $results;
    }

    function db_disconnect() {
        pg_close($this->db_connection);
    }

    function db_search($value, $column, $column_want, $table) {
        $query = "SELECT $column_want FROM $table WHERE `$column` LIKE '$value'";
        $result = pg_query($this->db_connection, $query);
        while ($entry = pg_fetch_assoc($result)) {
            $results[] = $entry;
        }
        return $results;
    }

}
