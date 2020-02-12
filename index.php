

<?php
require_once 'views/views_head.php';
require_once 'views/views_main.php';

require_once 'models/models_mysql_message.php';
require_once 'models/models_form.php';

$models_form = new models_form();
$models_form->insert_data_from_form();
$models_form->get_data_from_mysql();
require_once 'views/views_footer.php';