<?php
global $config_url_base;

$config_url_base = array();
switch (ENVIRONMENT) {
	case 'localhost':
		$config_url_base['to_vigilantmedia'] = 'http://localhost.vigilantmedia.com';
		$config_url_base['to_vigilante'] = 'http://localhost.vigilante.vigilantmedia.com';
		$config_url_base['to_sandbox'] = 'http://localhost.sandbox.vigilantmedia.com';
		$config_url_base['to_mt'] = 'http://localhost.mt.vigilantmedia.com';
		$config_url_base['to_wp'] = 'http://wp-localhost.vigilantmedia.com';
		$config_url_base['to_gregbueno'] = 'http://localhost.gregbueno.com';
		$config_url_base['to_archive'] = 'http://archive.wp-localhost.musicwhore.org';
		$config_url_base['to_musicwhore'] = 'http://wp-localhost.musicwhore.org';
		$config_url_base['to_filmwhore'] = 'http://film.wp-localhost.musicwhore.org';
		$config_url_base['to_tvwhore'] = 'http://tv.wp-localhost.musicwhore.org';
		$config_url_base['to_journalcon'] = 'http://localhost.journalcon.austin-stories.com';
		$config_url_base['to_austinstories'] = 'http://localhost.austin-stories.com';
		$config_url_base['to_ddn'] = 'http://localhost.duran-duran.net';
		$config_url_base['to_eponymous4'] = 'http://localhost.eponymous4.com';
		$config_url_base['to_emptyensemble'] = 'http://localhost.emptyensemble.com';
		$config_url_base['to_penziaswilson'] = 'http://localhost.penziasandwilson.com';
		$config_url_base['to_observant'] = 'http://localhost.observantrecords.com';
		$config_url_base['to_observantadmin'] = 'http://localhost.admin.observantrecords.com';
		$config_url_base['to_observantshop'] = 'http://localhost.shop.observantrecords.com';
		$config_url_base['to_shinkyokuadvocacy'] = 'http://localhost.shinkyokuadvocacy.com';
		break;
    case 'dev':
    case 'development':
		$config_url_base['to_vigilantmedia'] = 'http://dev.vigilantmedia.com';
		$config_url_base['to_vigilante'] = 'http://dev.vigilante.vigilantmedia.com';
		$config_url_base['to_sandbox'] = 'http://sandbox.vigilantmedia.com';
		$config_url_base['to_mt'] = 'http://dev.mt.vigilantmedia.com';
		$config_url_base['to_wp'] = 'http://wp.vigilantmedia.com';
		$config_url_base['to_gregbueno'] = 'http://dev.gregbueno.com';
		$config_url_base['to_archive'] = 'http://archive.wp-dev.musicwhore.org';
		$config_url_base['to_musicwhore'] = 'http://wp-dev.musicwhore.org';
		$config_url_base['to_reviews'] = 'http://musicwhore.wp.vigilantmedia.com';
		$config_url_base['to_filmwhore'] = 'http://film.wp-dev.musicwhore.org';
		$config_url_base['to_tvwhore'] = 'http://tv.wp-dev.musicwhore.org';
		$config_url_base['to_journalcon'] = 'http://dev.journalcon.austin-stories.com';
		$config_url_base['to_austinstories'] = 'http://dev.austin-stories.com';
		$config_url_base['to_ddn'] = 'http://dev.duran-duran.net';
		$config_url_base['to_eponymous4'] = 'http://dev.eponymous4.com';
		$config_url_base['to_penziaswilson'] = 'http://dev.penziasandwilson.com';
		$config_url_base['to_observant'] = 'http://dev.observantrecords.com';
		$config_url_base['to_observantadmin'] = 'http://dev.admin.observantrecords.com';
		$config_url_base['to_observantshop'] = 'http://dev.shop.observantrecords.com';
		$config_url_base['to_shinkyokuadvocacy'] = 'http://dev.shinkyokuadvocacy.com';
		$config_url_base['to_emptyensemble'] = 'http://dev.emptyensemble.com';
		break;
    case 'test':
    case 'testing':
	case 'staging':
		$config_url_base['to_vigilantmedia'] = 'http://test.vigilantmedia.com';
		$config_url_base['to_vigilante'] = 'http://test.vigilante.vigilantmedia.com';
		$config_url_base['to_sandbox'] = 'http://sandbox.vigilantmedia.com';
		$config_url_base['to_mt'] = 'http://test.mt.vigilantmedia.com';
		$config_url_base['to_wp'] = 'http://wp-test.vigilantmedia.com';
		$config_url_base['to_gregbueno'] = 'http://test.gregbueno.com';
		$config_url_base['to_archive'] = 'http://archive.wp-test.musicwhore.org';
		$config_url_base['to_musicwhore'] = 'http://wp-test.musicwhore.org';
		$config_url_base['to_reviews'] = 'http://musicwhore.wp-test.vigilantmedia.com';
		$config_url_base['to_filmwhore'] = 'http://film.wp-test.musicwhore.org';
		$config_url_base['to_tvwhore'] = 'http://tv.wp-test.musicwhore.org';
		$config_url_base['to_journalcon'] = 'http://test.journalcon.austin-stories.com';
		$config_url_base['to_austinstories'] = 'http://test.austin-stories.com';
		$config_url_base['to_ddn'] = 'http://test.duran-duran.net';
		$config_url_base['to_eponymous4'] = 'http://test.eponymous4.com';
		$config_url_base['to_emptyensemble'] = 'http://test.emptyensemble.com';
		$config_url_base['to_penziaswilson'] = 'http://test.penziasandwilson.com';
		$config_url_base['to_observant'] = 'http://test.observantrecords.com';
		$config_url_base['to_observantadmin'] = 'http://test.admin.observantrecords.com';
		$config_url_base['to_observantshop'] = 'http://test.shop.observantrecords.com';
		$config_url_base['to_shinkyokuadvocacy'] = 'http://test.shinkyokuadvocacy.com';
		break;
    case 'prod':
    case 'production':
		$config_url_base['to_vigilantmedia'] = 'http://vigilantmedia.com';
		$config_url_base['to_vigilante'] = 'http://vigilante.vigilantmedia.com';
		$config_url_base['to_sandbox'] = 'http://sandbox.vigilantmedia.com';
		$config_url_base['to_mt'] = 'http://mt.vigilantmedia.com';
		$config_url_base['to_wp'] = 'http://blog.vigilantmedia.com';
		$config_url_base['to_gregbueno'] = 'http://gregbueno.com';
		$config_url_base['to_archive'] = 'http://archive.musicwhore.org';
		$config_url_base['to_musicwhore'] = 'http://musicwhore.org';
		$config_url_base['to_reviews'] = 'http://reviews.musicwhore.org';
		$config_url_base['to_filmwhore'] = 'http://filmwhore.org';
		$config_url_base['to_tvwhore'] = 'http://tvwhore.org';
		$config_url_base['to_journalcon'] = 'http://journalcon.austin-stories.com';
		$config_url_base['to_austinstories'] = 'http://austin-stories.com';
		$config_url_base['to_ddn'] = 'http://duran-duran.net';
		$config_url_base['to_eponymous4'] = 'http://eponymous4.com';
		$config_url_base['to_emptyensemble'] = 'http://emptyensemble.com';
		$config_url_base['to_penziaswilson'] = 'http://penziasandwilson.com';
		$config_url_base['to_observant'] = 'http://observantrecords.com';
		$config_url_base['to_observantadmin'] = 'http://admin.observantrecords.com';
		$config_url_base['to_observantshop'] = 'http://shop.observantrecords.com';
		$config_url_base['to_shinkyokuadvocacy'] = 'http://shinkyokuadvocacy.com';
		break;
}
