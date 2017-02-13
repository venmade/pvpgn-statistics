<?php

class page_handle {

    var $full_content;
    var $page_data;
    var $main_file;
    var $theme;

    function setup($theme, $main_file, $page_data) {
        $this->page_data = $page_data;
        $this->main_file = $main_file;
        $this->theme = $theme;
    }

    function fetch() {
        return $this->full_content;
    }

    function parse() {
        $fp = fopen("themes/" . $this->theme . "/" . $this->main_file, "r");
        $main_content = fread($fp, filesize("themes/" . $this->theme . "/" . $this->main_file));
        $done = false;
        do {
            $pos = strpos($main_content, "[[");
            $pos2 = strpos($main_content, "]]");
            $key = substr($main_content, $pos + 2, $pos2 - $pos - 2);
            if (is_int($pos) && is_int($pos2)) {
                if (is_array($this->page_data[$key])) {
                    $main_content = str_replace("[[$key]]", $this->build_repeat($this->page_data[$key]), $main_content);
                } else {
                    $main_content = str_replace("[[$key]]", $this->page_data[$key], $main_content);
                }
            } else
                $done = true;
        } while (!$done);
        $this->full_content = $main_content;
    }

    function build_repeat($data) {
        $fp = fopen("themes/" . $this->theme . "/" . $data['theme_file'], "r");
        $size = filesize("themes/" . $this->theme . "/" . $data['theme_file']);
        $content = fread($fp, $size);
        for ($n = 0; $n < count($data) - 1; $n++) {
            $temp = $content;
            $done = false;
            do {
                $pos = strpos($temp, "[[");
                $pos2 = strpos($temp, "]]");
                $key = substr($temp, $pos + 2, $pos2 - $pos - 2);
                if (is_int($pos) && is_int($pos2)) {
                    if ($data[$n][$key] == '')
                        $temp = str_replace("[[" . $key . "]]", $this->page_data[$key], $temp);
                    else
                        $temp = str_replace("[[" . $key . "]]", $data[$n][$key], $temp);
                } 
                    else$done = true;
            } while (!$done);
            $output .= $temp;
        }
        return $output;
    }

}
