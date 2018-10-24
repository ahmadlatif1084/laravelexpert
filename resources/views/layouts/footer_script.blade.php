<!-- jQuery CDN -->
<script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap Js CDN -->
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('public/js/dataTables.rowReorder.min.js') }} "></script>
<script src="{{ asset('public/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/js/sweetalert.min.js') }} "></script>
<script src="{{ asset('public/js/jquery.datetimepicker.full.min.js') }}"></script>
<script type="text/javascript">
    $('#datetimepicker,#datetimepicker2').datetimepicker();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
        var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    });
</script>
