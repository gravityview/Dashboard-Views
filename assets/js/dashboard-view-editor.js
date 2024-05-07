// File: src/js/dropdown.js
import TomSelect from 'tom-select';

document.addEventListener( 'DOMContentLoaded', function () {
	const userRolesSelectElementId = '#gravityview_se_dashboard_views_user_roles';

	if ( !document.querySelector( userRolesSelectElementId ) ) {
		return;
	}

	const userRolesSelectElement = new TomSelect( userRolesSelectElementId );

	userRolesSelectElement.on( 'item_remove', function ( value ) {
		if ( userRolesSelectElement.getValue().length === 0 ) {
			userRolesSelectElement.addItem( 'administrator' );
		}
	} );
} );
