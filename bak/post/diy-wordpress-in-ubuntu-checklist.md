DIY Wordpress in DigitalOcean
===

Once upon a time, you need to do your wordpress installation with a dirty hands.

SSHing to the VPS and install everything.

Nowadays, we've got One-Click-Install equivalent in Digital Ocean.

But i never find the install is satisfactory to the way that i use wordpress.

For a dev who hates to manage wordpress, somehow someway it will come back and bite you.

So this is my checklist after successfully installed Wordpress to my liking in a new instance of DigitalOcean.

The Checklist:

- Buy the domain name. I've used namecheap for so long, it was not checap anymore.
- Initiate DO with Ubuntu 18.04 LTS. Why not 19.04? well, no specific reasons. Please try and let me know.
- Make sure to include your public ssh key in the initiation.
- SSH as root into Ubuntu. Password should be emailed to the current DO user account.
- create new sudo user for next operation. Never lose the password! This user will also be the FTP user account
- Install apache2 from apt-get if necessary
- Check the apache installation. Go to the ubuntu ip over the net. Should see Apache default page. Ip was shown in DO Instance list, or you can just ifconfig in the terminal.
- Go to DNS (mine was namecheap) and add the ip address to your domain of choice. In 1-24 hour, the domain name will resolved to ip address and you should see the apache default page too if the wordpress installation was not done yet.
- Install PHP from apt-get
- Install MySQL from apt-get
- Run MySQL secure install. Remove all test data and change root password
- Enter MySQL, create table for wordpress and its corresponding user-password. Don't forget to FLUSH PRIVILEGES
- Go to sudo user home (~), mkdir `html` and cd into it
- Now inside `/html` wget latest wordpress installer from wordpress.org
- Unzip the installer, you will have `/home/sudouser/html/wordpress` now. 
- Copy `/etc/apache2/sites-available/000-default.conf` to `/etc/apache2/sites-avalable/domain.com.conf` with your domain accordingly
- Nano `/etc/apache2/sites-avalable/domain.com.conf`
- Change the root directory to `/var/www/html/wordpress` and put your domain name as ServerName
- Save and exit Nano. a2ensite the vhost config to enable it. Reload apache to make it in effect
- soft link (ln -s) the `/home/sudouser/html/wordpress` to `/var/www/html`
- Open the domain in browser and wordpress installation will start. Change username `admin` to something else.
- Proceed with wp-config. Use MySQL db user details. Please change wp prefix to something else
- Change file permissions accordingly (644-600-755). Wp-contents to 775
- Change file ownership accordingly (www-data!)
- Add .htaccess file to allow beautiful permalinks to take effect
- Install vsftpd
- Test login FTP
- Test wordpress install plugin with FTP login. Debug accordingly (cannot create dir => dir permission)
- Try Install security plugins (Sucuri)
- Try install themes
- Try upload file in wordpress media
- Make sure all wordpress upload and install is good to go
- Install SSL with letsencrypt/certbot. Make sure it crons renew every week
- Done!

Bonus: there is always a need to have an email account behind the domain to make it more legit.

NEVER EVER install mailbox in the web server.

The best is use a paid email services such as Gmail or Zoho mail.

But as i am that cheap, i use free alternative to them. We got Yandex and Migudo. Both are straight forward to use.

One glitch with Yandex: the verification need to be done BEFORE doing https, as it defaulted to look for http only.

With migudo, it is rather straight forward affair. Done setting up in 15 minutes and waiting for about 3 hour before the MX record was recognized and fully functioned.

Migudo guides is simple and clear enough to follow effectively.

Migudo also provide IMAP and SMTP configuration to be used accordingly. How nice!

And after all that, the domain is now ready to roll for the next phase: Design and UI/UX

Maybe another checklist for UI/UX for the next time.

Cheers~
