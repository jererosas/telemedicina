"use strict";
/**
 * Plugin: "dropdown_input" (Tom Select)
 * Copyright (c) contributors
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this
 * file except in compliance with the License. You may obtain a copy of the License at:
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF
 * ANY KIND, either express or implied. See the License for the specific language
 * governing permissions and limitations under the License.
 *
 */
Object.defineProperty(exports, "__esModule", { value: true });
exports.default = default_1;
const vanilla_ts_1 = require("../../vanilla.js");
function default_1() {
    var self = this;
    /**
     * Moves the caret to the specified index.
     *
     * The input must be moved by leaving it in place and moving the
     * siblings, due to the fact that focus cannot be restored once lost
     * on mobile webkit devices
     *
     */
    self.hook('instead', 'setCaret', (new_pos) => {
        if (self.settings.mode === 'single' || !self.control.contains(self.control_input)) {
            new_pos = self.items.length;
        }
        else {
            new_pos = Math.max(0, Math.min(self.items.length, new_pos));
            if (new_pos != self.caretPos && !self.isPending) {
                self.controlChildren().forEach((child, j) => {
                    if (j < new_pos) {
                        self.control_input.insertAdjacentElement('beforebegin', child);
                    }
                    else {
                        self.control.appendChild(child);
                    }
                });
            }
        }
        self.caretPos = new_pos;
    });
    self.hook('instead', 'moveCaret', (direction) => {
        if (!self.isFocused)
            return;
        // move caret before or after selected items
        const last_active = self.getLastActive(direction);
        if (last_active) {
            const idx = (0, vanilla_ts_1.nodeIndex)(last_active);
            self.setCaret(direction > 0 ? idx + 1 : idx);
            self.setActiveItem();
            (0, vanilla_ts_1.removeClasses)(last_active, 'last-active');
            // move caret left or right of current position
        }
        else {
            self.setCaret(self.caretPos + direction);
        }
    });
}
;
//# sourceMappingURL=plugin.js.map