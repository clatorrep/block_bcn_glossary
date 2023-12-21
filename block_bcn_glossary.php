<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block definition class for the bcn_glossary plugin.
 *
 * @package   block_bcn_glossary
 * @copyright 2023, Cristóbal Latorre Padilla <clatorre@bcnschool.cl>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_bcn_glossary extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_bcn_glossary');
    }

    public function get_content() {
        global $OUTPUT, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();

        $bcn_btt_search = get_string('bcn_btt_search', 'block_bcn_glossary');
        $bcn_placeholder_search = get_string('bcn_placeholder_search', 'block_bcn_glossary');
        $bcn_new_term = get_string('bcn_new_term', 'block_bcn_glossary');

        $letters = ['#','A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

        $contextinfo = [
            'bcn_btt_search' => $bcn_btt_search,
            'bcn_placeholder_search' => $bcn_placeholder_search, 
            'bcn_new_term' => $bcn_new_term, 
            'letters' => $letters, 
        ];

        $this->content->text = $OUTPUT->render_from_template('block_bcn_glossary/bcn_glossary_main', $contextinfo);

        $PAGE->requires->css("/blocks/bcn_glossary/styles/bcn_glossary.css");

        return $this->content;
    }

    public function hide_header()
    {
        return true;
    }

    public function instance_allow_multiple()
    {
        return true;
    }

}