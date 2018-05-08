<?php
class Bootstrap extends Yaf\Bootstrap_Abstract{
    public function _initCore(){
		ini_set('yaf.library', LIB_PATH);
		Yaf\Loader::import(CORE_PATH.'/Helper.php');
        Yaf\Loader::import(CORE_PATH.'/Basic.php');
		Yaf\Loader::import(CORE_PATH.'/Model.php');
		Yaf\Loader::import(CORE_PATH.'/BasicPc.php');
		Yaf\Loader::import(FUNC_PATH.'/F_Basic.php');
		Yaf\Loader::import(FUNC_PATH.'/F_Network.php');
		Yaf\Loader::import(FUNC_PATH.'/F_String.php');
		Yaf\Loader::import(FUNC_PATH.'/F_Validate.php');
    }

    public function _initRoute() {}
	
    public function _initPlugin(Yaf\Dispatcher $dispatcher) {
        $router = new RouterPlugin();
        $dispatcher->registerPlugin($router);
		
        ///$sms = new SmsPlugin();
        //$dispatcher->registerPlugin($sms);
       // Yaf\Registry::set('smsPlugin', $sms);
    }
}