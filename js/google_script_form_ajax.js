
var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbyEsjjmUjgPRB2yRA3S7BgzKEue9bMgx7SqJN_uluLsqlcoqTMK/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})
