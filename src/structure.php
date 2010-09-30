<?php
class Structure {
    function __construct ($name) {
        $this->cont = array();
        $this->name = $name;
    }

    public function add_component($comp) {
        $this->cont[] = $comp;
    }
    
    public function set_css ($css) {
        $this->css = $css;
    }

    public function get_css () {
        return $this->css;
    }

    public function get_content () {
        return $this->cont;
    }

    public function get_name () {
        return $this->name;
    }
    
    public function set_sl_cnt ($sl_cnt) {
        $this->sl_cnt = $sl_cnt;
    }

    public function get_sl_cnt () {
        return $this->sl_cnt;
    }
}

class Component {
    public function set_type($type) {
        $this->type = $type;
    }

    public function set_file ($file) {
        $this->file = $file;
    }
    
    public function set_id ($id) {
        $this->id = $id;
    }
    
    public function get_type () {
        return $this->type;
    }
    
    public function get_file () {
        return $this->file;
    }

    public function get_id () {
        return $this->id;
    }
}

?>
