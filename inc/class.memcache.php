<?php

class Mem
{
    // Declare a public constructor
    public function __construct() { }

    private $hosts = array('localhost');
    private $port = 11211;

    private function ConnectToHosts(){
    	$m = new Memcache;
    	foreach ($this->hosts as $host) {
    		$m->addServer($host, $this->port);
    	}
    	return $m;
    }

   	public function StoreMemCache($key, $value, $time = 0){
		$m = $this->ConnectToHosts();
		$result = $m->set($key, $value, MEMCACHE_COMPRESSED, $time);
		$m->close();
		return $result;
	}

	public function GetMemCache($key){
		$m = $this->ConnectToHosts();
		$result = $m->get($key);
		$m->close();
		return $result;
	}
	public function DeleteMemCache($key){
		$m = $this->ConnectToHosts();
		$result = $m->delete($key);
		$m->close();
		return $result;
	}
	public function AddMemCache($key, $value, $time = 0){
		$m = $this->ConnectToHosts();
		$result = $m->add($key, $value, MEMCACHE_COMPRESSED, $time);
		$m->close();
		return $result;
	}

	public function Get($key){
		return $this->GetMemCache($key);
	}
	public function Delete($key){
		return $this->DeleteMemCache($key);
	}

	public function Store($key, $value, $time = 0){
		return $this->StoreMemCache($key, $value, $time);
	}

	public function Add($key, $value, $time = 0){
		return $this->AddMemCache($key, $value, $time);
	}


}