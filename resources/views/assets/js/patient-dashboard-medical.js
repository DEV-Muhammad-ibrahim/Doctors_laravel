var jsonDataUrl = '../public/assets/data/patient-dashboard-medical.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.avatar = `../public/assets/img/doctors/${item.avatar}`;
        });
        var table = $('#patient-dashboard-medical_data').DataTable();
        table.destroy();
        $('#patient-dashboard-medical_data').DataTable({
            data: data,
            columns: [
                {
                    data: 'id',
                    render: function (data, type, row) {
                        var idHtml = `
                            <a href="javascript:;">${row.id}</a>
                            `;
                        return idHtml;
                    }
                },
                { data: 'date' },
                { data: 'description' },
                {
                    data: 'attachment',
                    render: function (data, type, row) {
                        var attachmentHtml = `
                            <a href="javascript:;">${row.attachment}</a>
                            `;
                        return attachmentHtml;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var imageHtml = `
                        <h2 class="table-avatar">
                        <a href="doctor-profile"
                            class="avatar avatar-sm me-2">
                            <img class="avatar-img rounded-circle"
                                src="${data.avatar}"
                                alt="User Image">
                        </a>
                        <a href="doctor-profile">${data.createdBy}
                            <span>${data.specialty}</span></a>
                    </h2>

            `;
                        return imageHtml;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var statusHtml = `
                        <div class="table-action text-end">
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-info-light">
                            <i class="far fa-eye"></i> View
                        </a>
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-primary-light">
                            <i class="fas fa-print"></i> Print
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
