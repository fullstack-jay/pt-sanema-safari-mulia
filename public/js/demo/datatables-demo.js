// Call the dataTables jQuery plugin
$(document).ready(function () {
    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Akun PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Akun PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Akun PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Akun PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Akun PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "columns": [{
            "width": "15%"
        }, {
            "width": "20%"
        }, {
            "width": "30%"
        }, {
            "width": "15%"
        }, {
            "width": "20%"
        }, ]
    });
    $('#dataKaryawan').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'asc']
        ],
        "columns": [{
                "width": "10%"
            }, {
                "width": "10%"
            },
            null, {
                "width": "15%"
            }, {
                "width": "25%"
            },
            null,
            null, {
                "width": "10%"
            }, {
                "width": "5%"
            },
        ]
    });
    $('#dataTablePosition').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });
    $('#dataPositionPegawai').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Karyawan berdasarkan posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Karyawan berdasarkan posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Karyawan berdasarkan posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Karyawan berdasarkan posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Karyawan berdasarkan posisi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "columns": [{
            "width": "20%"
        }, {
            "width": "40%"
        }, {
            "width": "40%"
        }, ]
    });

    $('#dataTableAbsensi').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Absensi Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Absensi Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Absensi Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Absensi Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Absensi Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [1, 'asc']
        ]
    });

    $('#dataTableAbsensiUser').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Absensi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Absensi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Absensi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Absensi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Absensi PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "25%"
        }, {
            "width": "25%"
        }, {
            "width": "25%"
        }, {
            "width": "25%"
        }, ]
    });

    $('#dataComplaint').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Komplain Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Komplain Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Komplain Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Komplain Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Komplain Karyawan PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [4, 'desc']
        ],
        "columns": [{
            "width": "8%"
        }, {
            "width": "18%"
        }, {
            "width": "12%"
        }, {
            "width": "40%"
        }, {
            "width": "12%"
        }, {
            "width": "10%"
        }, ]
    });
    $('#dataPenggajian').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Penggajian PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Penggajian PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Penggajian PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Penggajian PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Penggajian PT Sanema Safari Mulia',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [2, 'asc']
        ],
    });

    $('#tablePenambahan').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "aaSorting": [
            [0, 'desc']
        ],
        "columns": [null, null, null, {
            "width": "20%"
        }, ]
    });
    $('#tablePotongan').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": true,
        "aaSorting": [
            [0, 'desc']
        ],
        "columns": [null, null, null, {
            "width": "20%"
        }, ]
    });

    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
});
