
<?php include_once('comps/header.php') ?>

<div class="container">
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-10">
		<h1>String Generator</h1>
		<p>Membuat sebuah string acak menggunakan fungsi <code>random_string()</code> yang terdapat pada <strong>helper String</strong> built-in dari CodeIgniter.</p>

        <a href="<?php print base_url() ?>"><small>⭠ Kembali ke halaman utama</small></a>
    </div>
  </div>
  
  <div class="row justify-content-md-center mt-4">
	<div class="col-sm-5">
        <form action="" method="post">
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                    <option value="alpha">Alphabeth Only</option>
                    <option value="alnum">Alphanumeric Only</option>
                    <option value="numeric">Numeric Only</option>
                    <option value="nozero">Numeric Without Zero</option>
                    <option value="basic">Basic Random</option>
                    <option value="md5">MD5 Algorithm</option>
                    <option value="sha1">SHA1 Algorithm</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="length">Panjang String</label>
                <input class="form-control" type="text" name="length" id="length">
            </div>
            
            <div class="form-group mt-4 text-right">
                <input type="submit" value="Generate" class="btn btn-success mt-4">
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
    const formType = document.getElementById('type')
    const formLength = document.getElementById('length')

    formType.value = `<?php print @$type ?? 'basic' ?>`
    formLength.value = `<?php print @$length ?? 32 ?>`

    formType.onchange = () => {
        formLength.disabled = [`basic`, `md5`, `sha1`].includes(formType.value)
    }

    formType.onchange()
</script>
	
<?php include_once('comps/footer.php') ?>
