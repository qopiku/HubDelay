<?php

namespace BagiCraft01\HubDelay;

use pocketmine\Player;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Task;

class HubTask extends Task {

	private $main;

	private $playerName;

	private $config = [];

	public function __construct(Main $main, $playerName) {
		$this->main = $main;
		$this->config = $this->main->getConfig()->getAll();
		$this->playerName = $playerName;
	}

	public function onRun(int $currentTick) {
		$player = $this->main->getServer()->getPlayerExact($this->playerName);
		if ($player instanceof Player) {
			$x = $this->main->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorX();
			$y = $this->main->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorY();
			$z = $this->main->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorZ();
			$level = $this->main->getServer()->getDefaultLevel();

			$player->teleport(new Position($x, $y, $z, $level));
			$message = str_replace("{player}", $this->playerName, $this->config["msg_tp_success"]);
			$player->sendMessage($message);
		}
	}

}
