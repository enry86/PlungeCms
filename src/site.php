<?php
include('parser.php');


class Site {

    function __construct($site) {
        $this->site = $site;
        $this->parser_s = new SiteParser($site);
    }
    
    public function read_site () {
        $this->struct = $this->parser_s->parse();
    }    

    public function get_title () {
        return $this->struct->get_name();
    } 

    public function get_css () {
        return $this->struct->get_css();
    }    

    public function draw_site () {
        $cont = $this->struct->get_content();
        $tot = count($cont);
        $sl_tot = $this->struct->get_sl_cnt();
        $i = 0;
        foreach ($cont as $k => $comp) {
            if ($comp->get_type() == 'slide') {
                $this->draw_slide($comp, $i, $sl_tot);
                $i += 1;
            }
            else {
                include("content/" . $comp->get_file());
            }
        }
    }

    private function draw_slide ($slide, $index, $tot) {
        $id = $slide->get_id();
        if ($index >= 1) {
            $prev = 'slide' . ($index - 1);
        }
        else {
            $prev = null;
        }

        if ($index < $tot - 1) {
            $next = 'slide' . ($index + 1);
        }
        else {
            $next = null;
        }
        
        echo '<div id="slide' . $index . '" class="slide">';
        include('content/' . $slide->get_file());
	echo '</div>';
        include('cms-content/menu.php'); 
    }


}

?>
