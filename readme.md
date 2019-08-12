# Link modifier

> ## WordPress basic installation containing three pages with hreflang attributes; 

----------

# Getting started

## Installation

Clone the repository		
   
   	git clone https://github.com/Marchinka90/multilang.git

Create empty database in MySQL and immport the file from database folder

Make the required configuration changes in wp-config.php

The dashboard can be accessed at

    http://multilang/wp-login.php

Credentials:
		user: Marchinka90
		pass: 8d9R15X&rTq5Q!VHQ5

----------

## Folder

- 'src/wp-content/plugins/link-modifier' - Contains the source code of the plugin 

----------

## Testing plugin

		The plugin works both in creating new page or updating an existing one

		For an example:
		
		- Create a New Page.
		- Add Title and Content in the paragraph.
		- Make some text a link.
		- By default plugin check URL Slug for hreflang. By default hreflang="en-US";
		- Publish and view the new page.
		- Check the source code of the page. There is a hredlang attribute inside the ling tag.

