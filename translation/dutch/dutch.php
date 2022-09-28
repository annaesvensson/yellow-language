<?php
// Dutch extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/dutch

class YellowDutch {
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
            $this->yellow->system->save($fileName, array("language" => "nl"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="nl") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("nl")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
