<?php
/**
 * Breeze Dark theme for Nextcloud
 * 
 * @copyright Copyright (C) 2020  Magnus Walbeck <mw@mwalbeck.org>
 *
 * @author Magnus Walbeck <mw@mwalbeck.org>
 * 
 * @license GNU AGPL version 3 or any later version
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */


script('conceptdark', 'settings-admin');
?>

<div id="conceptdark" class="conceptdark-admin section">
    <h2><?php p($l->t("Concept Dark")); ?></h2>
    <p><?php p($l->t("Concept Dark Theme for Nextcloud, providing a modern acrylic interface with dark sleek look. Please refresh the page for changes to take effect.")); ?></p>
    <p><?php p($l->t("This setting will enable the theme by default, for any unauthenticated users and users who haven't set a preference.")); ?></p>
    <input type="checkbox" class="checkbox" id="conceptdark-theme-enabled" <?php p($themeEnabled ? "checked" : ""); ?>>
    <label for="conceptdark-theme-enabled"><?php p($l->t("Enable Concept Dark theme by default")); ?></label>
    <p><?php p($l->t("This setting will allow you to choose if the login page should be themed when the theme is enabled by default")); ?></p>
    <input type="checkbox" class="checkbox" id="conceptdark-theme-login-page" <?php p($themeEnabled ? "" : "disabled");?> <?php p($themeLoginPage ? "checked" : "");?>>
    <label for="conceptdark-theme-login-page"><?php p($l->t("Theme the login page")); ?></label>
</div>
