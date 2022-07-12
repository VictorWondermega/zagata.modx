<?php

  $doodles = $modx->getService('doodles','Doodles',$modx->getOption('zagata.core_path',null,$modx->getOption('core_path').'components/zagata/').'model/zagata/',$scriptProperties);
  if(!($doodles instanceof Doodles)) return '';

?>