// Using jQuery to submit form data asynchronously
$(document).ready(function() {
  $('#registrationForm').submit(function(e) {
    e.preventDefault(); // Prevent the form from submitting normally

    // Gather form data
    var formData = $(this).serialize();

    // Send form data to the server using AJAX
    $.ajax({
      type: 'POST',
      url: 'submit.php', // PHP file to handle form submission
      data: formData,
      success: function(response) {
        alert('Đăng ký thành công!'); // Show success message
        $('#registrationForm')[0].reset(); // Reset the form
      },
      error: function(error) {
        alert('Đã có lỗi xảy ra. Vui lòng thử lại sau.'); // Show error message
      }
    });
  });
});
