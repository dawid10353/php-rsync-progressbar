# php-rsync-progressbar
Easy way to make a progress bar for rsync on a PHP site. 
Use it only on localhost or secure server.

What you need to install it?
- Linux
- Rsync
- Apache
- PHP

Or just
- Docker

<h1>How to install it</h1>

1. Go to document root on your server. For example:
<code>cd /var/www/html</code>

2. Clone repository
```
git clone git@github.com:dawid10353/php-rsync-progressbar.git
```
3. Set correct privileges (Remember on RHEL disable SELINUX or set it correctly) 

```
chmod 777 php-rsync-progressbar -R
```

4. Thats it.

<h1>How to install it on docker</h1>

```
docker pull dawid10353/easy-php-rsync:version1
```

<h1>How it works</h1>

<h2>Screen</h2>

![screen](https://user-images.githubusercontent.com/46601922/150658304-3c329f9e-23f5-4471-b77c-051de4ffa80f.png)

<h2>Video</h2>

https://user-images.githubusercontent.com/46601922/150658321-ac209992-99f7-47ba-bdc3-72b41e508495.mp4

