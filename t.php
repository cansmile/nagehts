<?
    include 'wp-load.php';
     
    $cookie_name = 'wordpress_logged_in_'.md5(get_site_option('siteurl'));
    $cookie = $_COOKIE&#91;$cookie_name&#93;;
 
    wp_set_current_user(wp_validate_auth_cookie($cookie, 'logged_in'));
 
    if($user = wp_get_current_user())
    {
        echo '<id>'.$user->user_login.'</id><br>';
        echo '<nick>'.$user->user_nicename.'</nick><br>';
        echo '<nick>'.$user->display_name.'</nick><br>';
        echo '<email>'.$user->user_email.'</email><br>';
        echo '<url>'.$user->user_url.'</url><br>';
    }
?>