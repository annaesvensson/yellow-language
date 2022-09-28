<?php
// Italian extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/italian

class YellowItalian {
    const VERSION = "0.8.32";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "it"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="it") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("it")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
