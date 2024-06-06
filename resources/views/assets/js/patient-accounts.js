var jsonDataUrl = '../public/assets/data/patient-accounts.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.doctor_image = `../public/assets/img/doctors/${item.doctor_image}`;
        });

        var table = $('.patient-accounts_data').DataTable();
        table.destroy();
        $('.patient-accounts_data').DataTable({
            data: data,
            columns: [
                {
                    data: null,
                    render: function (data, type, row) {
                        var dateHtml = `
                        <td>${data.date} <span class="d-block text-info">${data.time}</span></td>
            `;
                        return dateHtml;
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
                                src="${data.doctor_image}"
                                alt="User Image">
                        </a>
                        <a href="doctor-profile">${data.doctor_name} <span>${data.speciality}</span></a>
                    </h2>

            `;
                        return imageHtml;
                    }
                },
                {
                    data: 'amount'},
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (data === 'Paid') {
                            return '<span class="badge rounded-pill bg-success-light">' + data + '</span>';
                        }else if(data === 'Pending'){
                            return '<span class="badge rounded-pill bg-warning-light">' + data + '</span>';
                        }else{
                            return '<span class="badge rounded-pill bg-danger-light">' + data + '</span>';
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
                            class="btn btn-sm bg-info-light">
                            <i class="far fa-eye"></i> View
                        </a>

                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-success-light">
                            <i class="fas fa-check"></i> Accept
                        </a>
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-danger-light">
                            <i class="fas fa-times"></i> Cancel
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
