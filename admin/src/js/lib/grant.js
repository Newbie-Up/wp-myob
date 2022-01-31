const axios = require( 'axios' ).default
const qs = require( 'qs' )

let credentials = {
	apiUrl: "https://api.myob.com/accountright",
	redirect_uri: "https://www.dexdevelopment.com.au",
	client_id: "d907c2fd-aae8-4ecb-bf59-d54eeace9012",
	client_secret: "EqxdJ8b0qGQ0PW3Z7ImpJoM1",
	company_file_uri: "",
	company_file_id: "",
	access_token: "",
	refresh_token: ""

}

module.exports = {


	getCode() {
		let accessCode;
		let params = window.location.search.split( '&' );
		params.forEach( el => {
			let subStr = el.split( '=' );

			if ( subStr[ 0 ] == "code" || subStr[ 0 ] == "?code" ) accessCode = subStr[ 1 ];
		} )

		return accessCode;
	},

	getAccessToken( code ) {

		const body = {
			"client_id": credentials.client_id,
			"client_secret": credentials.client_secret,
			"grant_type": "authorization_code",
			"redirect_uri": credentials.redirect_uri,
			"code": code
		}

		console.log( qs.stringify( body ) );
		axios.post( "https://secure.myob.com/oauth2/v1/authorize/", qs.stringify( body ), {
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded'
				},
			} )
			.then( function ( response ) {
				console.log( response );
			} )
			.catch( function ( error ) {
				console.log( error );
			} );
	}

}