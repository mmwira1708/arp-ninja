<?php
/**
 * test create config file
 * arpn-config.php
 */

// create arpn-config.php file
$arpnconfigfile = fopen("arpn-config.php", "w") or die("Unable to open file!");

// prepare the text to be filled into
$txt = "<?php\n";
$txt .= "/**\n";
$txt .= " * This is a configuration file for arpNinja to connect to its environment\n";
$txt .= " */\n";
$txt .= "\n";

$txt .= "// ** MySQL settings - You can get this info from your web host ** //\n";
$txt .= "/** The name of the database for WordPress */\n";
$txt .= "define('DB_NAME', 'database_name_here');\n";
$txt .= "\n";

$txt .= "/** MySQL database username */\n";
$txt .= "define('DB_USER', 'username_here');\n";
$txt .= "\n";

$txt .= "/** MySQL database password */\n";
$txt .= "define('DB_PASSWORD', 'password_here');\n";
$txt .= "\n";

$txt .= "/** MySQL hostname */\n";
$txt .= "define('DB_HOST', 'localhost');\n";
$txt .= "\n";

$txt .= "/** Database Charset to use in creating database tables. */\n";
$txt .= "define('DB_CHARSET', 'utf8');\n";
$txt .= "\n";

$txt .= "/** The Database Collate type. Don't change this if in doubt. */\n";
$txt .= "define('DB_COLLATE', '');\n";
$txt .= "\n";

// write to the arpn-config.php file
fwrite($arpnconfigfile, $txt);