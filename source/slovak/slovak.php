<?php
// Slovak extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/slovak

class YellowSlovak {
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
            $this->yellow->system->save($fileName, array("language" => "sk"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="sk") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("sk")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
