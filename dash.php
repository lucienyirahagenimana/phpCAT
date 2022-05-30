<?php 
require "with_facebook.php";

if (isset($_SESSION['access_token'])) : ?>
<h>logged in</h>

<?php else : ?>
<p>doesn't logged in</p>
<?php endif; ?>