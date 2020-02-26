
<?php include_once('comps/header.php') ?>

<div class="container">
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-10">
		<h1>String Increment</h1>
		<p>Menambahkan angka pada akhir string untuk membuat penomoran / unique menggunakan fungsi <code>string_increment()</code> yang terdapat pada <strong>helper String</strong> built-in dari CodeIgniter. Sangat berguna untuk membuat sistem penamaan file.</p>

        <a href="<?php print base_url() ?>"><small>⭠ Kembali ke halaman utama</small></a>
    </div>
  </div>
  
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-5">
        <form action="" method="post">
            <div class="form-group">
                <label for="string">String</label>
                <textarea class="form-control" name="string" id="string"></textarea>
            </div>
            
            <div class="form-group">
                <label for="separator">Karakter pemisah</label>
                <input class="form-control" type="text" name="separator" id="separator">
            </div>

            <div class="form-group">
                <label for="suffix">Kata Akhiran</label>
                <input class="form-control" type="text" name="suffix" id="suffix">
            </div>
            
            <div class="form-group mt-4 text-right">
                <input type="hidden" name="index" value="<?php print @$index ?>">
                <input type="submit" name="action" value="Reset" class="btn btn-default mt-4" id="btn-reset">
                <input type="submit" name="action" value="Increment" class="btn btn-success mt-4" id="btn-increment">
            </div>
        </form>
	</div>
	<div class="col-sm-5">
		<h3>. Result</h3>
		<pre><?php print (@$result !== null) ? $result : '<i>... no result</i>' ?></pre>
	</div>
  </div>
</div>

<script>
    const formString = document.getElementById('string')
    const formSeparator = document.getElementById('separator')
    const formSuffix = document.getElementById('suffix')

    formString.value = `<?php print @$string ?? 'Untitled-File' ?>`;
    formSeparator.value = `<?php print @$separator ?? '-' ?>`;
    formSuffix.value = `<?php print @$suffix ?? '.jpg' ?>`;

</script>
	
<?php include_once('comps/footer.php') ?>
