<?php

namespace IzyanzZ;

use pocketmine\plugin\PluginBase;

class main extends PluginBase {

    public function onEnable(){
        $this->getLogger()->info("Plugin-Active");
    }

    public function onLoad(){
        $this->getLogger()->info("Plugin Load");
    }

    public function onDisable(){
        $this->getLogger()->info("Plugin Disable");
    }
}
