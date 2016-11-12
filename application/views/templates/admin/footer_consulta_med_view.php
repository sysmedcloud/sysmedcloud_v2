</body>
<script>
    //Archivos examen rev. por sistema
    $('#archivos_rs').fileinput({
        uploadUrl: "<?php echo base_url(); ?>consulta_medica/upload_files/<?php echo $token_rs; ?>",
        deleteUrl: "<?php echo base_url(); ?>consulta_medica/delete_files/<?php echo $token_rs; ?>",
        maxFilePreviewSize: 10240,
        uploadAsync: true,
        minFileCount: 1,
        maxFileCount: 20,
        showUpload: false, 
        showRemove: false,
        language: 'es',
        allowedFileExtensions : ['jpg', 'png','gif','pdf','csv','doc','docx','xls','xlsx','ppt','pptx','avi','mpg','mkv','mov','3gp','webm','wmv','flv','mp3','mp4','wav'],
		initialPreview: [
			<?php foreach($archivos_rs as $archivo){

				$arch 	= explode(".",$archivo);
				$ext 	= $arch[1];

				switch ($ext) {
					
					case 'mp4': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'avi': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'mpg': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'mkv': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'mov': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case '3gp': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'webm': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'wmv': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'flv': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;

					case 'mp3': ?>
					'<audio controls="" class="kv-preview-data"><source type="audio/mpeg" src="<?php echo base_url().$archivo; ?>"></source><div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></audio>',
					<?php break;
					case 'wav': ?>
					'<audio controls="" class="kv-preview-data"><source type="audio/mpeg" src="<?php echo base_url().$archivo; ?>"></source><div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></audio>',
					<?php break;
											
					case 'jpg': ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
					case 'png': ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
					case 'gif': ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
					
					case 'pdf': ?>
					'<embed class="kv-preview-data" height="100px" width="100px" type="application/pdf" src="<?php echo base_url().$archivo; ?>">',
					<?php break;

					case 'xls': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'xlsx': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'ppt': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'pptx': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'doc': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'docx': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;

					default: ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
				}
			}
			?>
		],
	    initialPreviewConfig: [
	    <?php foreach($archivos_rs as $archivo){ $infoArchivos=explode("/",$archivo);?>
		{caption: "<?php echo $infoArchivos[1];?>",  height: "100px", url: "<?php echo base_url(); ?>consulta_medica/delete_files/<?php echo $token_rs; ?>", key:"<?php echo $infoArchivos[1];?>"},
		<?php } ?>
		]
    }).on("filebatchselected", function(event, files) {
	
	$("#archivos_rs").fileinput("upload");
		
	});
   
   //Archivos examen fisico
   $('#archivos_ef').fileinput({
        uploadUrl: "<?php echo base_url(); ?>consulta_medica/upload_files_ef/<?php echo $token_ef; ?>",
        deleteUrl: "<?php echo base_url(); ?>consulta_medica/delete_files_ef/<?php echo $token_ef; ?>",
        maxFilePreviewSize: 10240,
        uploadAsync: true,
        minFileCount: 1,
        maxFileCount: 20,
        showUpload: false, 
        showRemove: false,
        language: 'es',
        allowedFileExtensions : ['jpg', 'png','gif','pdf','csv','doc','docx','xls','xlsx','ppt','pptx','avi','mpg','mkv','mov','3gp','webm','wmv','flv','mp3','mp4','wav'],
		initialPreview: [
			<?php foreach($archivos_ef as $archivo){

				$arch 	= explode(".",$archivo);
				$ext 	= $arch[1];

				switch ($ext) {
					
					case 'mp4': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'avi': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'mpg': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'mkv': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'mov': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case '3gp': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'webm': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'wmv': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;
					case 'flv': ?>
					'<video src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" controls style="width:auto;height:100px;"><source src="foo.ogg" type="video/ogg"><source src="foo.mp4" type="video/mp4">Tu navegador no implementa el elemento <code>video</code>.<div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></video>',
					<?php break;

					case 'mp3': ?>
					'<audio controls="" class="kv-preview-data"><source type="audio/mpeg" src="<?php echo base_url().$archivo; ?>"></source><div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></audio>',
					<?php break;
					case 'wav': ?>
					'<audio controls="" class="kv-preview-data"><source type="audio/mpeg" src="<?php echo base_url().$archivo; ?>"></source><div class="file-preview-other"><span class="file-other-icon"><i class="glyphicon glyphicon-file"></i></span></div></audio>',
					<?php break;
											
					case 'jpg': ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
					case 'png': ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
					case 'gif': ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
					
					case 'pdf': ?>
					'<embed class="kv-preview-data" height="100px" width="100px" type="application/pdf" src="<?php echo base_url().$archivo; ?>">',
					<?php break;

					case 'xls': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'xlsx': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'ppt': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'pptx': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'doc': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;
					case 'docx': ?>
				    '<object height="100px" width="100px" type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" data="blob:http://localhost/616e086f-57f4-4e96-a161-cfac858de8e8" class="kv-preview-data file-object"><param value="<?php echo base_url().$archivo; ?>" name="movie"><param value="true" name="controller"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="false" name="autoPlay"><param value="false" name="autoStart"><param value="high" name="quality"><div class="file-preview-other"><span class="file-other-icon"><a href="<?php echo base_url().$archivo; ?>"  target="_blanck"><i class="glyphicon glyphicon-file"></i></a></span></div></object>',
					<?php break;

					default: ?>
					'<img src="<?php echo base_url().$archivo; ?>" class="kv-preview-data file-preview-image" style="width:auto;height:100px;">',
					<?php break;
				}
			}
			?>
		],
	    initialPreviewConfig: [
	    <?php foreach($archivos_ef as $archivo){ $infoArchivos=explode("/",$archivo);?>
		{caption: "<?php echo $infoArchivos[1];?>",  height: "100px", url: "<?php echo base_url(); ?>consulta_medica/delete_files_ef/<?php echo $token_ef; ?>", key:"<?php echo $infoArchivos[1];?>"},
		<?php } ?>
		]
    }).on("filebatchselected", function(event, files) {
	
	$("#archivos_ef").fileinput("upload");
		
	});     
        
</script>
</html>