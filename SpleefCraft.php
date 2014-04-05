<?php
/*
__PocketMine Plugin__
name=SpleefCraft
description=A Plugin that enables spleef.
version=dev
author=PotatoMan9374
class=spleef
apiversion=6,7,8,9,10,11,12
*/
  class spleef implements Plugin
  {
    private $api;
    private $server;

 

    public function __construct(ServerAPI $api, $server = false)
    {
      $this->api    = $api;
      $this->server = ServerAPI::request();
      $this->path   = $this->api->plugin->createConfig($this, array());
      $this->config = $this->api->plugin->readYAML($this->path . "config.yml");
    }   


    public function __construct(ServerAPI $api, $server = false)
    {
      $this->api    = $api;
      $this->server = ServerAPI::request();
    }


    public function init()
    {
      $this->api->event("tile.update", array($this, "handle"));
      $this->api->event("player.join", array($this, "handle"));
      $this->api->event("player.quit", array($this, "handle"));
      $this->api->event("player.death", array($this, "handle"));
      $this->api->event("console.command.stop", array($this, "handle"));      
      $this->api->console->register("spleefe", "To enable Spleef.", array($this, "commandH"));
      $this->api->console->register("spleefd", "To disable Spleef.", array($this, "commandH"));
      $this->api->console->register("spleef", "To join Spleef.", array($this, "commandH"));   
      $this->api->console->register("spleeft", "To check how long till spleef starts.", array($this, "commandH"));
      $this->api->console->register("spleefm", "To start making the spleef arena.", array($this, "commandH"));
      $this->api->console->register("spleefpos1", "To select position 1.", array($this, "commandH"));
      $this->api->console->register("spleefpos2", "To select position 2.", array($this, "commandH"));
      $this->api->console->register("spleefc", "To Create arena.", array($this, "commandH"));
/*
Must Have A Map Pre-Installed
*/

      
    public function eventHandler()             
