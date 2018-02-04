<?php
namespace SocialSpy;
use pocketmine\command\Command;
use pocketmine\command\PluginIdentifiableCommand;
use SocialSpy\Main;
abstract class BaseCommand extends Command implements PluginIdentifiableCommand {
    public $prefix = "§8[§aEP§8]§6 ";
	private $plugin;
	public function __construct(Main $plugin, string $name, string $desc = "", string $usage, array $aliases = []){
		parent::__construct($name, $desc, $usage, $aliases);
		$this->plugin = $plugin;	
       }
	public function getPlugin(): BaseCommand{
		return $this->plugin;
	}
}
