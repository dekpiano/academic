$('#ShowDashborad').DataTable({
    paging: false,
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5', 'excelHtml5', 'print'
    ],
    "autoWidth": true,
    "footerCallback": function(row, data, start, end, display) {
        var api = this.api();
        nb_cols = api.columns().nodes().length;
        var j = 1;
        while (j < nb_cols) {
            var pageTotal = api
                .column(j)
                .data()
                .reduce(function(a, b) {
                    return Number(a) + Number(b);
                }, 0);
            // Update footer
            $(api.column(j).footer()).html(pageTotal);
            j++;
        }
    }
});

$(document).on("change", "#homevisit_set_manager", function() {
    $.post("../../../../admin/Affairs/ConAdminStudentSupport/HomeVisitSettingManager", { TeachID: $(this).val() }, function(data, status) {
        if (data == 1) {
            alertify.success('เลือกหัวหน้างานสำเร็จ');
        } else {
            alertify.error('เปลี่ยนแปลงข้อมูลไม่สำเร็จ');
        }
    });
});

$(document).on("change", "#set_homeroom_time", function() {
    console.log($(this).val());
    $.post("../../../admin/Affairs/ConAdminStudentHomeRoom/UpdateTimeHomeRoom", { set_homeroom_time: $(this).val() }, function(data, status) {
        if (data == 1) {
            alertify.success('เปลี่ยนเวลาสำเร็จ');
        } else {
            alertify.error('เปลี่ยนเวลาไม่สำเร็จ');
        }
    });
});

$(document).on("change", "#show_date", function() {
    window.location.href = $(this).val();

});

var pathArray = window.location.pathname.split('/');
if (pathArray[6]) {
    $.post('../../../../admin/Affairs/ConAdminStudentHomeRoom/ChartHomeRoomAll', { key: pathArray[6] }, function(show) {
            console.log(show);
            var BARCHARTEXMPLE = $('#chart-doughnut');
            var barChartExample = new Chart(BARCHARTEXMPLE, {
                type: 'bar',
                data: {
                    labels: ["มา", "ขาด", "สาย", "ลา", "กิจกรรม", "ไม่เข้าแถว"],
                    datasets: [{
                        label: 'จำนวน',
                        data: show,
                        backgroundColor: [
                            'rgba(121, 106, 238, 1)',
                            'rgba(255, 118, 118, 1)',
                            'rgba(84, 230, 157, 1)',
                            'rgba(255, 195, 109, 1)',
                            'rgba(109, 242, 255, 1)',
                            'rgba(255, 109, 244, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            });

        }, "json")
        .fail(function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
        });
}