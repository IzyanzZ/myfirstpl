<?php

namespace IzyanzZ;

use pocketmine\plugin\PluginBase;

class Izyanz extends PluginBase {

    public function onEnable(){
        $this->getLogger()->info(C::GREEN"Plugin-Active");
    }

    public function onLoad(){
        $this->getLogger()->info(C::YELLOW"Plugin Load");
    }

    public function onDisable(){
        $this->getLogger()->info(C::RED"Plugin Disable);
    }
}
