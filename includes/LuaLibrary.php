<?php

use Scribunto_LuaLibraryBase;

/**
 * Registers InfoboxBuilder's Lua modules to Scribunto
 *
 * @license GNU GPL v2+
 * @author Adam Karmiński < adamk@wikia-inc.com >
 */

class LuaLibrary extends Scribunto_LuaLibraryBase {

	/**
	 * Register the libraries
	 */
	public function register() {
		$this->getEngine()->registerInterface( __DIR__ . '/lua/InfoboxBuilderHF.lua', [], [] );
		$this->getEngine()->registerInterface( __DIR__ . '/lua/InfoboxBuilderView.lua', [], [] );
		$this->getEngine()->registerInterface( __DIR__ . '/lua/InfoboxBuilder.lua', [], [] );
	}
}
