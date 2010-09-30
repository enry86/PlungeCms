<?php

class SiteParser {
    function __construct ($file) {
        $this->file = "../conf/" . $file . ".xml";
        $this->xml_p = xml_parser_create();
        xml_set_element_handler($this->xml_p, '$this->start_el', '$this->end_el');
    }
    
    public function parse () {
        if (!($f = fopen($this->file, "r"))) {
            die('No conf file found!');
        }
        
        while ($data = fread($f, 4096)) {
            if (!(xml_parse($this->xml_p, $data, feof($f)))) {
                die ('XML Error!');
            }
        }
        xml_parser_free($this->xml_p);
        return 1;
    }


    private function start_el ($par, $name, $att) {
        echo 'start: ' . $name;
    }
    
    private function end_el ($par, $name) {
        echo 'end: ' . $name;
    }

}





?>
