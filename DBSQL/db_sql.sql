CREATE DATABASE  IF NOT EXISTS `500efuma` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `500efuma`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: 500efuma
-- ------------------------------------------------------
-- Server version	5.6.20

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
INSERT INTO `fm_admin` VALUES (1,'6cc8c26d6ca0356c6890dcd1e8c35387','saki','30330e97a2bde4a811348340a16485de','大魔王','zha_zha@outlook.com','/Upload/headimg/saki.jpg','2014-12-12 10:15:10',NULL);
/*!40000 ALTER TABLE `fm_admin` ENABLE KEYS */;
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
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_list`
--

LOCK TABLES `fm_article_list` WRITE;
/*!40000 ALTER TABLE `fm_article_list` DISABLE KEYS */;
INSERT INTO `fm_article_list` VALUES (15,'Linux搭建LAMP环境(源码安装)适用于ubuntu,linux deepin','当前系统为Linux-deepin-2014 64位\n\n----\n###需要编译到的源码文件\n* httpd-2.2.27.tar.gz\n* mysql-5.6.17.tar.gz\n* php-5.4.28.tar.gz\n* libxml2-2.6.3.tar.gz\n* libpng-1.6.10.tar.gz\n* jpegsrc.v6b.tar.gz\n* freetype-2.5.3.tar.gz\n* libmcrypt-2.5.8.tar.gz\n* autoconf-2.61.tar.gz\n* libgd-2.1.0.tar.gz\n* zlib-1.2.8.tar.gz\n\n上面这些是基本的编译文件，如果需要其他的功能，比如**memcache**，则需要另外下载编译文件进行安装\n\n----\n\n###检查编译环境\n源码包安装方式需要Gcc编译环境，所以要检查下系统是否已经安装了gcc。\n\n		sudo dpkg --get-selections|grep gcc\n\n如果有输出安装信息，就说明编译的环境已经安装了。\n\n---\n\n###卸载默认的软件\n检查是否有相关软件\n\n        sudo dpkg --get-selections|grep 软件名称\n\n检测服务是否正在运行\n\n如果正在运行，则需要停止后才能进行卸载，主要针对apache,mysql\n\n        netstat -tnl  \n\n        apache默认端口 80   mysql默认端口 3306\n\n停止服务\n\n        sudo /etc/init.d/服务名 stop\n\n卸载软件\n\n如果是ded安装的，则使用 \n\n		sudo apt-get -remove 软件名称\n\n如果是源码安装的，删除文件夹即可\n\n---\n\n###编译和安装软件\n安装过程一般都是使用\n\n		tar zxvf 文件名   （解压）\n\n然后进入目录\n\n	sudo ./congfigure  （配置）\n\n        sudo make （编译）\n\n        sudo make install （安装）\n\n---\n\n###安装libxml2\n\n		sudo ./configure --prefix=/usr/local/libxml2\n\n		sudo make\n\n这一步在执行的时候遇到了错误，在网上查找资料找到了解决方法：\n\n打开解压之后的文件夹，打开nanohttp.c  找到1588行 在方法中添加 0777的权限设置，即修改成\n\n        fd = open(filename, O_CREAT | O_WRONLY,0777);\n接下来继续\n\n        sudo make install\n\n---\n###安装libmcrypt\n\n        sudo ./configure --prefix=/usr/local/libmcrypt\n\n        sudo make\n\n        sudo make install\n\n---\n\n###安装zlib\n>注意：安装zlib之前需要安装此软件，命令：\n>\n>sudo apt-get install zlib1g-dev		\n\n        sudo ./configure --prefix=/usr/local/zlib\n\n        sudo make\n\n        sudo make install\n\n---\n###安装libpng\n\n        sudo ./configure --prefix=/usr/local/libpng\n\n        sudo make\n\n        sudo make install\n\n---\n\n###安装jpeg6\n\n>需要手动建立目录:\n\n		sudo mkdir /usr/local/jpeg6  //建立jpeg6软件安装目录\n\n		sudo mkdir /usr/local/jpeg6/bin     //建立存放命令的目录\n\n		sudo mkdir /usr/local/jpeg6/lib      //创建jpeg6库文件所在目录\n\n		sudo mkdir /usr/local/jpeg6/include   //建立存放头文件目录\n\n		sudo mkdir -p /usr/local/jpeg6/man/man1    //建立存放手册的目录\n>安装命令:\n\n		sudo ./configure  \\\n\n		--prefix=/usr/local/jpeg6/ \\             \n\n		--enable-shared \\     //建立共享库使用的GNU的libtool\n\n		--enable-static       //建立静态库使用的GNU的libtool \n\n>\n\n		sudo make\n\n		sudo make install\n\n---\n\n###安装freetype\n\n		sudo ./configure --prefix=/usr/local/freetype\n		\n		sudo make\n		\n		sudo make install\n\n---\n\n###安装autoconf\n\n        sudo ./configure\n\n>提示 : error: GNU M4 1.4 is required    \n\n>打开 [http://ftp.gnu.org/gnu/m4/](http://ftp.gnu.org/gnu/m4/)  选择最新版本的下载，这里我选择的是 m4-1.4.17\n\n安装这个文件\n\n		sudo ./configure\n		sudo make\n		sudo make install\n继续安装autoconf  \n  \n		sudo ./configure\n		sudo make\n		sudo make install\n\n---\n\n###安装apache服务器\n\n       	sudo ./configure  \\   //执行当前目录下软件自代的配置命令\n\n		--prefix=/usr/local/apache2 \\    //指定Apache软件安装的位置\n		\n		--sysconfdir=/etc/httpd  \\     //指定Apache服务器的配置文件存放位置\n		\n		--with-z=/usr/local/zlib/ \\     //指定zlib库文件的位置\n		\n		--with-included-apr  \\       //使用捆绑APR/APR-Util的副本\n		\n		--enable-so \\              //以动态共享对象(DSO)编译\n		\n		--enable-deflate=shared \\       //缩小传输编码的支持\n		\n		--enable-expires=shared \\        //期满头控制\n		\n		--enable-rewrite=shared \\        //基于规则的URL操控\n		\n		--enable-static-support          //建立一个静态链接版本的支持 \n\n>\n\n		sudo make\n		\n		sudo make install \n\n注意:APACHE安装完成后,/usr/local/apache2即为apache的根目录,而/etc/httpd/为apache的配置目录\n\n检查配置文件目录\n\n		sudo vi /etc/httpd/httpd.conf\n\n在文件的上方空白处添加：\n\nServerName localhost:80  //监听本机的80端口\n\n		sudo /usr/local/apache2/bin/apachectl start    \n\n启动Apache \n\n		sudo /usr/local/apache2/bin/apachectl stop    \n\n关闭Apache \n\n		netstat -tnl|grep 80     //查看80端口是否开启 \n\nhttp://localhost/去访问Apache服务器 \n\n		sudo echo \"/usr/local/apache2/bin/apachectl start\" >> /etc/rc.local    //添加自启动\n\n注意:若此启动无法写进文件,请用vi编辑器直接编辑,写在该文件的代码段 \'exit 0\'  之前即可\n\n---\n###安装mysql数据库\n\n解压mysql源码安装包\n\n		tar -zxvf mysql-5.5.37.tar.gz\n\n安装一些编译需要的组件     \n\n安装cmake组件\n\n		sudo apt-get install cmake\n\n安装libncurses5-dev组件\n\n        sudo apt-get install libncurses5-dev\n\n安装gcc-c++组件\n\n        sudo apt-get install build-essential\n\n安装bison组件\n\n        sudo apt-get install bison\n\n设置用户组\n\n		sudo groupadd mysql\n		sudo useradd -r -g mysql mysql\n\n编译安装\n\n		sudo cmake \\\n		-DCMAKE_INSTALL_PREFIX=/usr/local/mysql \\\n		-DMYSQL_DATADIR=/usr/local/mysql/data \\\n		-DDEFAULT_CHARSET=utf8 \\\n		-DDEFAULT_COLLATION=utf8_general_ci \\\n		-DMYSQL_UNIX_ADDR=/tmp/mysqld.sock \\\n		-DWITH_DEBUG=0 \\\n		-DWITH_INNOBASE_STORAGE_ENGINE=1\n\n如果编译通过则开始安装，安装时间很长		\n\n		sudo make\n		sudo make install\n\n配置相应的文件\n\n进入 /usr/local/mysql \n\n		sudo chown -R mysql .\n\n        sudo chgrp -R mysql .\n\n        sudo ./scripts/mysql_install_db \n\n        --user=mysql --basedir=/usr/local/mysql \n\n        --datadir=/usr/local/mysql/data \n\n        --no-defaults\n\n配置完成后修改权限\n\n        sudo chown -R root .\n\n        sudo chown -R mysql data\n\n复制配置文件\n\n        sudo cp ./support-files/my-medium.cnf /etc/my.cnf\n\n配置my.cnf信息，找到[mysqld]，然后追加进去\n\n        [mysqld]\n\n        user = mysql\n\n        basedir = /usr/local/mysql\n\n        datadir  = /usr/local/mysql/data\n\n        character-set-server = utf8\n\n将mysql.server拷贝/etc/init.d下：\n\n		sudo cp ./support-files/mysql.server /etc/init.d/mysql  \n\n启动mysql\n\n		sudo /etc/init.d/mysql start\n\n>遇到启动失败“Starting MySQL * Couldn\'t find MySQL server (/usr/bin/mysqld_safe)”时\n\n        sudo rm /etc/mysql/my.cnf\n\n确认mysql是否安装成功\n\n	sudo /usr/local/mysql/bin/mysqladmin version\n\n设置软连接\n\n		cd /usr/local/mysql/bin\n\n		sudo ln -s /usr/local/mysql/bin/mysql /usr/bin\n	\n	　　　sudo ln -s /usr/local/mysql/bin/mysqladmin /usr/bin\n\n		sudo ln -s /usr/local/mysql/bin/mysqldump /usr/bin\n\n给root用户设置密码\n\n		mysqladmin -u root password \"xxx\"\n\n进入mysql看看吧\n\n		Mysql -u root -p\n\n		sudo rm /etc/mysql/my.cnf\n\n---\n\n###安装php\n\n这里使用了简易的安装，之后的扩展另外安装(其实是我总是遇到错误解决太麻烦了，安装了N次之后感觉这个方法最好，基本是不会出错的)\n\n一些扩展我会在下面进行另外的安装，我感觉这样比较清晰。\n\n这里安装的php仅仅关联了apache，mysql\n\n之后会在扩展中安装：pdo_mysql等扩展\n\n    	sudo ./configure \n\n		--prefix=/usr/local/php \n\n    	--with-apxs2=/usr/local/apache2/bin/apxs --with-mysql=/usr/local/mysql/ \n\n    	--enable-mbstring \n\n    	--enable-xml \n\n    	--enable-sockets\n\n\n错误：configure: error: xml2-config not found. Please check your libxml2 installation.\n\n    sudo apt-get install libxml2-dev\n\n\n复制php.ini \n\n    cp /home/sniper/Downloads/php/php.ini-development /usr/local/php/lib/php.ini\n\n\n打开Apache配置文件 \n    sudo gvim /etc/httpd/httpd.conf\n在后边加上 \n\n    PHPIniDir /usr/local/php/\n\n\n    AddType application/x-httpd-php .php\n\n重启apache 在apache的工作目录中写一个phpinfo的文件，然后进入localhost看看\n\n```php\n<?php\n	phpinfo();\n?>\n```\n\n---\n\n###安装Mcrypt扩展模块\n\n进入解压后的php文件的ext文件夹中，可以看到很多的扩展包，找到Mcrypt\n\n        cd /home/你的名字/php-5.4.37/ext/mcrypt\n\n运行phpize\n\n        /usr/local/php/bin/phpize\n\n然后会有如下显示：\n\n这说明可以扩展\n\n接下来编译安装：\n\n        sudo ./configure \\\n\n        --with-php-config=/usr/local/php/bin/php-config\n\n        --with-mcrypt=/usr/local/libmcrypt\n\n        sudo make\n\n        sudo make install\n\n会出现一个路径，进入目录下就能看到so文件扩展\n\n        Installing shared extensions:     /usr/local/php5/lib/php/extensions/no-debug-non-zts-20060613/\n\n然后编辑php.ini文件,在最后添加\n\n        extension_dir = \"/usr/local/php5/lib/php/extensions/no-debug-non-zts-20060613/\"\n        extension = \"mcrypt.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持mcrypt了。\n\n---\n\n###安装pdo_mysql扩展\n\n原理基本与上面相同，只是编译的配置写法不同，这里需要加上mysql的路径。\n\n进入pdo_mysql目录下,运行phpize\n\n        sudo./configure \n        --with-php-config=/usr/local/php/bin/php-config\n        --with-pdo-mysql=/usr/local/mysql\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"pdo_mysql.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持pdo_mysql了。\n\n---\n\n###安装GD库扩展\n\n前面的和上面一样\n\n注意要提前安装 png jepg  freetype 这些\n\n        sudo ./configure \n\n        --with-php-config=/usr/local/php/bin/php-config \n        --with-jpeg-dir=/usr/local/libjpeg/ \n        --with-png-dir=/usr/local/libpng/ \n        --with-freetype-dir=/usr/local/freetype/\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"gd.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持gd了。\n\n---\n\n###安装memcached扩展\n\n在[http://pecl.php.net/package/memcache](http://pecl.php.net/package/memcache) 下载扩展\n\n        下载memcached-3.0.8.tar.gz \n\n解压这个文件\n\n        tar -zxvf memcached-3.0.8.tar.gz \n\n进入解压文件夹中，运行phpize\n\n        sudo ./configure \n        --enable-memcache \n        --with-php-config=/usr/local/php/bin/php-config \n        --with-zlib-dir=/usr/local/zlib/\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"memcache.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持memcache了。\n\n\n---\n\n###安装SOAP扩展\n\n进入php中的soap文件夹，运行phpize\n\n        sudo ./configure \n\n        --with-php-config=/usr/local/php/bin/php-config \n\n        -–enable-soap\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"soap.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持soap了。\n\n---\n\n###安装APC\n\n在[http://pecl.php.net/get/APC-3.1.13.tgz](http://pecl.php.net/get/APC-3.1.13.tgz)下载扩展\n\n运行phpize\n\n        sudo ./configure \n\n        --enable-apc-mmap \n\n        --enable-apc \n\n        --enable-apc-filehits \n\n        --with-php-config=/usr/local/php/bin/php-config\n\n        sudo make\n\n        sudo make install\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"apc.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持apc了。\n\n---\n\n###安装xdebug\n\n下载文件为： xdebug-2.2.5\n过程和上面一样，解压，进入目录，运行phpize，然后安装\n\n		sudo ./configure \n	\n		--with-php-config=/usr/local/php/bin/php-config \n	\n		make && make install\n\n接下来修改php.ini文件\n\n在[Zend]模块之前加入\n\n        zend_extension=\"/usr/local/php/lib/php/extensions/no-debug-non-zts-20100525/xdebug.so\" \n        xdebug.auto_trace=1\n        xdebug.collect_params=1\n        xdebug.collect_return=1\n        xdebug.profiler_enable=1\n        xdebug.remote_enable=true     \n        xdebug.remote_host=192.168.1.101\n        xdebug.remote_port=9000    \n        xdebug.remote_handler=dbgp\n        xdebug.trace_output_dir=\"/home/kotori/xdebug\"\n        xdebug.profiler_output_dir=\"/home/kotori/xdebug\"\n\n编辑完php.ini 文件后 要重启下web 服务器。\n\n---\n\n###安装curl\n\n在[http://curl.haxx.se/download/](http://curl.haxx.se/download/) 下载curl文件\n\n解压后，进入目录进行安装：\n\n        sudo ./configure --prefix=/usr/local/curl\n\n        sudo make  \n\n        sudo make install\n\n之后进入php扩展文件夹中的curl文件夹\n\n运行phpize\n\n        sudo ./configure \n        --with-php-config=/usr/local/php/bin/php-config \n        --with-curl=/usr/local/curl\n\n        sudo make \n\n        sudo make install\n\n\n然后编辑php.ini文件,接着添加\n\n        extension = \"curl.so\"\n\n然后重启apache，然后再访问phpinfo.php 就看到支持curl了。',7,'Linux,LAMP,Ubuntu,php',1,'2014-12-16 10:44:35','2014-12-16 10:44:35');
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
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key_UNIQUE` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_type`
--

LOCK TABLES `fm_article_type` WRITE;
/*!40000 ALTER TABLE `fm_article_type` DISABLE KEYS */;
INSERT INTO `fm_article_type` VALUES (1,'JAVA','java',1,1,'2014-12-10 02:35:35',NULL),(2,'PHP','php',1,1,'2014-12-10 02:35:53',NULL),(3,'Python','python',1,1,'2014-12-10 02:35:53',NULL),(4,'动漫资讯','acg',1,1,'2014-12-10 02:36:41',NULL),(5,'随笔','essay',1,1,'2014-12-10 02:36:41',NULL),(6,'NodeJS','nodejs',1,1,'2014-12-10 02:36:58',NULL),(7,'Linux','linux',1,1,'2014-12-10 02:37:15',NULL),(8,'C++','cjj',1,1,'2014-12-10 02:38:04',NULL),(9,'Git','git',1,1,'2014-12-10 02:39:07',NULL),(10,'开发杂项','other',1,1,'2014-12-10 02:39:07',NULL);
/*!40000 ALTER TABLE `fm_article_type` ENABLE KEYS */;
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
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_system`
--

LOCK TABLES `fm_system` WRITE;
/*!40000 ALTER TABLE `fm_system` DISABLE KEYS */;
/*!40000 ALTER TABLE `fm_system` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-16 19:05:15
