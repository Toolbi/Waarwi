function getOutput(line) {
   $.ajax({
      url:'<?php lang(\'' + line + '\')?>',
      complete: function (response) {
          $('#output').html(response.responseText);
      },
      error: function () {
          $('#output').html('Bummer: there was an error!');
      }
  });
  return false;
}

function lang (line) {
  return getOutput(line);
}