ABOUT
-----
A better looking directory listing for apache.

REQUIREMENTS
------------
- PHP (atm. should change to cgi or something) help?

INSTALL
-------
1. clone repo to somewhere safe on your server
2. Open up apache httpd.conf and add this line:

		Include <path/to/git-repo/>/conf/autoindex.conf
	
	Make sure autoindex_module is installed and enabled
	
		LoadModule autoindex_module libexec/apache2/mod_autoindex.so

3. Open autoindex.conf and edit the path on line 7, 9 and 17, [like this](https://github.com/araguaci/autoindex/blob/main/conf/httpd-autoindex.conf).
4. Create alias like [this](https://github.com/araguaci/autoindex/blob/main/alias/autoindex.conf)
5. Restart Apache

CUSTOM THEME
----------------
You can create your own .css file in the css folder and reference it in the header.html file, line 29. 

EXAMPLE
-------
![example](http://i.solidfiles.net/b215662ded.png)


LICENSE
-------
Icons		
		
	All Icons are Copyright © Yusuke Kamiyamane. All rights reserved. Licensed under a Creative Commons Attribution 3.0 license.
	
	http://p.yusukekamiyamane.com/
	http://creativecommons.org/licenses/by/3.0/	
