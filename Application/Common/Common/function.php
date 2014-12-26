<?php
/**
 * @todo: 获取客户端的IP
 * @param @return Ambigous <string, unknown>    
 * @return Ambigous <string, unknown>    
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-26 下午12:00:25 
 * @version V1.0
 */
function GetIP() {
	if (getenv ( "HTTP_CLIENT_IP" ) && strcasecmp ( getenv ( "HTTP_CLIENT_IP" ), "unknown" ))
		$ip = getenv ( "HTTP_CLIENT_IP" );
	else if (getenv ( "HTTP_X_FORWARDED_FOR" ) && strcasecmp ( getenv ( "HTTP_X_FORWARDED_FOR" ), "unknown" ))
		$ip = getenv ( "HTTP_X_FORWARDED_FOR" );
	else if (getenv ( "REMOTE_ADDR" ) && strcasecmp ( getenv ( "REMOTE_ADDR" ), "unknown" ))
		$ip = getenv ( "REMOTE_ADDR" );
	else if (isset ( $_SERVER ['REMOTE_ADDR'] ) && $_SERVER ['REMOTE_ADDR'] && strcasecmp ( $_SERVER ['REMOTE_ADDR'], "unknown" ))
		$ip = $_SERVER ['REMOTE_ADDR'];
	else
		$ip = "unknown";
	return $ip;
} 

/**
 * @todo: 判断和处理 指定文章中的访问ip 
 * array( '127.0.0.1' , '2014-12-26' );
 * 同一个ip每天只能算作1次的访问
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-26 下午12:00:39 
 * @version V1.0
 */
function Article_Cookie_IP($article_id){
	$ip = GetIP();//当前用户IP
	$ip_arr = cookie('article_' . $article_id . '_ip');//现有的ip组
	if(!$ip_arr){//如果没有添加过
		cookie('article_' . $article_id . '_ip',array( $ip , date('Y-m-d',time())),3600*24);
		return true;		
	}else{
		$old_ip = $ip_arr[0];
		$old_tm = $ip_arr[1];
		if($old_ip != $ip || $old_tm !=  date('Y-m-d',time())){
			cookie('article_' . $article_id . '_ip',array( $ip , date('Y-m-d',time())),3600*24);
			return true;
		}else{
			return false;
		}
	}
}


