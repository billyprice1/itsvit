<?php
namespace App\Http\ConfigParameters;

Class ParametersList {



/**
*  PROXMOX PART OF CONFIG START
*/
protected $hostname = '192.99.232.166';
protected $username ='root';
protected $realm = 'pam';
protected $password = '2viWn27O965oYTlVlHOC';
protected $port = 8006;

protected $proxmox_node = 'proxmox';
protected $proxmox_storage = 'local';
protected $proxmox_continer = 'qcow2';
protected $proxmox_clone_isfull = False;
protected $bridge = 'vmbr1';
    
    
/**
*  PROXMOX PART OF CONFIG FINISH
*/

/**
*  GIT PART OF CONFIG FINISH
*/
protected $gittoken  ='37cc4d3eab441cee577bebc406e8a0f1accfaf57';//internal
protected $gitmethod  = 'token';
protected $gituser = 'comeanother';
protected $gitreponame = 'urlsgetter';
protected $def_branch = 'master';
/**
*  GIT PART OF CONFIG FINISH
*/

/**
*  COMMON PART OF CONFIG FINISH
*/
protected $sleep = 5;
protected $timeout = 5;
/**
*  COMMON PART OF CONFIG FINISH
*/

/**
*  INSTANCE PART OF CONFIG START
*/
protected $mac = 16; //Pool of MAC addresses starts from this MAC
protected $ip = 150;   //Pool of IP addresses starts from this IP
protected $total = 20; //Total number of MAC and IP addresses
protected $mac_ip='36:64:34:30:66:';
protected $host_ip='192.168.206.';
protected $finish_creating_instance = 'Waiting for git clone operation to complete';
/**
*  INSTANCE PART OF CONFIG FINISH
*/




public function __get($name)
{
return $this->$name;
}

}