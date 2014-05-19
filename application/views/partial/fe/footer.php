<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
	foreach(get_js_files() as $js_file)
	{
	?>
		<script src="<?php echo base_url().$js_file['path'];?>" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<?php
	}
	?>
  </body>
</html>