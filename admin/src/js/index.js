/**
 * All of the code for your admin-facing JavaScript source should
 * reside in this file.
 * In general everything should be in a component as much as possible.
 */


// import component from './lib/component';
import grant from './lib/grant';
// import auth from 'simple-oauth2';



( function ( $ ) {
    'use strict';
    // component();
    const code = grant.getCode();

    // const grant = new GrantMyob();
    console.log( "======================" );
    console.log( code );
    console.log( "======================" );

    console.log( $( "#test" ) );
} )( jQuery );