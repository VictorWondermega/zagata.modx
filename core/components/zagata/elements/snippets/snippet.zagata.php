<?php

  $za = $modx->getService('zagata','Zagata',$modx->getOption('zagata.core_path',null,$modx->getOption('core_path').'components/zagata/').'model/zagata/',$scriptProperties);

  if(!($za instanceof Zagata)) return '';
 
  /* setup default properties */
  $tpl = $modx->getOption('tpl',$scriptProperties,'rowTpl');
  $sort = $modx->getOption('sort',$scriptProperties,'name');
  $dir = $modx->getOption('dir',$scriptProperties,'ASC');

  $html = '';

  /* table existing */ 
  $tablexists = $modx->query("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '".$modx->getOption('dbname')."' AND table_name = '".$modx->getOption('table_prefix')."zagata'");
  if(!$tablexists->fetch(PDO::FETCH_COLUMN)) {
	$m = $modx->getManager();
	$created = $m->createObjectContainer('Zagata');
	return $created ? 'Таблица создана.' : 'Таблица не создана.'; 
  } else {}

  /* [[!include? &file=`[[++doodles.core_path]]elements/snippets/snippet.doodles.php`&sort=`name`&dir=`DESC`]] */
  $c = $modx->newQuery('Zagata');
  $c->sortby($sort,$dir);
  $re = $modx->getCollection('Zagata',$c);

  foreach ($re as $r) {
	$tmp = $r->toArray();
	$html .= $dood->getChunk($tpl,$tmp);
  }

  return $html;

?>