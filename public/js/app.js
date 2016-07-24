//2016-07-01 Rajesh Parab

// Add a failsafe to prevent accidental deletions using custom javascript
// Add a jQuery event listener (e.g form submit and, when it occurs, perform certain aciton)

$('form.delete-object').submit(function(e) {
		var deleteConfirmed = confirm('Are you sure you want to delete this?!');

		//if 'true', submission will be processed
		//if 'false', submission will be halted
		return deleteConfirmed;
	});

// toggle comment edit forms when "edit" buttons are clicked
$('.edit-object').click(function(e) {
	var $commentItem = $(this).closest('li');
	var $commentForm = $commentItem.find('form.edit-object-form');
	$commentForm.toggleClass('hide');
});