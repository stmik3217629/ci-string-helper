
<?php include_once('comps/header.php') ?>

<div class="main-content container">
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-10">
		<h1>CodeIgniter - String Helper</h1>
		<p>String Helper merupakan helper built-in yang terdapat pada CI yang memudahkan kita untuk melakukan manipulasi string.</p>
	</div>
  </div>
  
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-10">
		<h3>. Loading Helper</h3>
		<p>Helper ini bernama <code>string</code>. Jadi untuk meload helper ini kita dapat melakukan <pre>$this->load->helper('string');</pre></p>
	</div>
  </div>

  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-10">
		<h3>. Example</h3>
		<p><a href="<?php print base_url() ?>string-generator">String Generator</a> - Membuat string acak</p>
		<p><a href="<?php print base_url() ?>string-reducer">Stirng Reducer</a> - Menghilangkan karakter yang tidak dibutuhkan </p>
		<p><a href="<?php print base_url() ?>string-increment">String Incerement</a> - Membuat penambahan pada string untuk menambahkan angka </p>
	</div>
  </div>
</div>
	
<?php include_once('comps/footer.php') ?>
