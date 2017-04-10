<?php

/*
 *
 *    _______                                _
 *   |__   __|                              | |
 *      | | ___  ___ ___  ___ _ __ __ _  ___| |_
 *      | |/ _ \/ __/ __|/ _ \  __/ _` |/ __| __|
 *      | |  __/\__ \__ \  __/ | | (_| | (__| |_
 *      |_|\___||___/___/\___|_|  \__,_|\___|\__|
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author Tesseract Team
 * @link http://www.github.com/TesseractTeam/Tesseract
 * 
 *
 */

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\Player;
use pocketmine\Server;

class PlayerTransferEvent extends PlayerEvent implements Cancellable{

	public static $handlerList = null;

	/** @var string */
	protected $address;

	/** @var int */
	protected $port;

	public function __construct(Player $player, $address, $port){
		$this->player = $player;
		$this->address = $address;
		$this->port = $port;
	}

	public function getPlayer(){
		return $this->player;
	}
	
	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getPort(){
		return $this->port;
	}
	
	public function setPort($port){
		$this->port = $port;
	}
	
	/**
	 * @return EventName|string
     */
	public function getName(){
		return "PlayerTransferEvent";
	}

}