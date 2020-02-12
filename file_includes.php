<?php
 header('Access-Control-Allow-Origin: *');
require_once "config.php";

$site_url=  site_url ; ?>

<link href='<?php echo $site_url;  ?>packages/core/main.css' rel='stylesheet' />
<link href='<?php echo $site_url;  ?>packages/daygrid/main.css' rel='stylesheet' />
<link href='<?php echo $site_url;  ?>packages/timegrid/main.css' rel='stylesheet' />
<link href='<?php echo $site_url;  ?>packages/list/main.css' rel='stylesheet' />
<script src='<?php echo $site_url;  ?>packages/core/main.js'></script>
<script src='<?php echo $site_url;  ?>packages/core/locales-all.js'></script>
<script src='<?php echo $site_url;  ?>packages/interaction/main.js'></script>
<script src='<?php echo $site_url;  ?>packages/daygrid/main.js'></script>
<script src='<?php echo $site_url;  ?>packages/timegrid/main.js'></script>
<script src='<?php echo $site_url;  ?>packages/list/main.js'></script>
