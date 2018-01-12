<?php

namespace ktplus;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerInteractEvent;

class RD extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("Plugin Random Ore Make by StrafelessPvP");
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onBreak(BlockBreakEvent $e){

        $p = $e->getPlayer();
        $b = $e->getBlock();
            if($b->getId() == 4){

        $block = new Vector3($b->getX(),$b->getY(),$b->getZ());
        $array = [1,4,14,15,16,21,56,73,129];
        $b->getLevel()->setBlock($block,Block::get($array[array_rand($array)]));
        return true;
}else{ return false;}
    }
}


   public function onBreak(BlockBreakEvent $e){

        $p = $e->getPlayer();
        $b = $e->getBlock();
            if($b->getId() == 17){

        $block = new Vector3($b->getX(),$b->getY(),$b->getZ());
        $array = [1,14,15,16,21,56,73,129,153,57,155,173,42,41,22,133,4,17];
        $b->getLevel()->setBlock($block,Block::get($array[array_rand($array)]));
        return true;
}else{ return false;}
    }
}


