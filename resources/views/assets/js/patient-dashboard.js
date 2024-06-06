var jsonDataUrl = '../public/assets/data/patient-dashboard.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.doctor_image = `../public/assets/img/doctors/${item.doctor_image}`;
        });
        var table = $('#patient-dashboard_data').DataTable();
        table.destroy();
        $('#patient-dashboard_data').DataTable({
            data: data,
            columns: [
                {
                    data: null,
                    render: function (data, type, row) {
                        var imageHtml = `
                        <h2 class="table-avatar">
                        <a href="doctor-profile"
                            class="avatar avatar-sm me-2">
                            <img class="avatar-img rounded-circle"
                                src="${data.doctor_image}"
                                alt="User Image">
                        </a>
                        <a href="doctor-profile">${data.doctor}
                            <span>${data.speciality}</span></a>
                    </h2>

            `;
                        return imageHtml;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var dateHtml = `
                        <td>${data.appt_date} <span class="d-block text-info">${data.time}</span>
            `;
                        return dateHtml;
                    }
                },
                { data: 'booking_date' },
                { data: 'amount' },
                { data: 'follow_up' },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (data === 'Confirm') {
                            return '<span class="badge rounded-pill bg-success-light">' + data + '</span>';
                        }else if(data === 'Cancelled'){
                            return '<span class="badge rounded-pill bg-danger-light">' + data + '</span>';
                        }else{
                            return '<span class="badge rounded-pill bg-warning-light">' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var statusHtml = `
                        <div class="table-action text-end">
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-primary-light">
                            <i class="fas fa-print"></i> Print
                        </a>
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-info-light">
                            <i class="far fa-eye"></i> View
                        </a>
                    </div>
            `;
                        return statusHtml;
                    }
                },
            ],
            searching: false,
            info: false,
            paging: false,
            order: []
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
