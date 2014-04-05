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
    }


    public function init()
    {
      $this->api->console->register("spleefe", "To enable Spleef.", array($this, "commandH"));
      $this->api->console->register("spleefd", "To disable Spleef.", array($this, "commandH"));
      $this->api->console->register("spleef", "To join Spleef.", array($this, "commandH"));   
      $this->api->console->register("spleeft", "To check how long till spleef starts.", array($this, "commandH"));
