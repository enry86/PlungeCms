<?php
include('parser.php');


class Site {

    function __construct($site) {
        $this->site = $site;
        $this->parser_s = new SiteParser($site);
    }
    
    public function show_site () {
        $struct = $this->parser_s->parse();
    }    




}

?>
