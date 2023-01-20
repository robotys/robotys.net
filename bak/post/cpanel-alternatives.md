List of Viable Alternatives to CPanel
===

Recently got an interesting problem to look for by a friend: as a non-linux user, what is a viable alternatives to CPanel as GUI based server management system?

Surprisingly it can not be answer shotly and sweetly. It seems so convoluted and complex.

This write up are my raw thought process on the topic.

Firstly, we need to have a checklist of what we want to do in the server.

And best we have and ideal workflow on how to achieve it.

As an overview, we need to be able to:

1. Account management to create user and its corresponding access
2. Manage domain with its corresponding root directory
3. Run a PHP script, latest version is the best with standard basic module enabled
4. Run Wordpress, Codeigniter and Laravel as prerequisite
5. Have a MySQL database in stock configuration with basic security
6. MySQL editor to manage data in the database
6. FTP to manage files upload and etc.
7. Email account that tied to the domain
8. Email interface with basic email management features
9. SMTP to allow system to send email out
10. SSH keys management so root user can access the bare metal
11. Git and Composer installed to enable continuous integration
12. Update and upgrade OS patch, PHP patch, MySQL and Web server of choice

Well, thats a handfull.

Now, lets get a list of all available CPanel alternatives:

- Webmin
- Virtualmin
- ISPconfig
- Directadmin
- Plesk
- CentOS Web Panel
- VestaCP

Aaaaannnd after found VestaCP in the list, i think i gonna start trying it.

Reason: nice UI and seems like ticking all the 12 checklist above.

Lets go VestaCP!

UPDATE (2019-07-23)

Not using VestaCP anymore due to Need to purchase premium plugin for File Manager and FTP.

So, right now back to rambo mode: SSH into ubuntu and install and config whatever i want.

Stay tuned for checklist and pointers on that.