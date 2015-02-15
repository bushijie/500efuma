CREATE DATABASE  IF NOT EXISTS `500efuma` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `500efuma`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 120.24.235.142    Database: 500efuma
-- ------------------------------------------------------
-- Server version	5.5.37-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fm_admin`
--

DROP TABLE IF EXISTS `fm_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` longtext NOT NULL,
  `account` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `headimg` varchar(500) DEFAULT NULL,
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_admin`
--

LOCK TABLES `fm_admin` WRITE;
/*!40000 ALTER TABLE `fm_admin` DISABLE KEYS */;
INSERT INTO `fm_admin` VALUES (1,'6cc8c26d6ca0356c6890dcd1e8c35387','saki','30330e97a2bde4a811348340a16485de','大魔王','395408934@qq.com','/Upload/headimg/saki.jpg','2014-12-30 02:51:55',NULL);
/*!40000 ALTER TABLE `fm_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_article_comment`
--

DROP TABLE IF EXISTS `fm_article_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_article_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(500) DEFAULT NULL,
  `content` longtext,
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_comment`
--

LOCK TABLES `fm_article_comment` WRITE;
/*!40000 ALTER TABLE `fm_article_comment` DISABLE KEYS */;
INSERT INTO `fm_article_comment` VALUES (1,17,0,0,'你猜？',0,'','你写网站这么屌，你家里人知道吗？','2015-01-07 12:00:22','2015-01-07 04:00:22'),(2,17,1,0,'',1,NULL,'我家里人不知道的说。。','2015-01-07 12:56:12','2015-01-07 04:56:12'),(5,25,0,0,'博主暗恋福妈但是一夜只能三次被迫分手',0,'','恭喜博客上线！评论比昵称还短真的好吗……','2015-01-07 16:33:01','2015-01-07 08:33:01'),(6,25,5,0,'',1,NULL,'你们这些。。天天黑我真的好么。。擦。。擦。。','2015-01-07 16:36:46','2015-01-07 08:36:46'),(7,25,5,0,'',0,'','666666','2015-01-07 16:36:47','2015-01-07 08:36:47'),(8,25,5,7,'',1,NULL,'不要以为你匿名了我就不知道你是谁。。。','2015-01-07 16:56:36','2015-01-07 08:56:36'),(9,25,0,0,'',0,'lene13@gmail.com','我来试试邮件提醒<br />\r\n<br />\r\n另外邮件还能&nbsphash&nbsp一下生成个&nbspgravatar&nbsp的头像吖','2015-01-07 17:04:05','2015-01-07 09:04:05'),(10,25,9,0,'',1,NULL,'有想过，但是怎么感觉不是很好看，其实后台是有默认的游客评论头像的','2015-01-07 17:05:38','2015-01-07 09:05:38'),(11,25,0,0,'OracleSenshi',0,'','啪啪啪！','2015-01-07 19:07:40','2015-01-07 11:07:40'),(12,25,11,0,'',1,NULL,'啦啦啦！','2015-01-07 20:10:25','2015-01-07 12:10:25'),(13,25,0,0,'抽签达人',0,'qq1059045301@163.com','这个博客简洁明了，不错不错，外行的我也就看个热闹吧。','2015-01-09 15:34:09','2015-01-09 07:34:09'),(14,25,13,0,'',1,NULL,'多谢&nbsp&nbsp（=ˇωˇ=）','2015-01-09 16:36:54','2015-01-09 08:36:54'),(15,20,0,0,'渡边大',0,'865303077@qq.com','好文章，赞一个。','2015-02-11 15:16:52','2015-02-11 07:16:52');
/*!40000 ALTER TABLE `fm_article_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_article_list`
--

DROP TABLE IF EXISTS `fm_article_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_article_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `type_id` int(11) NOT NULL,
  `tags` varchar(500) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `comments_num` int(11) DEFAULT '0',
  `pv_num` int(11) DEFAULT '0',
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_list`
--

LOCK TABLES `fm_article_list` WRITE;
/*!40000 ALTER TABLE `fm_article_list` DISABLE KEYS */;
INSERT INTO `fm_article_list` VALUES (15,'Linux搭建LAMP环境(源码安装)适用于ubuntu,linux deepin','\n###需要编译到的源码文件\n* httpd-2.2.27.tar.gz\n* mysql-5.6.17.tar.gz\n* php-5.4.28.tar.gz\n* libxml2-2.6.3.tar.gz\n* libpng-1.6.10.tar.gz\n* jpegsrc.v6b.tar.gz\n* freetype-2.5.3.tar.gz\n* libmcrypt-2.5.8.tar.gz\n* autoconf-2.61.tar.gz\n* libgd-2.1.0.tar.gz\n* zlib-1.2.8.tar.gz\n\n上面这些是基本的编译文件，如果需要其他的功能，比如**memcache**，则需要另外下载编译文件进行安装\n\n----\n\n###检查编译环境\n源码包安装方式需要Gcc编译环境，所以要检查下系统是否已经安装了gcc。\n\n		sudo dpkg --get-selections|grep gcc\n\n如果有输出安装信息，就说明编译的环境已经安装了。\n\n---\n\n###卸载默认的软件\n检查是否有相关软件\n\n        sudo dpkg --get-selections|grep 软件名称\n\n检测服务是否正在运行\n\n如果正在运行，则需要停止后才能进行卸载，主要针对apache,mysql\n\n        netstat -tnl  \n\n        apache默认端口 80   mysql默认端口 3306\n\n停止服务\n\n        sudo /etc/init.d/服务名 stop\n\n卸载软件\n\n如果是ded安装的，则使用 \n\n		sudo apt-get -remove 软件名称\n\n如果是源码安装的，删除文件夹即可\n\n---\n\n###编译和安装软件\n安装过程一般都是使用\n\n		tar zxvf 文件名   （解压）\n\n然后进入目录\n\n	sudo ./congfigure  （配置）\n\n        sudo make （编译）\n\n        sudo make install （安装）\n\n---\n\n###安装libxml2\n\n		sudo ./configure --prefix=/usr/local/libxml2\n\n		sudo make\n\n这一步在执行的时候遇到了错误，在网上查找资料找到了解决方法：\n\n打开解压之后的文件夹，打开nanohttp.c  找到1588行 在方法中添加 0777的权限设置，即修改成\n\n        fd = open(filename, O_CREAT | O_WRONLY,0777);\n接下来继续\n\n        sudo make install\n\n---\n###安装libmcrypt\n\n        sudo ./configure --prefix=/usr/local/libmcrypt\n\n        sudo make\n\n        sudo make install\n\n---\n\n###安装zlib\n>注意：安装zlib之前需要安装此软件，命令：\n>\n>sudo apt-get install zlib1g-dev		\n\n        sudo ./configure --prefix=/usr/local/zlib\n\n        sudo make\n\n        sudo make install\n\n---\n###安装libpng\n\n        sudo ./configure --prefix=/usr/local/libpng\n\n        sudo make\n\n        sudo make install\n\n---\n\n###安装jpeg6\n\n>需要手动建立目录:\n\n		sudo mkdir /usr/local/jpeg6  //建立jpeg6软件安装目录\n\n		sudo mkdir /usr/local/jpeg6/bin     //建立存放命令的目录\n\n		sudo mkdir /usr/local/jpeg6/lib      //创建jpeg6库文件所在目录\n\n		sudo mkdir /usr/local/jpeg6/include   //建立存放头文件目录\n\n		sudo mkdir -p /usr/local/jpeg6/man/man1    //建立存放手册的目录\n>安装命令:\n\n		sudo ./configure  \\\n\n		--prefix=/usr/local/jpeg6/ \\             \n\n		--enable-shared \\     //建立共享库使用的GNU的libtool\n\n		--enable-static       //建立静态库使用的GNU的libtool \n\n>\n\n		sudo make\n\n		sudo make install\n\n---\n\n###安装freetype\n\n		sudo ./configure --prefix=/usr/local/freetype\n		\n		sudo make\n		\n		sudo make install\n\n---\n\n###安装autoconf\n\n        sudo ./configure\n\n>提示 : error: GNU M4 1.4 is required    \n\n>打开 [http://ftp.gnu.org/gnu/m4/](http://ftp.gnu.org/gnu/m4/)  选择最新版本的下载，这里我选择的是 m4-1.4.17\n\n安装这个文件\n\n		sudo ./configure\n		sudo make\n		sudo make install\n继续安装autoconf  \n  \n		sudo ./configure\n		sudo make\n		sudo make install\n\n---\n\n###安装apache服务器\n\n       	sudo ./configure  \\   //执行当前目录下软件自代的配置命令\n\n		--prefix=/usr/local/apache2 \\    //指定Apache软件安装的位置\n		\n		--sysconfdir=/etc/httpd  \\     //指定Apache服务器的配置文件存放位置\n		\n		--with-z=/usr/local/zlib/ \\     //指定zlib库文件的位置\n		\n		--with-included-apr  \\       //使用捆绑APR/APR-Util的副本\n		\n		--enable-so \\              //以动态共享对象(DSO)编译\n		\n		--enable-deflate=shared \\       //缩小传输编码的支持\n		\n		--enable-expires=shared \\        //期满头控制\n		\n		--enable-rewrite=shared \\        //基于规则的URL操控\n		\n		--enable-static-support          //建立一个静态链接版本的支持 \n\n>\n\n		sudo make\n		\n		sudo make install \n\n注意:APACHE安装完成后,/usr/local/apache2即为apache的根目录,而/etc/httpd/为apache的配置目录\n\n检查配置文件目录\n\n		sudo vi /etc/httpd/httpd.conf\n\n在文件的上方空白处添加：\n\nServerName localhost:80  //监听本机的80端口\n\n		sudo /usr/local/apache2/bin/apachectl start    \n\n启动Apache \n\n		sudo /usr/local/apache2/bin/apachectl stop    \n\n关闭Apache \n\n		netstat -tnl|grep 80     //查看80端口是否开启 \n\nhttp://localhost/去访问Apache服务器 \n\n		sudo echo \"/usr/local/apache2/bin/apachectl start\" >> /etc/rc.local    //添加自启动\n\n注意:若此启动无法写进文件,请用vi编辑器直接编辑,写在该文件的代码段 \'exit 0\'  之前即可\n\n---\n###安装mysql数据库\n\n解压mysql源码安装包\n\n		tar -zxvf mysql-5.5.37.tar.gz\n\n安装一些编译需要的组件     \n\n安装cmake组件\n\n		sudo apt-get install cmake\n\n安装libncurses5-dev组件\n\n        sudo apt-get install libncurses5-dev\n\n安装gcc-c++组件\n\n        sudo apt-get install build-essential\n\n安装bison组件\n\n        sudo apt-get install bison\n\n设置用户组\n\n		sudo groupadd mysql\n		sudo useradd -r -g mysql mysql\n\n编译安装\n\n		sudo cmake \\\n		-DCMAKE_INSTALL_PREFIX=/usr/local/mysql \\\n		-DMYSQL_DATADIR=/usr/local/mysql/data \\\n		-DDEFAULT_CHARSET=utf8 \\\n		-DDEFAULT_COLLATION=utf8_general_ci \\\n		-DMYSQL_UNIX_ADDR=/tmp/mysqld.sock \\\n		-DWITH_DEBUG=0 \\\n		-DWITH_INNOBASE_STORAGE_ENGINE=1\n\n如果编译通过则开始安装，安装时间很长		\n\n		sudo make\n		sudo make install\n\n配置相应的文件\n\n进入 /usr/local/mysql \n\n		sudo chown -R mysql .\n\n        sudo chgrp -R mysql .\n\n        sudo ./scripts/mysql_install_db \n\n        --user=mysql --basedir=/usr/local/mysql \n\n        --datadir=/usr/local/mysql/data \n\n        --no-defaults\n\n配置完成后修改权限\n\n        sudo chown -R root .\n\n        sudo chown -R mysql data\n\n复制配置文件\n\n        sudo cp ./support-files/my-medium.cnf /etc/my.cnf\n\n配置my.cnf信息，找到[mysqld]，然后追加进去\n\n        [mysqld]\n\n        user = mysql\n\n        basedir = /usr/local/mysql\n\n        datadir  = /usr/local/mysql/data\n\n        character-set-server = utf8\n\n将mysql.server拷贝/etc/init.d下：\n\n		sudo cp ./support-files/mysql.server /etc/init.d/mysql  \n\n启动mysql\n\n		sudo /etc/init.d/mysql start\n\n>遇到启动失败“Starting MySQL * Couldn\'t find MySQL server (/usr/bin/mysqld_safe)”时\n\n        sudo rm /etc/mysql/my.cnf\n\n确认mysql是否安装成功\n\n	sudo /usr/local/mysql/bin/mysqladmin version\n\n设置软连接\n\n		cd /usr/local/mysql/bin\n\n		sudo ln -s /usr/local/mysql/bin/mysql /usr/bin\n	\n	　　　sudo ln -s /usr/local/mysql/bin/mysqladmin /usr/bin\n\n		sudo ln -s /usr/local/mysql/bin/mysqldump /usr/bin\n\n给root用户设置密码\n\n		mysqladmin -u root password \"xxx\"\n\n进入mysql看看吧\n\n		Mysql -u root -p\n\n		sudo rm /etc/mysql/my.cnf\n\n---\n\n###安装php\n\n这里使用了简易的安装，之后的扩展另外安装(其实是我总是遇到错误解决太麻烦了，安装了N次之后感觉这个方法最好，基本是不会出错的)\n\n一些扩展我会在下面进行另外的安装，我感觉这样比较清晰。\n\n这里安装的php仅仅关联了apache，mysql\n\n之后会在扩展中安装：pdo_mysql等扩展\n\n    	sudo ./configure \n\n		--prefix=/usr/local/php \n\n    	--with-apxs2=/usr/local/apache2/bin/apxs --with-mysql=/usr/local/mysql/ \n\n    	--enable-mbstring \n\n    	--enable-xml \n\n    	--enable-sockets\n\n\n错误：configure: error: xml2-config not found. Please check your libxml2 installation.\n\n    sudo apt-get install libxml2-dev\n\n\n复制php.ini \n\n    cp /home/sniper/Downloads/php/php.ini-development /usr/local/php/lib/php.ini\n\n\n打开Apache配置文件 \n    sudo gvim /etc/httpd/httpd.conf\n在后边加上 \n\n    PHPIniDir /usr/local/php/\n\n\n    AddType application/x-httpd-php .php\n\n重启apache 在apache的工作目录中写一个phpinfo的文件，然后进入localhost看看\n\n```php\n<?php\n	phpinfo();\n?>\n```\n\n---\n\n###安装Mcrypt扩展模块\n\n进入解压后的php文件的ext文件夹中，可以看到很多的扩展包，找到Mcrypt\n\n        cd /home/你的名字/php-5.4.37/ext/mcrypt\n\n运行phpize\n\n        /usr/local/php/bin/phpize\n\n然后会有如下显示：\n\n这说明可以扩展\n\n接下来编译安装：\n\n        sudo ./configure \\\n\n        --with-php-config=/usr/local/php/bin/php-config\n\n        --with-mcrypt=/usr/local/libmcrypt\n\n        sudo make\n\n        sudo make install\n\n会出现一个路径，进入目录下就能看到so文件扩展\n\n        Installing shared extensions:     /usr/local/php5/lib/php/extensions/no-debug-non-zts-20060613/\n\n然后编辑php.ini文件,在最后添加\n\n        extension_dir = \"/usr/local/php5/lib/php/extensions/no-debug-non-zts-20060613/\"\n        extension = \"mcrypt.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持mcrypt了。\n\n---\n\n###安装pdo_mysql扩展\n\n原理基本与上面相同，只是编译的配置写法不同，这里需要加上mysql的路径。\n\n进入pdo_mysql目录下,运行phpize\n\n        sudo./configure \n        --with-php-config=/usr/local/php/bin/php-config\n        --with-pdo-mysql=/usr/local/mysql\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"pdo_mysql.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持pdo_mysql了。\n\n---\n\n###安装GD库扩展\n\n前面的和上面一样\n\n注意要提前安装 png jepg  freetype 这些\n\n        sudo ./configure \n\n        --with-php-config=/usr/local/php/bin/php-config \n        --with-jpeg-dir=/usr/local/libjpeg/ \n        --with-png-dir=/usr/local/libpng/ \n        --with-freetype-dir=/usr/local/freetype/\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"gd.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持gd了。\n\n---\n\n###安装memcached扩展\n\n在[http://pecl.php.net/package/memcache](http://pecl.php.net/package/memcache) 下载扩展\n\n        下载memcached-3.0.8.tar.gz \n\n解压这个文件\n\n        tar -zxvf memcached-3.0.8.tar.gz \n\n进入解压文件夹中，运行phpize\n\n        sudo ./configure \n        --enable-memcache \n        --with-php-config=/usr/local/php/bin/php-config \n        --with-zlib-dir=/usr/local/zlib/\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"memcache.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持memcache了。\n\n\n---\n\n###安装SOAP扩展\n\n进入php中的soap文件夹，运行phpize\n\n        sudo ./configure \n\n        --with-php-config=/usr/local/php/bin/php-config \n\n        -–enable-soap\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"soap.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持soap了。\n\n---\n\n###安装APC\n\n在[http://pecl.php.net/get/APC-3.1.13.tgz](http://pecl.php.net/get/APC-3.1.13.tgz)下载扩展\n\n运行phpize\n\n        sudo ./configure \n\n        --enable-apc-mmap \n\n        --enable-apc \n\n        --enable-apc-filehits \n\n        --with-php-config=/usr/local/php/bin/php-config\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"apc.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持apc了。\n\n---\n\n###安装xdebug\n\n下载文件为： xdebug-2.2.5\n过程和上面一样，解压，进入目录，运行phpize，然后安装\n\n		sudo ./configure \n	\n		--with-php-config=/usr/local/php/bin/php-config \n	\n		make && make install\n\n接下来修改php.ini文件\n\n在[Zend]模块之前加入\n\n        zend_extension=\"/usr/local/php/lib/php/extensions/no-debug-non-zts-20100525/xdebug.so\" \n        xdebug.auto_trace=1\n        xdebug.collect_params=1\n        xdebug.collect_return=1\n        xdebug.profiler_enable=1\n        xdebug.remote_enable=true     \n        xdebug.remote_host=192.168.1.101\n        xdebug.remote_port=9000    \n        xdebug.remote_handler=dbgp\n        xdebug.trace_output_dir=\"/home/kotori/xdebug\"\n        xdebug.profiler_output_dir=\"/home/kotori/xdebug\"\n\n编辑完php.ini 文件后 要重启下web 服务器。\n\n---\n\n###安装curl\n\n在[http://curl.haxx.se/download/](http://curl.haxx.se/download/) 下载curl文件\n\n解压后，进入目录进行安装：\n\n        sudo ./configure --prefix=/usr/local/curl\n\n        sudo make  \n\n        sudo make install\n\n之后进入php扩展文件夹中的curl文件夹\n\n运行phpize\n\n        sudo ./configure \n        --with-php-config=/usr/local/php/bin/php-config \n        --with-curl=/usr/local/curl\n\n        sudo make \n\n        sudo make install\n\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"curl.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持curl了。',7,'Linux,LAMP,Ubuntu,php',1,0,25,'2014-09-22 10:51:37','2015-02-10 16:19:44'),(16,'HTML5 Canvas 涂鸦画板 (服务器:PHP)','工作之余做了个web的涂鸦画板\n\n主要功能：\n\n1.实现鼠标画图，可以选择颜色和大小\n\n2.可以将画好的图片下载\n\n3.可以读取图片进行涂鸦\n\n对于Canvas我了解的也不是很多，新手代码，多多指教。\n\n---\n\n###HTML页面\n\n很简单的一个画板的页面，基本没什么重要的地方\n\n```html\n<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<title>涂鸦画板</title>\n<script type=\"text/javascript\" src=\"jquery-1.8.3.js\"></script>\n<script type=\"text/javascript\" src=\"jquery.form.js\"></script>\n<link href=\"index.css\" rel=\"stylesheet\" type=\"text/css\">\n</head>\n<body>\n    <div id=\"chooseColor\"></div>\n    <div id=\"chooseSize\"></div>\n    <div id=\"paint\">\n        <canvas id=\"pad\" width=\"800\" height=\"600\" />\n    </div>\n    <input type=\"button\" id=\"download\" value=\"下载\" />\n    <!-- 上传图片  -->\n    <input type=\"file\" name=\"mypic\" id=\"chooseFile\" />\n    <input type=\"button\" value=\"读取文件\" id=\"load\" />\n    <!-- 进度条 -->\n    <div class=\"progress\">\n        <span class=\"bar\"></span><span class=\"percent\">0%</span >\n    </div>\n    <!-- 隐藏区域 -->\n    <img id=\"tulip\" src=\"\" alt=\"加载显示区\" />\n</body>\n<script type=\"text/javascript\" src=\"index.js\"></script>\n</html>\n```\n\n---\n\n###CSS部分\n也只是用来搞搞页面的排版而已\n\n```css\nbody,input {\n    font-size: 9pt;\n}\n \n#paint,#chooseSize {\n    clear: both;\n}\n \n.option {\n    float: left;\n    width: 20px;\n    height: 20px;\n    border: 2px solid #cccccc;\n    margin-right: 4px;\n    margin-bottom: 4px;\n}\n \n.active {\n    border: 2px solid black;\n}\n \n.lw {\n    text-align: center;\n    vertical-align: middle;\n}\n \nimg.output {\n    border: 1px solid green;\n}\n \n#pad {\n    border: 2px solid gray;\n    cursor: arrow;\n}\n \n#chooseFile {\n    float: left;\n    width: 140px;\n}\n \n#tulip {\n    display: none;\n}\n \n#download {\n    margin-left: 550px;\n}\n \n#load {\n    float: left;\n    width: 80px;\n}\n```\n\n---\n\n###JS文件\n好了，终于到重点了~！\n\n1.首先实现绘图的功能有三块组成：颜色选择器，大小选择器，画图\n\n```js\n/**\n * 颜色选择器\n */\nfunction chooseColor() {\n    var colors = \"red;orange;yellow;green;blue;indigo;purple;black;white\".split(\';\');\n    var sb = [];\n    $.each(colors,function(i,v){\n        sb.push(\"<div class=\'option\' style=\'background-color:\" + v + \"\'></div>\");\n    });\n    $(\"#chooseColor\").html(sb.join(\"\\n\"));\n}\n```\n\n```js\n/**\n * 大小选择器\n */\nfunction chooseSize(){\n    sb = [];\n    for (var i = 1; i <= 9; i++) sb.push(\"<div class=\'option lw\'>\" + \"<div style=\'margin-top:#px;margin-left:#px;width:%px;height:%px\'></div></div>\".replace(/%/g, i).replace(/#/g, 10 - i / 2));\n    $(\"#chooseSize\").html(sb.join(\'\\n\'));\n}\n```\n\n```js\n/**\n * 画图\n */\nfunction canvas(){\n    var $clrs = $(\"#chooseColor .option\");\n    var $lws = $(\"#chooseSize .option\");\n    $clrs.click(function(){\n        $clrs.removeClass(\"active\");\n        $(this).addClass(\"active\");\n        p_color = this.style.backgroundColor;\n        $lws.children(\"div\").css(\"background-color\",p_color);\n    }).first().click();\n     \n    //点选线条粗细选项时切换焦点并取得宽度存入p_width\n    $lws.click(function(){\n        $lws.removeClass(\"active\");\n        $(this).addClass(\"active\");\n        p_width = $(this).children(\"div\").css(\"width\").replace(\"px\",\"\");\n         \n    }).eq(3).click();\n     \n    // 取得canvas context\n    var $canvas = $(\"#pad\");\n    var ctx = $canvas[0].getContext(\"2d\");\n    ctx.lineCap = \"round\";\n    ctx.fillStyle = \"white\"; //整个canvas涂上白色的背景，避免PNG的透明底色效果\n    ctx.fillRect(0,0,$canvas.width(),$canvas.height());\n    var drawMode = false;\n     \n    // canvas点选，移动，放开按键时进行绘图动作\n    $canvas.mousedown(function(e){\n        ctx.beginPath();\n        ctx.strokeStyle = p_color;\n        ctx.lineWidth = p_width;\n        ctx.moveTo(e.pageX - $canvas.position().left, e.pageY - $canvas.position().top);\n        drawMode = true;\n    }).mousemove(function(e){\n        if(drawMode){\n            ctx.lineTo(e.pageX - $canvas.position().left, e.pageY - $canvas.position().top);\n            ctx.stroke();\n        }\n    }).mouseup(function(e){\n        drawMode = false;\n    });\n}\n```\n2.接下来是下载功能\n\n```js\n/**\n * 下载当前所绘制的图像\n */\nfunction downloadPic(){\n    // 使用toDataURL()将图转换成png文件\n    var saveFile = function(data, filename) {\n        var save_link = document.createElementNS(\'http://www.w3.org/1999/xhtml\', \'a\');\n        save_link.href = data;\n        save_link.download = filename;\n        var event = document.createEvent(\'MouseEvents\');\n        event.initMouseEvent(\'click\', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);\n        save_link.dispatchEvent(event);\n    };\n    $(\"#download\").click(function() {\n        var myCanvas = document.getElementById(\"pad\");\n        var image = myCanvas.toDataURL(\"image/png\").replace(\"image/png\", \"image/octet-stream\");\n        // window.location.href=image;\n        var filename = \'paint_\' + (new Date()).getTime() + \'.png\';\n        saveFile(image, filename);\n    });\n}\n```\n\n3.最后是读取并加载图片的功能\n\n其实我这里做的读取图片就是将用户所选的图片上传到服务器中，再由JS调出图片显示在一个隐藏的IMG中，最后将这个IMG中的对象取出显示在Canvas中，看起来很笨╮(╯▽╰)╭\n\n还有我使用了一个叫jquery.form.js 的插件用来上传，个人感觉还蛮好用的\n\n```js\n//获取当前文件名\nfunction ch_(url){  \n    url=url.split(\"\\\\\");//这里要将 \\ 转义一下\n    var filename = url[url.length-1];\n    return filename;\n}\n \n \n//加载隐藏模块中的图片\nfunction loadImg(){\n    $(\'#load\').click(function(){\n        // 加载到canvas\n        var c= document.getElementById(\"pad\");\n        var ctx = c.getContext(\"2d\");\n        var img=document.getElementById(\"tulip\");\n        ctx.drawImage(img,0,0);\n    });\n}\n \n/**\n * 上传图片\n */\nfunction uploadImg(){\n    var bar = $(\'.bar\');\n    var percent = $(\'.percent\');\n    var showimg = $(\'#showimg\');\n    var progress = $(\".progress\");\n    $(\"#chooseFile\").wrap(\"<form id=\'myupload\' action=\'upload.php\' method=\'post\' enctype=\'multipart/form-data\'></form>\");\n    $(\"#chooseFile\").change(function(){\n        $(\"#myupload\").ajaxSubmit({\n            dataType: \'json\',\n            uploadProgress: function(event, position, total, percentComplete) {\n                var percentVal = percentComplete + \'%\';\n                bar.width(percentVal);\n                percent.html(percentVal);\n            },\n            success: function(data){\n                // alert(\'上传成功\');\n                var file = $(\'#chooseFile\').val();\n                var filename = ch_(file);\n                var src = \'paint/\' + filename;\n                $(\'#tulip\').attr(\'src\',src);\n            },\n            error: function(xhr){\n                alert(\'上传失败\');\n            }\n        });\n    });\n}\n```\n\n---\n\n###服务器部分(PHP)\n设置上传大小不能超过1M，文件类型只能为JPG或者PNG\n\n```php\n<?php\n$picname = $_FILES [\'mypic\'] [\'name\'];\n$picsize = $_FILES [\'mypic\'] [\'size\'];\nif ($picname != \'\') {\n    if ($picsize > 1024000) {\n        echo \'图片的大小不能超过1M\';\n        exit ();\n    }\n    $type = strstr ( $picname, \'.\' );\n    if ($type != \'.jpg\' && $type != \'.png\') {\n        echo \'图片格式不对\';\n        exit ();\n    }\n    $pics = $picname;\n    // 上传路径\n    $pic_path = \'paint/\' . $pics;\n    move_uploaded_file ( $_FILES [\'mypic\'] [\'tmp_name\'], $pic_path );\n}\n$size = round ( $picsize / 1024, 2 );\n$arr = array (\n        \'name\' => $picname,\n        \'pic\' => $pics,\n        \'size\' => $size\n);\necho json_encode ( $arr );\n?>\n```\n\n---\n\n###大功告成\n接下来就是画画啦~O(∩_∩)O~\n\n选择你想涂鸦的图片上传，然后点击读取文件\n\n涂鸦完之后点击下载就能看到你所画的图像啦！\n\n大家有兴趣的可以自己尝试着新增一些功能，比如说橡皮擦，添加一些形状之类的。\n\n最后给个效果图(福利)\n\n![Alt text](http://static.oschina.net/uploads/img/201308/22150403_KFb2.png)\n',78,'canvas,画图,php,html5',1,0,13,'2013-08-18 10:47:56','2015-02-12 02:24:58'),(17,'Yii中themes的使用','这里说所的为Yii的1.1版本。\n\n先看官网的文档：\n>Theming是一个在Web应用程序里定制网页外观的系统方式。通过采用一个新的主题，网页应用程序的整体外观可以立即和戏剧性的改变。\n\n那么上述就是themes的大体的功能了，具体使用如下：\n\n        Yii::app()->theme =\'wifi\' ; \n\n一般来说，这个方法都会放在父类中，在我的项目中是这样定义：\n\n```php\n<?php\nclass WifiController extends CController{\n     \n    public $layout=\'\';\n    public $menu=array();\n    public $breadcrumbs=array();\n     \n    public function init(){\n        parent::init();\n        Yii::app()->theme=\'wifi\';\n        header(\"Content-Type: text/html; charset=UTF-8\");\n    }\n}\n```\n\n然后在模块中进行继承\n```php\n<?php\nclass TemplateController extends WifiController{\n     \n    public function init() {\n        parent::init();\n    }\n     \n    public function actionIndex(){\n        $this->render(\'index\');\n    }\n```\n\n这里在加载index.php的时候就去去themes文件夹中进行查找\n路径为 /thems/wifi/views/wifi/default/index.php\n这里我所创建的模块名也为wifi，主题名也为wifi\n事实上路径是这样的  /themes/主题名/views/模块名/action名/页面文件.php\n\n具体文件中的路径：\n\n![Alt text](http://admin.500efuma.me/Upload/20141226/36b4385ab14342b06c8bd56a70f2111b.png)\n\n然后要记住，需要配置layouts文件\n默认都是加载layouts中的main.php文件\n\n我这里的main.php\n```php\n<?php echo $content;?>\n```\n\n这样一来整个themes的使用就完成了。',2,'yii,php',1,2,26,'2014-12-16 09:33:33','2015-02-14 20:04:34'),(20,'我理解的【依赖注入】【控制反转】','###前言\n\n鄙人一个新嫩的程序员，刚刚开始做过大约1年的J2EE，那个时候最常使用的就诸如SSH,SSI之类的框架。\n\n在学习的过程中遇到了`依赖注入`和`控制反转`这2个词。\n\n当时听理论完全是云里雾里，工作中最多也就知道怎么使用spring这种框架来达到`IOC`的目的。\n\n现在虽然转做PHP了，但是这种设计模式依然是存在的。于是乎在这里说一说我自己理解的`依赖注入`\n\n###依赖注入 or 控制反转\n\n其实`依赖注入`和`控制反转`说的是同一个东西.都是一种设计模式,这种模式可以用来减少程序之间的耦合\n\n下面我在PHP下说说对其的理解.\n\n###正片\n\n我们首先写一个最常用的链接数据库的类,就按照最原始的方式:\n\n* 在构造函数中include数据库类的文件\n* 然后实例化Db并且设置链接参数\n* 之后创建了一个数据库查询的方法，使用了构造函数中创建的Db实例\n\n代码如下：\n\n```php\nclass test {\n    private $_db;\n    \n    function __construct(){\n        include \'./lib/Db.php\';\n        $this->_db = new Db(\'localhost\',\'root\',\'root\',\'test\');\n    }\n    \n    function querySQL($sql){\n        $this->_db->query($sql);\n    }\n}\n```\n\n看起来上面的代码很符合我们想要的功能，但是以后有更多的类需要用到这个db组件，然后突然有一天db类发生了变化，密码也变了，那不是要把所有的文件都重新改一次？\n\n为了解决上面这个问题，工厂模式诞生了。\n\n我们创建一个Factory类，然后通过方法进行获取db组件。\n\n代码如下：\n\n```php\nclass Factory {\n\n    public static function getDb(){\n        include \"./lib/Db.php\";\n        return new Db(\"localhost\",\"root\",\"root\",\"test\");\n    }\n    \n }\n```\n\n然后我们的test类就可以这样写：\n\n```php\nclass test {\n\n    private $_db;\n    \n    function __construct(){\n        $this->_db = Factory::getDb();\n    }\n    \n    function querySQL($sql){\n        $this->_db->query($sql);\n    }\n\n}\n```\n\n这样看起来貌似比刚才方便了一些，但是还是存在问题。\n\n这里只是将原来的直接与Db类耦合变成了与Factory耦合，万一要是哪天工厂方法要改名字了，getDb这个方法需要改，那不是又变成了上面的那个问题？(简直有病233)\n\n但是这种需求又是真实存在的，那么又有一种解决方法。\n\n我们不在test中实例化Db组件了，我们从外部进行`注入`！\n\n代码如下：\n\n```php\n<?php\n\nclass test {\n    private $_db;\n    \n    function setDb($connection){\n        $this->_db = $connection;\n    }\n    \n    function querySQL($sql){\n        $this->_db->query($sql);\n    }\n}\n\n//我们在这里进行调用\n$est = new test();\n//注入\n$test->setDb(Factory::getDb());\n$test->querySQL();\n\n?>\n```\n这样一来我们可以看到类里面已经没有Db类，工厂类的影子了。\n\n我们从外部调用setDb方法，将实例直接`注入`进去。\n\n这样test完全不用关心db链接是怎么生成的了。\n\n这就是`依赖注入`，实现的过程不是在控制器内部存在依赖关系，而是让其作为一个参数进行传递，这样让我们的代码可以更好的维护，降低程序的耦合度。\n\n\n###正片后的正片\n\n我们再假设下，在test中我们还需要用到除了Db之外的其他外部类，怎么办？\n\n难道要这样？\n\n```php\n$test->setDb(Factory::getDb());//注入db连接\n$test->setFile(Factory::getFile());//注入文件处理类\n$test->setImage(Factory::getImage());//注入Image处理类\n...\n```\n\n想累死爹啊~！\n\n好的，我们懒，所以又去写了个工厂方法！\n\n```php\nclass Factory {\n    public static function getTest(){\n        $test = new test();\n        $test->setDb(Factory::getDb());//注入db连接\n        $test->setFile(Factory::getFile());//注入文件处理类\n        $test->setImage(Factory::getImage());//注入Image处理类\n        return $test;\n    }\n }\n```\n\n然后实例化的时候就变成了这样：\n\n```php\n$test = Factory::getTest();\n$test->querySQL();\n```\n\n╮(╯▽╰)╭\n唉~~我们怎么又看到了工厂方式的场景？\n\nso，这种解决方式并不好\n\n于是乎`容器`诞生了，我们又称作IOC，DI\n\n接下来我们不用set了！这样我们也就不需要工厂方法进行二次包装了吧。\n\n我们在test中定义一个容器\n\n代码如下：\n\n```php\nclass test {\n    \n    private $_di;\n    \n    function __construct($di){\n        $this->_di = $di;\n    }\n    \n    function querySQL($sql){\n        $this->_di->get(\'db\')->query($sql);\n    }\n}\n\n$di = new Di();\n$di->set(\"db\",function(){\n    return new Db(\"localhost\",\"root\",\"root\",\"test\");\n})\n\n$test = new test($di);\n$test->querySQL($sql);\n\n```\n这里的di就是IOC容器\n\n所谓的容器就是存放我们可能会用到的各种类的实例。\n\n我们通过$di->set()设置一个名为db的实例，因为是通过回调函数的方式传入的，\n所以set的时候并不会立刻进行实例化，而是当$di->get(\'db\')的时候才会进行实例化\n\n同样，我们还可以再di类中融入单例模式。\n\n这样我们只要在全局范围定义一个Di类，然后将所有的需要注入的类放到这个容器中，然后将容器作为构造函数的参数传递到test中，就可以再test类里面从容器中获取实例，当然我们也可以使用其他的函数，不一定要是构造函数，总之就是自己想怎么搞都行！\n\n###结尾\n\n那么上面就是目前我对`依赖注入`的一些理解，要是有理解上的错误，请提出，大家共同学习。\n\n随便提一句，我想写这篇博客是因为看到OSC上有个人提出的4个面试题之一。\n\n[http://www.oschina.net/question/215831_217378](http://www.oschina.net/question/215831_217378)\n\n大家也可以想下其他的题目应该怎么回答。\n\n',2,'依赖注入,控制反转,IOC',1,1,44,'2014-12-19 19:12:56','2015-02-15 06:33:24'),(21,'NodeJS学习笔记【基础】','###安装\n\n直接在官网进行下载，[http://nodejs.org/download/](http://nodejs.org/download/)，根据操作系统进行选择就行。\n这里我下载的是Windows版本64位，安装之后会看到如下2个图标\n\n![Alt text](http://admin.500efuma.me/Upload/20141226/b840c006536af03bc00d57a0516c51df.png)\n\n---\n\n###使用\n\n**1.运行**\n\n运行命令行程序（左边那个），输入node进入命令交互模式，然后输入一条代码语句后即可执行并显示结果\n\n    console.log(\'Hello World!\');\n输入上面的这条语句可以看到\n\n![Alt text](http://admin.500efuma.me/Upload/20141226/569d7863e0808fa8ec31f7688e7fb5f9.png)\n\n**2.运行JS文件**\n\n在文件中输入如下代码：\n```js\nfunction hello() {\n    console.log(\'Hello World!\');\n}\nhello();\n```\n然后在终端使用node运行这个文件，结果如下\n\n![Alt text](http://admin.500efuma.me/Upload/20141226/12408d4bf000cfe4b3d04f62fbd2f696.png)\n\n---\n\n###权限问题\n\n在Linux系统下，使用NodeJS监听80或443端口提供HTTP(S)服务时需要root权限，有两种方式可以做到。\n\n* 使用`sudo`命令运行NodeJS。例如通过以下命令运行的server.js中有权限使用80和443端口。一般推荐这种方式，可以保证仅为有需要的JS脚本提供root权限。\n\n        sudo node server.js\n\n* 使用`chmod +s`命令让NodeJS总是以root权限运行，具体做法如下。因为这种方式让任何JS脚本都有了root权限，不太安全，因此在需要很考虑安全的系统下不推荐使用。\n\n        sudo chown root /usr/local/bin/node\n        sudo chmod +s /usr/local/bin/node\n\n---\n\n###模块\n\n在NodeJS中，一般将代码合理拆分到不同的JS文件中，每个文件就是一个模块，而文件路径就是模块名。\n\n在编写每个模块时，都有`require`、`exports`、`module`三个预先定义好的变量可供使用。\n\n**require**\n\n`require`函数用于在当前模块中`加载和使用别的模块`，传入一个模块名，返回一个模块导出对象。模块名可使用相对路径（以`./`开头），或者是绝对路径（以`/`或`C:`之类的盘符开头）。另外，模块名中的`.js`扩展名可以省略。以下是一个例子。\n```js\nvar foo1 = require(\'./foo\');\nvar foo2 = require(\'./foo.js\');\nvar foo3 = require(\'/home/user/foo\');\nvar foo4 = require(\'/home/user/foo.js\');\n \n// foo1至foo4中保存的是同一个模块的导出对象。\n```\n另外，可以使用以下方式加载和使用一个JSON文件。\n```js\nvar data = require(\'./data.json\');\n```\n\n**exports**\n\n`exports`对象是当前模块的导出对象，用于`导出模块公有方法和属性`。别的模块通过`require`函数使用当前模块时得到的就是当前模块的`exports`对象。以下例子中导出了一个公有方法。\n```js\nexports.hello = function () {\n    console.log(\'Hello World!\');\n};\n```\n\n**module**\n\n通过`module`对象可以访问到当前模块的一些相关信息，但最多的用途是替换当前模块的导出对象。例如模块导出对象默认是一个普通对象，如果想改成一个函数的话，可以使用以下方式。\n```js\nmodule.exports = function () {\n    console.log(\'Hello World!\');\n};\n```\n以上代码中，模块默认导出对象被替换为一个函数。\n\n**模块初始化**\n\n一个模块中的JS代码`仅在模块第一次被使用时执行一次`，并在执行过程中初始化模块的导出对象。之后，缓存起来的导出对象被`重复利用`。\n\n**主模块**\n\n通过命令行参数传递给NodeJS以启动程序的模块被称为主模块。主模块负责`调度组成整个程序的其它模块完成工作`。例如通过以下命令启动程序时，`main.js`就是主模块。\n    node main.js\n\n**完整示例**\n\n例如有以下目录。\n```js\n- /home/user/hello/\n    - util/\n        counter.js\n    main.js\n```\n\n其中`counter.js`内容如下：\n```js\nvar i = 0;\n \nfunction count() {\n    return ++i;\n}\n \nexports.count = count;\n```\n\n该模块内部定义了一个私有变量i，并在`exports`对象导出了一个公有方法`count`。主模块`main.js`内容如下：\n```js\nvar counter1 = require(\'./util/counter\');\nvar counter2 = require(\'./util/counter\');\n \nconsole.log(counter1.count());\nconsole.log(counter2.count());\nconsole.log(counter2.count());\n```\n\n运行该程序的结果如下：\n```js\n$ node main.js\n1\n2\n3\n```\n',6,'NodeJS,基础',1,0,16,'2014-12-26 10:24:25','2015-02-11 06:29:49'),(22,'NodeJS学习笔记【代码的组织和部署】','>使用NodeJS编写程序前，为了有个良好的开端，首先需要准备好代码的目录结构和部署方式。这里讲介绍与之相关的各种知识。\n\n---\n\n###模块路径解析规则\n\n在上篇笔记中了解到，`require`函数支持斜杠（`/`）或盘符（`C:`）开头的绝对路径，也支持`./`开头的相对路径。\n\n但是这两种路径在模块之间建立了强耦合关系，一旦某个模块文件位置需要更变，使用该模块的其他模块代码页需要跟着调整，变得牵一发动全身。\n\n因此，`require`函数支持第三种形式的路径，写法类似于`foo/bar`，并依次按照以下规律解析路径，直到找到模块位置。\n\n**1.内置模块**\n\n如果传递给require函数的是NodeJS内置模块名称，不做路径解析，直接返回内部模块的导出对象。\n例如：require(\'fs\')\n\n\n\n\n**2.node_modules目录**\n\nNodeJS定义了一个特殊的`node_modules`目录用于存放模块。\n\n例如某个模块的绝对路径是`/home/user/hello.js`，在该模块中使用`require(\'foo/bar\')`方式加载模块时，则NodeJS依次尝试使用以下路径。\n\n     /home/user/node_modules/foo/bar\n     /home/node_modules/foo/bar\n     /node_modules/foo/bar\n\n\n**3.NODE_PATH环境变量**\n\n与PATH环境变量类似，NodeJS允许通过NODE_PATH环境变量来指定额外的模块搜索路径。NODE_PATH环境变量中包含一到多个目录路径，路径之间在Linux下使用:分隔，在Windows下使用;分隔。\n\n例如定义了以下NODE_PATH环境变量：\n\n     NODE_PATH=/home/user/lib:/home/lib\n\n当使用`require(\'foo/bar\')`的方式加载模块时，则NodeJS依次尝试以下路径。\n     \n     /home/user/lib/foo/bar\n     /home/lib/foo/bar\n\n---\n\n###包(package)\n\nJS模块的基本单位是单个JS文件，但是复杂些的模块往往由多个子模块组成。为了便于管理和使用，我们可以把多个子模块组成的大模块称作`包`，并把所有子模块放在同一个目录里。\n\n在组成一个包的所有子模块中，需要有一个入口模块，入口模块的导出对象被作为包的导出对象。例如有以下目录结构。\n\n```js\n- /home/user/lib/\n    - cat/\n        head.js\n        body.js\n        main.js\n```\n其中cat目录定义了一个包，其中包含了3个子模块。main.js作为入口模块，内容如下：\n```js\nvar head = require(\'./head\');\nvar body = require(\'./body\');\n \nexports.create = function (name) {\n    return {\n        name: name,\n        head: head.create(),\n        body: body.create()\n    };\n};\n```\n在其他模块中使用包的时候，需要加载包的入口模块。\n\n使用require(\'/home/user/lib/main\')能达到目的，但是入口模块名称出现在路径里看上去不是很好。因此我们要让包使用起来更像是单个模块。\n\n**index.js**\n\n当模块的文件名是index.js，加载模块时可以视同模块所在目录的路径代替模块文件路径，即：\n```js\nvar cat = require(\'/home/user/lib/cat\');\nvar cat = require(\'/home/user/lib/cat/index\');\n```\n这里2条语句是等价的。这样处理后，就只需要把包目录路径传递给require函数，感觉上整个目录被当作单个模块使用，更有整体感。\n\n**package.json**\n\n如果想自定义入口模块的文件名和存放位置，就需要在包目录下包含一个`package.json`文件，并在其中指定入口模块的路径。上例中的`cat`模块可以重构如下。\n```js\n- /home/user/lib/\n    - cat/\n        + doc/\n        - lib/\n            head.js\n            body.js\n            main.js\n        + tests/\n        package.json\n```\n\n其中`package.json`内容如下:\n```js\n{\n    \"name\": \"cat\",\n    \"main\": \"./lib/main.js\"\n}\n```\n\n如此一来，就同样可以使用`require(\'/home/user/lib/cat\')`的方式加载模块。NodeJS会根据包目录下的`package.json`找到入口模块所在位置。\n\n',6,'NodeJS',1,0,31,'2014-12-26 10:44:40','2015-02-15 09:21:02'),(23,'Yii中CDbCriteria常用总结','Yii的Active Recorder包装了很多。\n\n特别是把SQL中 把where,order,limit,IN/not IN,like等常用短句都包含进CDbCriteria这个类中去，这样整个代码会比较规范，一目了然。\n\n```php\n$criteria =new CDbCriteria();\n\n$criteria->addCondition(\"id=1\"); //查询条件，即where id =1  \n$criteria->addInCondition(\'id\', array(1,2,3,4,5));//代表where id IN (1,2,3,4,5,);  \n$criteria->addNotInCondition(\'id\',array(1,2,3,4,5));//与上面正好相法，是NOT IN  \n$criteria->addCondition(\'id=1\',\'OR\');//这是OR条件，多个条件的时候，该条件是OR而非AND \n$criteria->addSearchCondition(\'name\',\'分类\');//搜索条件，其实代表了。。where name like \'%分类%\'  \n$criteria->addBetweenCondition(\'id\', 1, 4);//between1 and 4\n\n//这个方法比较特殊，他会根据你的参数自动处理成addCondition或者addInCondition\n//即如果第二个参数是数组就会调用addInCondition\n$criteria->compare(\'id\',1);   \n\n$criteria->select = \'id,parentid,name\';//代表了要查询的字段，默认select=\'*\';  \n$criteria->join = \'xxx\'; //连接表 \n$criteria->with = \'xxx\';//调用relations   \n$criteria->limit =10;   //取1条数据，如果小于0，则不作处理  \n$criteria->offset =1;   //两条合并起来，则表示 limit 10 offset1,或者代表了。limit 1,10  \n$criteria->order = \'xxx DESC,XXX ASC\' ;//排序条件 \n$criteria->group = \'group 条件\'; \n$criteria->having = \'having 条件 \'; \n$criteria->distinct = FALSE;//是否唯一查询\n```',2,'php,yii',1,0,24,'2014-12-27 22:13:57','2015-02-12 22:45:48'),(24,'版权大旗下的权益之争 记弹幕视频网站bilibili年末庭审','![Alt text](http://admin.500efuma.me/Upload/20141227/d84e1b66735b9b92c1d67a89dcdc684e.jpeg)\n\n　　2014年12月26日，北京爱奇艺科技有限公司（原告，以下简称爱奇艺）诉上海幻电信息科技有限公司（被告，以下简称B站）侵害作品信息网络传播权纠纷案于在上海浦东新区人民法院民事庭开庭审理。\n\n　　B站一直以来的网络热门度与其视频版权问题一样有名。此前各种坊间传闻今天算是正式展现在大众视野中。相比前夕网络上闹的沸沸扬扬不同，开庭到场旁听的人数仅为15人左右。\n\n　　原告提出被告侵害了其享有独家网络传播权的电视剧《悬崖》、《像火花 像蝴蝶》及综艺节目《快乐大本营20140719》的权益，要求被告赔偿其经济损失。原告方代理当庭出示了相关节目的原版权著作权归属方的证明文件、节目的独家网络传播权的授权书以及被告方的侵权公证文件。公证文件内容为电视剧节目在B站上的点击播放数，但是《快本》节目的播放数被屏蔽，只有弹幕数。\n\n　　被告提出爱奇艺的独家网络传播权有不确定因素，因涉事电视剧版权有关乐视，而乐视没有提供相关文件。被告庭上着重解释了其视频的审核流程，出具了上传用户的注册信息和登陆IP作为证据证明用户是真实存在而非本站自己上传，并不提供视频本身的存放介质。\n\n　　双方还就赔偿金的问题进行了辩论，被告方代理认为自己的站点上的播放数相对源的播放数差距极多，对爱奇艺几乎没有或者只有极少的经济损失，对十万的赔偿金提出质疑；原告爱奇艺则表示每购买一部节目都要花费大量资金，双方各执一词。期间审判长询问了普通用户非管理员观看B站视频时能否看到视频来源。\n\n　　值得一提的是，被告方律师在向法庭解释何为“弹幕”时候，读法为“tan幕”。期间还友好交流了花卷好吃不好吃的问题。最后三方去其它房间核对证据及相谈其他事宜，当天公开审理结束。\n\n　　在现在越来越多的独立制作人、原创者层出不穷的时代，版权的大旗似乎也渐渐开始飘扬起来。从今年年初开始，各种行业的知识产权消息纷至沓来，远有《舌尖上的中国2》，近有《中国合伙人》。现在国外的厂商也很注意在华的版权问题，国家提高这方面的管理力度也是很容易理解的。在有前车之鉴的前提下，B站的这场官司的输赢恐怕结果还是比较明朗的。\n\n　　除26日外，在2015年1月7日、8日还有2场诉讼，原告分别为广州斗鱼网络科技有限公司及华视网聚（常州）文化传媒有限公司。在后2天的诉讼中，B站的视听许可证提供者上海看看牛视网络传播有限公司也同列被告席。\n\n　　至于这场版权之争到底何去何从，大家请以最终的司法的决断为准吧。\n\n*以上某些记者个人观点并不代表178动漫频道立场，发布新闻亦不代表178动漫频道认同其观点。就版权时代下的“生存战略”值得大家探讨一番。*\n\n\n**【前情回顾】**\n\n　　根据公开信息显示，上海幻电面临9起涉及网络传播权的案件。根据检索公告，9起案件的原告/上诉人分别是北京爱奇艺、北京奇艺、广州斗鱼网络科技以及华视网聚，案由均是“侵害作品信息网络传播权纠纷”。\n　　上海幻电是弹幕视频网站哔哩哔哩(网友简称“B站”)的实体运营公司，前身为总部设在杭州的幻电科技有限公司。与普通视频网站不同，弹幕视频网站的观看者能在观看过程中发表自己的评论，这些评论在屏幕飘过，颇似飞行射击游戏里的弹幕。\n\n*本文由178驻站记者 狐狸 撰文报道，独家发布于178ACG频道（acg.178.com），转载请注明作者及出处，并于文首保留此行。*',4,'bilibili,哔哩哔哩,版权,出来混始终要还的',1,0,33,'2014-12-27 22:20:16','2015-02-12 04:06:36'),(25,'博客上线啦！','###前言\n\n历时1个月，每天下班之后写写，初步完成了自己的博客。\n\n其实很早就有做一个自己博客的想法了。试过很多各大论坛上的博客系统，但是总觉得不符合我自己的喜好。\n\n我还是想做一个属于我自己的，我自己定义风格的网站。\n\n有人说去使用WordPress。\n\n我去试过，确实很强大，但是有很多功能我都用不着，最重要的是那个后台慢的简直令人发指！！\n\n于是乎我就萌生了自己做一个博客系统出来。\n\n###使用技术\n\n本博客主要使用的为Thinkphp框架，其实也有想过用Yii，但是后来都已经搭建完成了，我就懒得再换框架了。\n\n开发过程中也参考了一些网站的设计思路，还有WordPress的源码。\n\n后台的话也没什么特别好说的，直接拿了bootstrap的一套样式然后前后台一起实现。样式什么的我实在是懒得去花时间设计了，而且我的美工能力不行。\n\n###其他\n\n这个博客系统对于我自己来说也能练练手，写写我自己工作学习中遇到的问题和解决方法。\n\n现在功能还在继续完善中。\n\n以后会做出一个多人系统来供大家使用。（如果有人想用的话。。）\n\n还有后台的提醒功能，管理员之间的socket聊天功能，在线的音乐播放器，文章编辑器Markdown中的视频、音频功能等等\n\n###最后\n\n继续努力工作，努力学习，大家有什么好的提议可以给我留言评论。\n\n###最后的最后\n\n评论系统是有邮件提醒功能的哦！所以说如果要讨论技术性的问题最好是在评论的时候留下你的真实邮箱。这样我会针对每个人进行答复的。\n\n在以后的日子我会针对博客中的每个功能点的实现进行讲解，开源的大家开源一起学习嘛~\n\n',5,'上线纪念,我自己的博客',1,10,66,'2015-01-07 16:27:18','2015-02-15 04:51:16');
/*!40000 ALTER TABLE `fm_article_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_article_type`
--

DROP TABLE IF EXISTS `fm_article_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_article_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `key` varchar(45) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key_UNIQUE` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_type`
--

LOCK TABLES `fm_article_type` WRITE;
/*!40000 ALTER TABLE `fm_article_type` DISABLE KEYS */;
INSERT INTO `fm_article_type` VALUES (1,'JAVA','java',1,1,'2014-12-10 10:35:35',NULL),(2,'PHP','php',1,1,'2014-12-10 10:35:53',NULL),(3,'Python','python',1,1,'2014-12-10 10:35:53',NULL),(4,'动漫资讯','acg',1,1,'2014-12-10 10:36:41',NULL),(5,'随笔','essay',1,1,'2014-12-10 10:36:41',NULL),(6,'NodeJS','nodejs',1,1,'2014-12-10 10:36:58',NULL),(7,'Linux','linux',1,1,'2014-12-10 10:37:15',NULL),(8,'C++','cjj',1,0,'2014-12-24 14:37:47',NULL),(9,'Git','git',1,1,'2014-12-10 10:39:07',NULL),(10,'开发杂项','other',1,1,'2014-12-10 10:39:07',NULL),(78,'HTML5','html5',1,1,'2014-12-18 10:47:47','2015-01-06 11:35:08');
/*!40000 ALTER TABLE `fm_article_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_self_company`
--

DROP TABLE IF EXISTS `fm_self_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_self_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `work` varchar(500) DEFAULT NULL,
  `achievement` longtext,
  `stm` datetime DEFAULT NULL,
  `etm` datetime DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_self_company`
--

LOCK TABLES `fm_self_company` WRITE;
/*!40000 ALTER TABLE `fm_self_company` DISABLE KEYS */;
INSERT INTO `fm_self_company` VALUES (1,'武汉中金慧天科技有限公司','J2EE开发,PHP开发,服务器组长','连续3季度绩效第一,管理3个人的服务器团队','2012-09-03 00:00:00','2014-02-20 00:00:00',1,'2015-01-06 14:57:12','2015-01-06 06:57:13'),(2,'深圳市联信通信息科技有限公司','PHP开发','','2014-03-03 00:00:00','2014-04-30 00:00:00',1,'2015-01-06 15:47:46','2015-01-06 09:03:43'),(3,'深圳市精准分众传媒','PHP开发','','2014-05-04 00:00:00','2015-01-06 00:00:00',1,'2015-01-06 17:06:57','2015-01-06 09:06:57');
/*!40000 ALTER TABLE `fm_self_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_self_info`
--

DROP TABLE IF EXISTS `fm_self_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_self_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `profession` varchar(500) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_self_info`
--

LOCK TABLES `fm_self_info` WRITE;
/*!40000 ALTER TABLE `fm_self_info` DISABLE KEYS */;
INSERT INTO `fm_self_info` VALUES (1,'大魔王','中级PHP炼金术师,初级J2EE炼金术师','1991-04-23 00:00:00','zha_zha@outlook.com',1,'2015-01-05 18:17:06','2015-01-05 10:17:43');
/*!40000 ALTER TABLE `fm_self_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_self_project`
--

DROP TABLE IF EXISTS `fm_self_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_self_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `technology_used` varchar(500) DEFAULT NULL,
  `content` longtext,
  `picture` longtext,
  `stm` datetime DEFAULT NULL,
  `etm` datetime DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_self_project`
--

LOCK TABLES `fm_self_project` WRITE;
/*!40000 ALTER TABLE `fm_self_project` DISABLE KEYS */;
INSERT INTO `fm_self_project` VALUES (1,'滴答微学习','http://www.91dida.com/','php,mysql,apache,thinksns','Web项目，使用ThinkSNS进行的二次开发。其中的名师堂，资料室等应用是由本人进行开发的。技术方面主要使用PHP,MySQL,JQuery,AJAX等等。这个网站的目的是简化学生和老师的学习以及工作，并且提供无纸化操作的学习交流平台。',NULL,'2012-09-10 00:00:00','2013-04-08 00:00:00',1,1,'2014-01-01 00:00:00','2015-01-07 01:35:40'),(5,'微学习Android客户端','http://www.title.91dida.com/TitleBank/SNSClient/didastudyV2.0.7_r.apk','php,thinkphp,thinksns,mysql,apache,linux','Android项目，这个工程整个开发过程中一共做了3个版本，第一和第二个版本都使用的SSI框架(spring3 struts2 mybatis)，区别就是第二个版本中使用了黑盒的公共JAR包将请求URL等信息和文件同步的方法进行了封装。但是到后来公司决定换成使用PHP作为服务器，于是就有了第三个版本，依旧是使用ThinkSNS进行开发，与上面的项目是同一个工程，本人编写了全部的API和测试，文档等工作。点击上面的标题可以下载体验下。',NULL,'2013-05-22 00:00:00','2014-02-10 00:00:00',1,1,'2015-01-07 09:34:26','2015-01-07 01:40:38');
/*!40000 ALTER TABLE `fm_self_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_self_skill`
--

DROP TABLE IF EXISTS `fm_self_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_self_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `value` tinyint(4) DEFAULT '0',
  `admin_id` int(11) NOT NULL,
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_self_skill`
--

LOCK TABLES `fm_self_skill` WRITE;
/*!40000 ALTER TABLE `fm_self_skill` DISABLE KEYS */;
INSERT INTO `fm_self_skill` VALUES (1,'PHP',86,1,'2015-01-06 10:40:48','2015-01-06 03:25:12'),(2,'JAVA',71,1,'2015-01-06 10:41:04','2015-01-06 03:25:03'),(3,'HTML',83,1,'2015-01-06 10:41:40','2015-01-06 03:39:57'),(4,'CSS',74,1,'2015-01-06 10:54:28','2015-01-06 03:39:57'),(5,'Javascript',61,1,'2015-01-06 11:38:26','2015-01-06 03:38:26'),(6,'jQuery',67,1,'2015-01-06 11:38:37','2015-01-06 03:38:37'),(7,'MySQL',78,1,'2015-01-06 11:38:45','2015-01-06 09:03:24'),(8,'Linux',53,1,'2015-01-06 11:38:57','2015-01-06 03:38:57');
/*!40000 ALTER TABLE `fm_self_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_system`
--

DROP TABLE IF EXISTS `fm_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `value` varchar(1000) DEFAULT NULL,
  `key` varchar(20) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `ctm` datetime NOT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_system`
--

LOCK TABLES `fm_system` WRITE;
/*!40000 ALTER TABLE `fm_system` DISABLE KEYS */;
INSERT INTO `fm_system` VALUES (1,'傻逼语录','你写网站这么屌，你家里人知道吗？','text',1,'2014-12-27 16:11:06','2014-12-27 08:11:06');
/*!40000 ALTER TABLE `fm_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_wx_activity`
--

DROP TABLE IF EXISTS `fm_wx_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_wx_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `openid` varchar(100) NOT NULL,
  `point` int(11) NOT NULL DEFAULT '0',
  `ctm` datetime DEFAULT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信活动表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_wx_activity`
--

LOCK TABLES `fm_wx_activity` WRITE;
/*!40000 ALTER TABLE `fm_wx_activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `fm_wx_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_wx_user`
--

DROP TABLE IF EXISTS `fm_wx_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_wx_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(100) NOT NULL,
  `qq` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `headimgurl` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `ctm` datetime DEFAULT NULL,
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_wx_user`
--

LOCK TABLES `fm_wx_user` WRITE;
/*!40000 ALTER TABLE `fm_wx_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `fm_wx_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-15 18:03:46
