# LF PHP Framework

## Install
1. log目录要有权限写入日志
2. 执行composer update
3. cp .env.example .env
4. 修改env中配置和config/database相结合
5. 修改nginx配置
```
server {
    listen       80;
    server_name  lf.com;
    index index.php;
    root /home/lixin/Lf;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~\.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass	127.0.0.1:9000;
        fastcgi_index	index.php;
        fastcgi_param	SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include		fastcgi_params;
    }
}
```

## MYSQL
```
 CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(40) NOT NULL DEFAULT '' COMMENT '用户密码 sha1(password+salt)',
  `salt` varchar(10) NOT NULL DEFAULT '' COMMENT 'salt盐',
  `add_time` int(10) DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表'
```