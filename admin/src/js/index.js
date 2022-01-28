/**
 * All of the code for your admin-facing JavaScript source should
 * reside in this file.
 * In general everything should be in a component as much as possible.
 */


import component from './lib/component';
import test from './lib/test';
import oauth from "simple-oauth2";

( function ( $ ) {
    'use strict';
    component();
    test();

    console.log( test );


} )( jQuery );