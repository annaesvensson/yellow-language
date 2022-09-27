<?php
// Czech extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/czech

class YellowCzech {
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
            $this->yellow->system->save($fileName, array("language" => "cs"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="cs") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("cs")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
