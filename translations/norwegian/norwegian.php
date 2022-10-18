<?php
// Norwegian extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/norwegian

class YellowNorwegian {
    const VERSION = "0.8.34";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "nb"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="nb") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("nb")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
