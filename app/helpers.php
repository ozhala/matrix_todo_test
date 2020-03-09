<?php


//require automatically class's files by instance
spl_autoload_register(function ($class_name)
{

  $split = explode('\\', $class_name);
  $class = end($split) . '.php';
  
  $path = "";
  if(count($split) > 1 )
  {
    array_pop($split);
    $path = base_path().implode("/",$split)."/";
  }

  if (file_exists($path.$class))
  {
    // pre($path.$class);
      require_once $path.$class;
  }
});


if( ! function_exists('base_path') )
{
  function base_path()
  {
    return dirname(__DIR__)."\\";
  }
}


if( ! function_exists('base_url') )
{
  
  /**
  * @return array return site base url
  */
	function base_url($path = "")
	{
		$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $result = parse_url($url);
    $site_name = explode("/",$result['path']);
		return $result['scheme']."://".$result['host'].":".$result['port']."/".$site_name[1]."/".$path;
	}
  
}



if( ! function_exists('csrf_token') )
{
  /**
   * Generate and store hash random string.
  * @return string The random string.
  */
  function csrf_token($token_name = "")
	{
    // pre($_SESSION[$token_name],1);
    if(empty($token_name))
    {
      return null;
    }
    elseif(!(isset($_SESSION[$token_name])))
    {
      require_once 'Token.php';
      $token = new Token($token_name);
      return $token->csrf_token();
    }
    else
    {
      return $_SESSION[$token_name];
    }
  }
}



if( ! function_exists('pre') )
{
  /**
  * For debugging output.
  * @param string $var - all data types.
  * @return string echo $var.
  */
  function pre($var,$exit = null)
  {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if($exit == 1) exit();

  }
  
}


if( ! function_exists('get_data') )
{
  /**
  * @return array get all data from "tasks" table (DB).
  */
  function get_data()
  {
    require_once 'DB.php';
    $DB = new DB(function () {
        require_once 'database_config.php';
    });
    return $DB->get_data();
  }
  
}



if( ! function_exists('get_statistics') )
{
  /**
  * @return array get all statistics data from "tasks" table (DB).
  */
  function get_statistics()
  {
    require_once 'DB.php';
    $DB = new DB(function () {
        require_once 'database_config.php';
    });
    return $DB->get_statistics();
  }
  
}


if( ! function_exists('sess_start') )
{
  /**
   * Start the session, optional change the session name.
  * @param [string] $name session name.
  * @return void.
  */
  function sess_start($name = null){

    if( $name ) session_name($name);
    session_start();
    session_regenerate_id();

  }
  
}



if (! function_exists('to_json'))
{
  function to_json($val)
  {
   return htmlspecialchars(json_encode($val), ENT_QUOTES, 'UTF-8');
  }
}




if (! function_exists('change_date_format'))
{
    
  function change_date_format($date = null, $separate = "/")
  {
   return date_format(date_create($date),'H:i:s'.' '.'d'.$separate.'m'.$separate.'Y');
  }
}


if (! function_exists('change_status')){
    
  function change_status($status)
  {
    if($status == 1)
    {
      return '<span class="badge badge-success">Done</span>';
    }
   return '<span class="badge badge-danger">Pending</span>';
  }
}