mkdir -p admin/src/js/lib \
&& echo "/**
 * All of the code for your admin-facing JavaScript source should 
 * reside in this file.
 * In general everything should be in a component as much as possible.
 */
import component from './lib/component';
(function( $ ) {
    'use strict';
    component();
})( jQuery );" > admin/src/js/index.js \
&& echo "export default function() {
    console.log('Admin component code output');
}" >  admin/src/js/lib/component.js \
&& mkdir -p public/src/js/lib \
&& echo "/**
 * All of the code for your public-facing JavaScript source should 
 * reside in this file.
 * In general everything should be in a component as much as possible.
 */
import component from './lib/component';
(function( $ ) {
    'use strict';
    component();
})( jQuery );" > public/src/js/index.js \
&& echo "export default function() {
    console.log('Public component code output');
}" >  public/src/js/lib/component.js \
&& mkdir -p admin/src/scss \
&& echo "/**
 * All of the CSS for your admin-facing functionality should be
 * included in this file.
 */" > admin/src/scss/main.scss \
&& mkdir -p public/src/scss \
&& echo "/**
 * All of the CSS for your public-facing functionality should be
 * included in this file.
 */" > public/src/scss/main.scss