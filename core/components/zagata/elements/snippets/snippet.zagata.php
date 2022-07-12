<?php

  $za = $modx->getService('zagata','Zagata',$modx->getOption('zagata.core_path',null,$modx->getOption('core_path').'components/zagata/').'model/zagata/',$scriptProperties);

  if(!($za instanceof Zagata)) return '';

 
  /* setup default properties */
  $tpl = $modx->getOption('tpl',$scriptProperties,'rowTpl');
  $sort = $modx->getOption('sort',$scriptProperties,'name');
  $dir = $modx->getOption('dir',$scriptProperties,'ASC');
 
  $output = '';
 
  return $output;

?>