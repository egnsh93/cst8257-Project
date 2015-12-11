##Requirements

 + Apache web server, or equivalent with mod_rewrite support
 + PHP 5.5+

## Installation

 + Download this repository
 + Unzip to web server
 + Open /app/Core/routes.php and setup routes as desired
 + Open /app/Core/Config.example.php

   - Set your base bath (only required if you are not installing in root)
   - Define your database credentials (if required)
   - Set the default template/theme
   - Rename file to Core/Config.php

+ Edit .htaccess file and update the RewriteBase to the base path you defined in Core/Config.php