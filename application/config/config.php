<?php
defined('BASEPATH') or exit('No direct script access allowed');


$config['base_url'] = 'http://localhost/nector';


$config['index_page'] = '';


$config['uri_protocol']    = 'REQUEST_URI';


$config['url_suffix'] = '';


$config['language']    = 'english';


$config['charset'] = 'UTF-8';


$config['enable_hooks'] = FALSE;


$config['subclass_prefix'] = 'MY_';


$config['composer_autoload'] = FALSE;


$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-=+';


$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';


$config['allow_get_array'] = TRUE;


$config['log_threshold'] = 0;


$config['log_path'] = '';


$config['log_file_extension'] = '';


$config['log_file_permissions'] = 0644;


$config['log_date_format'] = 'Y-m-d H:i:s';


$config['error_views_path'] = '';


$config['cache_path'] = '';


$config['cache_query_string'] = FALSE;


$config['encryption_key'] = 'qwertyuiopasdfghjklzxcvbnm';


$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_samesite'] = 'Lax';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;


$config['cookie_prefix']    = '';
$config['cookie_domain']    = '';
$config['cookie_path']        = '/';
$config['cookie_secure']    = FALSE;
$config['cookie_httponly']     = FALSE;
$config['cookie_samesite']     = 'Lax';


$config['standardize_newlines'] = FALSE;


$config['global_xss_filtering'] = FALSE;


$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();


$config['compress_output'] = FALSE;


$config['time_reference'] = 'local';


$config['rewrite_short_tags'] = FALSE;


$config['proxy_ips'] = '';


define('STOREHASH','tnltve8uac');
define('AUTHTOKEN','303k1bzo41yhbqkdqzcyr57m4cff1w5');


// Test
// define('secret_key', 'sk_test_lfexkOKvjLm8FJQedWwbKgdX');  
// define('publishable_key', 'pk_test_AwMixKb9CbgJuVhbSjjfQJIT');

// Live
define('secret_key', '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');  
define('publishable_key', 'pk_live_51LzY4YJfboVVtpI8h1PJmlZwD4WCOWPvNYV9wMqRn515qbbNFKGu5vrv0pDnZ566CWWvj5epGCArDccsEqPgVskB00Dou86a09');
