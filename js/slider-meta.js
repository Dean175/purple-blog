
var addButton = document.getElementById( 'image-upload-button' );
var deleteButton = document.getElementById( 'image-delete-button' );
var img = document.getElementById( 'image-tag' );
var hidden = document.getElementById( 'img-hidden-field' );

// Create a new media frame
var customUploader = wp.media({
	title: 'Select an Image',
	button: {
		text: 'Use this Image'
	},
	multiple: false // Set to true to allow multiple files to be selected
});

addButton.addEventListener( 'click', function() {
	/* if customUploader exist */
	if ( customUploader ) {
		/* open it */
		customUploader.open();
	}
} );

// When an image is selected in the media frame
customUploader.on( 'select', function(){

	// Get media attachment details from the frame state
	var attachment = customUploader.state().get('selection').first().toJSON();
	img.set
} );