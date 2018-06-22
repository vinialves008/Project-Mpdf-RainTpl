<?php 
use Rain\Tpl; 


/**
* 
*/
class RelatorioTpl
{
	protected $tpl;

	protected $config = array(
		"tpl_dir" => "relatorio/",
		"cache_dir" => "cache/"
	);
	function __construct()
	{
		$this->tpl = new Tpl();
		$this->tpl->configure($this->config);
	}

	protected function setTpl(String $template){
			return $this->tpl->draw($template, true);
	}

	protected function setData($dados = array()){
		foreach ($dados as $key => $value) {
			$this->tpl->assign($key, $value);
		}		
	}
	public function setConteudo($dados = array(), String $template){
		$this->setData($dados);
		return $this->setTpl($template);

	}

}
 ?>