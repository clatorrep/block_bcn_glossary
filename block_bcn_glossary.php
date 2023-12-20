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
        global $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->footer = '';

        $mustache_context = [
            'pluginname' => $this->title,
        ];

        $this->content->text = $OUTPUT->render_from_template('block_bcn_glossary/main', $mustache_context);

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

    /**
     * Defines in which pages this block can be added.
     *
     * @return array of the pages where the block can be added.
     */
    public function applicable_formats() {
        return [
            'admin' => false,
            'site-index' => true,
            'course-view' => false,
            'mod' => false,
            'my' => true,
        ];
    }
}