<?php

include('structure.php');

class SiteParser {
    function __construct ($file) {
        $this->file = "conf/" . $file . ".xml";
        $this->stru = null;
        $this->xml_p = xml_parser_create();
        xml_set_object($this->xml_p, $this);
        xml_set_element_handler($this->xml_p, 'start_el', 'end_el');
        xml_set_character_data_handler($this->xml_p, 'chars_el');
    }
    
    public function parse () {
        if (!($f = fopen($this->file, "r"))) {
            die('No conf file found!');
        }
        
        while ($data = fread($f, 4096)) {
            if (!(xml_parse($this->xml_p, $data, feof($f)))) {
                die(sprintf("XML error: %s at line %d",
                    xml_error_string(xml_get_error_code($this->xml_p)),
                    xml_get_current_line_number($this->xml_p)));
            }
        }
        xml_parser_free($this->xml_p);
        if ($this->stru == null) echo 'LEFUUU';
        return $this->stru;
    }

    public function start_el ($par, $name, $att) {
        $this->chars = "";
        if ($name == 'SITE') {
            $this->stru = new Structure($att['NAME']);
            $this->sl_cnt = 0;
        }
        else if ($name == 'PAGE') {
            $this->comp = new Component();
            $this->comp->set_id($att['ID']);
        }
    }
    
    public function chars_el ($par, $cont) {
        $this->chars = $this->chars . $cont;
    }

    public function end_el ($par, $name) {
        if ($name == 'CSS') {
            $this->stru->set_css($this->chars);
        }
        else if ($name == 'TYPE') {
            $this->comp->set_type($this->chars);
            if ($this->comp->get_type() == 'slide') {
                $this->sl_cnt += 1;
            }
        }
        else if ($name == 'FILE') {
            $this->comp->set_file($this->chars);
        }
        else if ($name == 'PAGE') {
            $this->stru->add_component($this->comp);
        }
        else if ($name == 'SITE') {
            $this->stru->set_sl_cnt($this->sl_cnt);
        }
    }

}





?>
