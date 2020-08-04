<?php

declare(strict_types=1);

namespace HyperFlareMC\ExplosiveArrows;

use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\level\Explosion;
use pocketmine\plugin\PluginBase;

class ExplosiveArrows extends PluginBase implements Listener{

    /**
     * @var array|mixed[]
     */
    private static $config;
    
    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        self::$config = $this->getConfig()->getAll();
    }

    public function onProjectileHit(ProjectileHitEvent $event) {
        $explosion = new Explosion($event->getEntity()->getPosition(), self::$config["explosion-radius"]);
        if(!is_int(self::$config["explosion-radius"])){
            throw new \RuntimeException("explosion-radius must return an int");
        }
        $event->getEntity()->kill();
        $explosion->explodeA();
        $explosion->explodeB();
        $explosion->affectedBlocks = [Item::BEDROCK];
    }
}
