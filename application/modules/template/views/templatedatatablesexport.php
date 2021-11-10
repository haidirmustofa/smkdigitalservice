<script src="<?= base_url() ?>assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/scripts/datatable-setting.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/src/plugins/datatables/js/vfs_fonts.js"></script>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            // script untuk membuat export data 
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [
                [20, 25, 50, -1],
                [20, 25, 50, "All"]
            ],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search",
                paginate: {
                    next: '<i class="ion-chevron-right"></i>',
                    previous: '<i class="ion-chevron-left"></i>'
                }
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        })
    });
</script>