<?php

namespace XWP\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface {

	/**
	 * Apply plugin modifications to Composer
	 *
	 * @param Composer    $composer
	 * @param IOInterface $io
	 */
	public function activate( Composer $composer, IOInterface $io ) {
		$install = function () {
			echo shell_exec( dirname( dirname( __FILE__) ) . "/bin/install-tests.sh" );
		};

		$composer->getEventDispatcher()->addListener( "post-install-cmd", $install );
		$composer->getEventDispatcher()->addListener( "post-update-cmd", $install );
	}

	/**
	 * Remove any hooks from Composer
	 *
	 * This will be called when a plugin is deactivated before being
	 * uninstalled, but also before it gets upgraded to a new version
	 * so the old one can be deactivated and the new one activated.
	 *
	 * @param Composer    $composer
	 * @param IOInterface $io
	 */
	public function deactivate( Composer $composer, IOInterface $io ) {
		return;
	}

	/**
	 * Prepare the plugin to be uninstalled
	 *
	 * This will be called after deactivate.
	 *
	 * @param Composer    $composer
	 * @param IOInterface $io
	 */
	public function uninstall( Composer $composer, IOInterface $io ) {
		return;
	}
}
