Use Different SSH key For Specific Git Repo
===

![Podcast Time!](/media/git-ssh-key.png)

This been haunting me for a long time.

To have a multiple account in the same git repo provider, say Bitbucket, you will encounter an issue where you cannot upload the same ssh key (id_rsa) to both account.

Bitbucket will reject it. And it is reasonable to do so.

All this while my solution was to generate new key (new_rsa) and use ssh config to specify that key.

The problem was it needs a modification in the origin url. Which means it needs quite a time to understand it (by noob like me) and even more time to setup with trial and error (again by noob like me).

There are an easy solution.

We can just specify in the git config which key file we want it to use for the current git repo we are in.

The command are as simple as: 

	git config core.sshCommand "ssh -i ~/.ssh/id_rsa_example -F /dev/null"

Tested in windows git-bash version 2.16.*

So, i suppose it will work for others too.

Cheers~