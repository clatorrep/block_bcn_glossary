<?php

require_once('../../config.php');

require_login();

$mform = new \block_bcn_glossary\form\create_edit_term_form();

$returnurl = new moodle_url('/local/pages/glosario-tecnico');

if ($mform->is_cancelled()) {
    
    redirect($returnurl);
    
} else if ($fromform = $mform->get_data()) {
    
    echo '<pre>';
    print_r($fromform);
    echo '</pre>';

} else {

    $site = get_site();
    echo $OUTPUT->header();
    // Display the form.
    $mform->display();
    
    echo $OUTPUT->footer();
}