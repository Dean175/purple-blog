var addButton = document.getElementById( 'image-upload-button' );
var deleteButton = document.getElementById( 'image-delete-button' );
var img = document.getElementById( 'image-tag' );
var hidden = document.getElementById( 'img-hidden-field' );
var customUploader = wp.media({
	title: 'Select an Image',
	button: {
		text: 'Use this Image'
	},
	multiple: false
});

addButton.addEventListener( 'click', function() {
	if ( customUploader ) {
		customUploader.open();
	}
} );