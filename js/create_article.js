function choose_a_file() {
  $('form input[id="image_adder"]').trigger('click');
}
$('div[id="input_div"]').bind('DOMSubtreeModified', function(){
  if (document.getElementById('input_div').innerHTML !== "") {
    document.getElementById('empty_div').style.visibility = "hidden";
  } else {
    document.getElementById('empty_div').style.visibility = "visible";
  }
});
