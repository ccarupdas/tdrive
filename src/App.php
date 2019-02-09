<?php
namespace Tdrive;
/**
 * Tdrive
 */
use Tdrive\Config;

class App
{
	public $Exe;
	Public $Config;
	function __construct($arg='')
	{
		$Config = new Config;
		$this->Config = $Config->SchemaLoading();
	}
	public function Init($value='')
	{
		//$this->Exe = $value;
		return $this->Config;
	}
	public function CreateTheme($themename)
	{
		$Dir = $this->Config['TheameDIR'].$this->Config['DS'].$themename;
		$createDir = mkdir($Dir,true);
		$create =$this->Config['LiquidExe'].' new --password='.$this->Config['AppPassword'].'  --store='.$this->Config['AppStore'].' --name='.$themename.' -d='.$Dir.' -c='.$Dir.$this->Config['DS'].'config.yml';
		$res = shell_exec($create);
		return $res;
	}
	public function GetTheme($themeid)
	{
		$Dir = $this->Config['TheameDIR'].$this->Config['DS'].$themeid;
		$createDir = mkdir($Dir,true);
		$create =$this->Config['LiquidExe'].' get --password='.$this->Config['AppPassword'].'  --store='.$this->Config['AppStore'].' --themeid='.$themeid.' -d='.$Dir.' -c='.$Dir.$this->Config['DS'].'config.yml';
		$res = shell_exec($create);
		return $res;
	}
	public function Deploy($themeid)
	{
		$Dir = $this->Config['TheameDIR'].$this->Config['DS'].$themeid;
		$create =$this->Config['LiquidExe'].' deploy --password='.$this->Config['AppPassword'].'  --store='.$this->Config['AppStore'].' --themeid='.$themeid.' -d='.$Dir.' -c='.$Dir.$this->Config['DS'].'config.yml';
		$res = shell_exec($create);
		return $res;
	}
}