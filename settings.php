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
 * Settings for the JBC Notes block
 *
 * @package    block_jbcnotes
 * @author     Gautam Kumar Das<gautam.arg@gmail.com>
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $perpageoptions = array();
    for ($i = 1; $i < 20; $i++) {
        $perpageoptions[$i] = $i;
    }
    $settings->add(new admin_setting_configselect('block_jbcnotes/jbcnotesperpage', get_string('jbcnotesperpage', 'block_jbcnotes'),
                       get_string('jbcnotesperpage_help', 'block_jbcnotes'), 5, $perpageoptions));

    $settings->add(new admin_setting_configtext('block_jbcnotes/characterlimit', get_string('characterlimit', 'block_jbcnotes'),
                       get_string('characterlimit_help', 'block_jbcnotes'), 180, PARAM_INT, 3));

    $positionoptions = array();
    $positionoptions['jbcnotes-pos-rb'] = get_string('bottomright', 'block_jbcnotes');
    $positionoptions['jbcnotes-pos-lb'] = get_string('bottomleft', 'block_jbcnotes');
    $positionoptions['jbcnotes-pos-rt'] = get_string('topright', 'block_jbcnotes');
    $positionoptions['jbcnotes-pos-lt'] = get_string('topleft', 'block_jbcnotes');
    $settings->add(new admin_setting_configselect('block_jbcnotes/icondisplayposition', get_string('icondisplayposition', 'block_jbcnotes'),
                       get_string('icondisplayposition_help', 'block_jbcnotes'), 'jbcnotes-pos-rb', $positionoptions));
}