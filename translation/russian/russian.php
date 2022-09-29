<?php
// Russian extension, https://github.com/annaesvensson/yellow-language/tree/main/translation/russian

class YellowRussian {
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
            $this->yellow->system->save($fileName, array("language" => "ru"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="ru") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("ru")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
