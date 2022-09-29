<?php
// Hungarian extension, https://github.com/annaesvensson/yellow-language/tree/main/translation/hungarian

class YellowHungarian {
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
            $this->yellow->system->save($fileName, array("language" => "hu"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="hu") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("hu")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
