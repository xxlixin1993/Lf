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