<?php

namespace XWP\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface {

	public function activate( Composer $composer, IOInterface $io ) {
		$install = function () {
			echo shell_exec( dirname( dirname( __FILE__) ) . "/bin/install-tests.sh" );
		};

		$composer->getEventDispatcher()->addListener( "post-install-cmd", $install );
		$composer->getEventDispatcher()->addListener( "post-update-cmd", $install );
	}
}