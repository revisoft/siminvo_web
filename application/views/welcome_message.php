
	
	<footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- java script -->	
	<script src="<?php echo base_url('asset/js/jquery.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('asset/js/jquery.easyui.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('asset/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/js/custom.js');?>" type="text/javascript"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>