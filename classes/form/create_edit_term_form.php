<?php

namespace block_bcn_glossary\form;

require_once($CFG->libdir . '/formslib.php');

class create_edit_term_form extends \moodleform {

    public function definition() {

        $mform = $this->_form;

        $mform->addElement('header', 'title_form', get_string('create_title_form', 'block_bcn_glossary'));

        $mform->addElement('text', 'bcn_glossary_form_title', get_string('bcn_glossary_form_title', 'block_bcn_glossary'));
        $mform->addRule('bcn_glossary_form_title', get_string('bcn_glossary_form_title_error', 'block_bcn_glossary'), 'required', null, 'client');
        
        $mform->addElement('textarea', 'bcn_glossary_form_description', get_string('bcn_glossary_form_description', 'block_bcn_glossary'), 'wrap="virtual" rows="4" cols="4"');
        $mform->addRule('bcn_glossary_form_description', get_string('bcn_glossary_form_description_error', 'block_bcn_glossary'), 'required', null, 'client');



        $this->add_action_buttons();

    }
}