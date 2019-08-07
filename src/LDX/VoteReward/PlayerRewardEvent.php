<?php

namespace LDX\VoteReward;

use pocketmine\event\Cancellable;
use pocketmine\event\player\PlayerEvent;
use pocketmine\item\Item;
use pocketmine\Player;

class PlayerRewardEvent extends PlayerEvent implements Cancellable {
    /** @var Item[] */
    protected $items;

    /** @var int */
    protected $multiplier;

    /** @var string[] */
    protected $commands;

    /** @var string */
    protected $message;

    /**
     * @param Player $player
     * @param array $items
     * @param int $multiplier
     * @param array $commands
     * @param string $message
     */
    public function __construct(Player $player, array $items, int $multiplier, array $commands, string $message){
        $this->player = $player;
        $this->items = $items;
        $this->multiplier = $multiplier;
        $this->commands = $commands;
        $this->message = $message;
    }

    /**
     * @return Item[]
     */
    public function getItems() : array{
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items) : void{
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getMultiplier() : int{
        return $this->multiplier;
    }

    /**
     * @param int $multiplier
     */
    public function setMultiplier(int $multiplier) : void{
        $this->multiplier = $multiplier;
    }

    /**
     * @return string[]
     */
    public function getCommands() : array{
        return $this->commands;
    }

    /**
     * @param string[] $commands
     */
    public function setCommands(array $commands) : void{
        $this->commands = $commands;
    }

    /**
     * @return string
     */
    public function getMessage() : string{
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message) : void{
        $this->message = $message;
    }
}
