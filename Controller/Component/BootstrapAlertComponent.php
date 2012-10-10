<?php
/**
 *	TwitterBootstrapプラグイン用アラートコンポーネント
 *	（SessionComponent::flashラッパーメソッド）
 */
class BootstrapAlertComponent extends Component {
	
	public $components = array('Session');
	
	protected $types = array(
		'success'	=> 'alert-success',
		'error'		=> 'alert-error',
		'block'		=> 'alert-block',
		'info'		=> 'alert-info',
	);
	
	public function set($message,$type) {
		$type = (array_key_exists($type,$this->types)) ? $type : 'success';
		
		$this->Session->setFlash($message,'alert',array(
			'plugin' => 'TwitterBootstrap',
			'class' => $this->types[$type],
		));
	}
}