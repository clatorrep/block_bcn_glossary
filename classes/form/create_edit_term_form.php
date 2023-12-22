<?php

namespace block_bcn_glossary\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

class create_edit_term_form extends moodleform {

    public function definition() {

        $mform = $this->_form;

        $mform->addElement('text', 'bcn_glossary_form_title', get_string('bcn_glossary_form_title', 'block_bcn_glossary'));
        $mform->addRule('bcn_glossary_form_title', get_string('bcn_glossary_form_title_error', 'block_bcn_glossary'), 'required', null, 'client');

    }
}