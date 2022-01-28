module.exports = {

	getCode() {
		let accessCode;
		let params = window.location.search.split( '&' );
		params.forEach( el => {
			let subStr = el.split( '=' );

			if ( subStr[ 0 ] == "code" || subStr[ 0 ] == "?code" ) accessCode = subStr[ 1 ];
		} )

		return accessCode;
	}

}