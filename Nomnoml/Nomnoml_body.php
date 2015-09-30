<?php

class Nomnoml {

  static function onParserInit( Parser $parser ) {
    global $wgOut;
    
    $parser->setHook( 'nomnoml', array( __CLASS__, 'nomnomlRender' ) ); 
    $wgOut->addModules( 'ext.Nomnoml' );
    
    return true;
  }

  static function nomnomlRender( $input, array $args, Parser $parser, PPFrame $frame ) {
    $html  = '<div class="nomnoml">';
    $html .= '<canvas></canvas>';
    $html .= '<div style="display: none;">' . $input . '</div>';
    $html .= '</div>';
    
    return array($html, 'markerType' => 'nowiki');
  }

}
