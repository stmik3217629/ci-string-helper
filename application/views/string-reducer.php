
<?php include_once('comps/header.php') ?>

<div class="container">
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-10">
		<h1>String Reducer</h1>
		<p>Menghilangkan beberapa karakter yang tidak perlu menggunakan fungsi <code>reduce_multiples()</code> dan <code>strip_quotes()</code> yang terdapat pada <strong>helper String</strong> built-in dari CodeIgniter.</p>

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
                <label for="character">Karakter yang di filter</label>
                <input class="form-control" type="text" name="character" id="character">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="shouldTrim" id="shouldTrim">
                <label class="form-check-label" for="shouldTrim">Hapus karakter yang menggantung</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="shouldRemoveQuotes" id="shouldRemoveQuotes">
                <label class="form-check-label" for="shouldRemoveQuotes">Hapus tanda petik</label>
            </div>
            
            <div class="form-group mt-4 text-right">
                <input type="submit" value="Submit" class="btn btn-success mt-4">
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
    const formCharacter = document.getElementById('character')
    const formShouldTrim = document.getElementById('shouldTrim')
    const formShouldRemoveQuotes = document.getElementById('shouldRemoveQuotes')

    formString.value = `<?php print @$string ?? ',Fred, \"Bill\",, \'Joe\', Jimmy,' ?>`;
    formCharacter.value = `<?php print @$character ?? ',' ?>`;
    formShouldTrim.checked = <?php print (@$shouldTrim) ? 'true' : 'false' ?>;
    formShouldRemoveQuotes.checked = <?php print @$shouldRemoveQuotes ? 'true' : 'false' ?>;

</script>
	
<?php include_once('comps/footer.php') ?>
