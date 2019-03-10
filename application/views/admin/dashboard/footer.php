<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/10/2019
 * Time: 3:00 PM
 */
?>
<script>

    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            removePlugins: [ 'Heading', 'Link' ],
            toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ]
        } )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

</script>


<!-- Jquery JS-->
<script src="<?php echo base_url() ?>public/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url() ?>public/admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url() ?>public/admin/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url() ?>public/admin/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url() ?>public/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url() ?>public/admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url() ?>public/admin/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?php echo base_url() ?>public/admin/js/main.js"></script>

</body>

</html>
