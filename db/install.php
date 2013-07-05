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

defined('MOODLE_INTERNAL') or die("Direct access to this location is not allowed.");
require_once("$CFG->dirroot/blocks/helpdesk/lib.php");

/**
 * This function gets called after the block's tables are created.
 *
 * @return bool
 */
function xmldb_block_helpdesk_install() {
    $hd = helpdesk::get_helpdesk();
    $rval = $hd->install();
    return $rval;
}
