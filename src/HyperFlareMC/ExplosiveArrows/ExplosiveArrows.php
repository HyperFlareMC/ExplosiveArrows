<?php

declare(strict_types=1);

namespace HyperFlareMC\ExplosiveArrows;

use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\event\Listener;
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

    public function onProjectileHit(ProjectileHitEvent $event){
        $radius = self::$config["explosion-radius"];
        if(!is_int($radius)){
            throw new \RuntimeException("explosion-radius must return an int");
        }
        if($radius > 50 || $radius < 1){
            throw new \RuntimeException("explosion-radius must be between values 1 and 50");
        }
        $explosion = new Explosion($event->getEntity()->getPosition(), $radius);
        $event->getEntity()->kill();
        $explosion->explodeA();
        $explosion->explodeB();
    }
}
