<?php

namespace xtag\view;

use kartik\widgets\AssetBundle;

/**
 * Asset bundle for DetailView Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class PhotoTagAsset extends AssetBundle
{

	public function init()
	{
		$this->setSourcePath(__DIR__ . '/assets');
		$this->setupAssets('js', ['js/tagpix']);
		$this->setupAssets('css', ['css/tagpix']);
		parent::init();
	}

}