<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>AJAX sample code with Select Option</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
  <form action="" method="POST">
    <select name="sampleSelect" id="sampleSelect" size="7" multiple>
      <option value="1">Negative value</option>
      <option value="2">Value 1</option>
      <option value="3">Value 2</option>
      <option value="4">Value 3</option>
      <option value="5">Value 4</option>
      <option value="6">Value 5</option>
    </select>
    <button type="button" id="sampleButton">Sample button</button>
  </form>
	
	<script>
		$('#sampleSelect').change(function() {
			$( "#sampleSelect option:selected" ).each(function() {
			  // str += $( this ).text() + " ";
				// console.log($(this).text());
				if($(this).text() == 'Negative value') {
					$.ajax({
						url: '<?php $_SERVER['PHP_SELF']; ?>',
						context: document.body
					}).done(function () {
						// console.log('Disable button');
						$('#sampleButton').attr('disabled', '');
					});
				} else {
					$.ajax({
						url: '<?php $_SERVER['PHP_SELF']; ?>',
						context: document.body
					}).done(function () {
						console.log('Disable button');
						$('#sampleButton').removeAttr('disabled', '');
					});
				}
			});
		});
	</script>
</body>
</html>
