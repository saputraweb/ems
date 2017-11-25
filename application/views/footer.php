</div>
<script src="<?php echo base_url();?>dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>dist/js/validator.min.js"></script>
	<script src="<?php echo base_url();?>dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo base_url();?>dist/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>dist/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#myForm').validator();
		$('#sandbox-container .input-group.date').datepicker({
			format: "dd.mm.yyyy",
			autoclose: true
		});
		$('#datatable').DataTable();
	})
	</script>
  </body>
</html>