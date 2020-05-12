<?php

declare(strict_types=1);

namespace HyperFlareMC\ExplosiveArrows;

use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\level\Explosion;
use pocketmine\plugin\PluginBase;

class ExplosiveArrows extends PluginBase implements Listener{

    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info("Explosive Arrows have been enabled, be careful out there, soldier.");
    }

    public function onProjectileHit(ProjectileHitEvent $event) {
        $explosion = new Explosion($event->getEntity()->getPosition(), 10);
        $event->getEntity()->kill();
        $explosion->explodeA();
        $explosion->explodeB();
        $explosion->affectedBlocks = [Item::BEDROCK];
    }
}
