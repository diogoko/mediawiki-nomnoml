<?php

$wgAutoloadClasses['Nomnoml'] = $IP . '/extensions/Nomnoml/Nomnoml_body.php';
$wgHooks['ParserFirstCallInit'][] = 'Nomnoml::onParserInit';

$wgResourceModules['ext.Nomnoml'] = array(
  'localBasePath' => __DIR__ . '/modules',
  'remoteExtPath' => 'Nomnoml',
  'scripts' => array(
    'lib/lodash.min.js',
    'lib/dagre.min.js',
    'skanaar.canvas.js',
    'skanaar.util.js',
    'skanaar.vector.js',
    'nomnoml.jison.js',
    'nomnoml.parser.js',
    'nomnoml.layouter.js',
    'nomnoml.renderer.js',
    'nomnoml.js',
	'init.js'
  )
);

$wgExtensionCredits['parserhook'][] = array(
  'path' => __FILE__,
  'name' => 'Nomnoml',
  'description' => '',
  'version' => 1.0.0,
  'author' => 'Diogo Kollross',
  'url' => 'https://github.com/diogoko/mediawiki-nomnoml',
  'license-name' => 'MIT',
);
