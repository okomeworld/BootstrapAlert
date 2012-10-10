BootstrapAlert
==============

TwitterBootstrap Plugin for CakePHP2.xに基づいたアラート関連のプラグイン

必須プラグイン
--------------

[TwitterPlugin for CakePHP2.x](https://github.com/slywalker/TwitterBootstrap)

使い方
------

app/Pluginディレクトリにファイルを設置して以下をコントローラに追加

	public $components = array(
		'Session',
		'BootstrapAlert.BootstrapAlert',
	);

以下を記述することでbootstrapアラート仕様のSessionComponent::setFlash()を実行可能


	// alert-success
	$this->BootstrapAlert->set('Set flash message.', 'success');
	
	// alert-error
	$this->BootstrapAlert->set('Set flash message', 'error');
	
	// alert-block
	$this->BootstrapAlert->set('Set flash message.', 'block');
	
	// alert-info
	$this->BootstrapAlert->set('Set flash message.', 'info');
	
	// Default is alert-success
	$this->BootstrapAlert->set('Set flash message.');
	

