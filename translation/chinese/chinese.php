<?php
// Chinese extension, https://github.com/annaesvensson/yellow-language/tree/main/translation/chinese

class YellowChinese {
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
            $this->yellow->system->save($fileName, array("language" => "zh"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="zh") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("zh")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
