</body>
</footer>

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url('assets/'); ?>assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/'); ?>assets/js/off-canvas.js"></script>
<script src="<?= base_url('assets/'); ?>assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets/'); ?>assets/js/misc.js"></script>
<script src="<?= base_url('assets/'); ?>assets/js/settings.js"></script>
<script src="<?= base_url('assets/'); ?>assets/js/todolist.js"></script>

<!-- Cara online untuk connect ke jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Cara offline connect ke jquery -->
<script src="<?= base_url('js/jquery.js'); ?>"></script>
<script>
    $(document).ready(function() {
        // $('.buttonBooking').click(function() {
        //     $.ajax({
        //         url: 'http://localhost/contohci/booking/getAntrian',
        //         method: 'post',
        //         data: {
        //             id: $(this).data('id'),
        //         },
        //         dataType: 'json',
        //         success: function(data) {
        //             console.log(data);
        //         }
        //     })
        // });
        $('.editButton').click(function() {
            const id = $(this).data('id');
            $('#hiddenRole').val(id);
        });


    });
</script>
<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->



</html>