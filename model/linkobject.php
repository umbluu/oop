<?php
class linkobject extends http
{
    var $baseLink = false; // põhilink
    var $protocol = 'http://';
    var $eq = '=';
    var $delim = '&amp;';
    /**
     * linkobject constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }
    // loome paarid kujul nimi=väärtus
    // ühendame need ka kokku nimi1=väärtus1&nimi2=väärtus2
    function addToLink(&$link, $name, $value){
        if($link != ''){
            $link = $link.$this->delim;
        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($value);
    }
    // loome täislingi põhilingi ja paaride kasutamisel
    function getLink($add = array()){
        $link =  ''; // lingi loomiseks vajalik muutuja
        foreach ($add as $name => $value){
            // kõigepealt koostame paaride komplektid
            $this->addToLink($link, $name, $value);
        }
        // siin paarid name=value&name1=value1 on olemas
        // http://anna.ikt.khk.ee/oop_vs17_1/index.php?name=value&name1=value1
        if($link != ''){
            $link = $this->baseLink.'?'.$link;
        } else {
            // kui paarid ei ole moodustatud
            $link = $this->baseLink;
        }
        // anname moodustatud link kasutamisele
        return $link;
    }
}
