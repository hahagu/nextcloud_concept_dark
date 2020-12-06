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


script('conceptdark', 'settings-personal');
?>

<div id="conceptdark" class="conceptdark-personal section">
    <h2><?php p($l->t("Concept Dark")); ?></h2>
    <p><?php p($l->t("A Concept Dark theme for Nextcloud.")); ?></p>
    <div class="preview-list">
        <div class="preview">
            <div class="preview-image" style='background-image: url("<?php p($appWebPath); ?>/img/theme-concept-dark.png");'></div>
            <div class="preview-description">
                <h3><?php p($l->t("Concept Dark theme")); ?></h3>
                <p><?php p($l->t("Concept Dark Theme for Nextcloud, providing a modern acrylic interface with dark sleek look. Please refresh the page for changes to take effect.")); ?></p>
                <input type="checkbox" class="checkbox" id="conceptdark-enabled" <?php p($themeEnabled ? "checked" : ""); ?>>
                <label for="conceptdark-enabled"><?php p($l->t("Enable Concept Dark theme")); ?></label>
            </div>
        </div>
    </div>
</div>
