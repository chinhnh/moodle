<?php
$THEME->name = 'citvn theme';

$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase');
$THEME->sheets = array('custom','theme','font-awesome.min');
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->enable_dock = true;
$THEME->editor_sheets = array();

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_klass_process_css';

$THEME->layouts = array(
		// The site home page.
		'frontpage' => array(
				'file' => 'frontpage.php',
				'regions' => array('side-pre'),
				'defaultregion' => 'side-pre',
				'options' => array('nonavbar' => true),
		)
);

$THEME->blockrtlmanipulations = array(
    'side-pre' => 'side-post',
    'side-post' => 'side-pre'
);
