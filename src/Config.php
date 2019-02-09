<?php
namespace Tdrive;

class Config
{
	public $Schema;
	function __construct()
	{
		
	}
	public function SchemaLoading($value='')
	{
		$this->Schema['DS'] = DIRECTORY_SEPARATOR;
		$this->Schema['APPPATH'] = str_replace('\src', '', __DIR__);
		$this->Schema['LiquidExe'] = str_replace('src', 'storage', __DIR__).$this->Schema['DS'].'app'.$this->Schema['DS'].'theme.exe';
		$this->Schema['TheameDIR'] = $this->Schema['APPPATH'].$this->Schema['DS'].'theme';
		$this->Schema['AppPassword'] = '4a846b984b19050904def5ab70da464e';
		$this->Schema['AppStore'] = 'paperflyer.myshopify.com';
		return $this->Schema;
	}
}