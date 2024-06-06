var jsonDataUrl = '../public/assets/data/accounts.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.patient_image = `../public/assets/img/patients/${item.patient_image}`;
        });

        var table = $('.accounts_data').DataTable();
        table.destroy();
        $('.accounts_data').DataTable({
            data: data,
            columns: [
                {
                    data: null,
                    render: function (data, type, row) {
                        var dateHtml = `
                        <td>${data.date}<span class="d-block text-info">${data.time}</span></td>
            `;
                        return dateHtml;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var imageHtml = `
                        <h2 class="table-avatar">
                        <a href="patient-profile"
                            class="avatar avatar-sm me-2"><img
                                class="avatar-img rounded-circle"
                                src="${data.patient_image}"
                                alt="User Image"></a>
                        <a href="patient-profile">${data.patient_name}
                            <span>${data.patient_id}</span></a>
                    </h2>

            `;
                        return imageHtml;
                    }
                },
                {
                    data: 'amount',
                    render: function (data, type, row) {
                        var paidAmount = data;
                        var alignmentClass = 'text-center';

                        // Check if the data object contains 'value' and 'alignment' properties
                        if (typeof data === 'object' && data.value) {
                            paidAmount = data.value;

                            if (data.alignment) {
                                alignmentClass = data.alignment;
                            }
                        }

                        var formattedPaidAmount = `<div class="${alignmentClass}">${paidAmount}</div>`;
                        return formattedPaidAmount;
                    }
                },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (data === 'Paid') {
                            return '<span class="badge rounded-pill bg-success-light">' + data + '</span>';
                        } else if (data === 'Pending') {
                            return '<span class="badge rounded-pill bg-warning-light">' + data + '</span>';
                        } else {
                            return '<span class="badge rounded-pill bg-danger-light">' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var actionsHtml = `
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
                        return actionsHtml;
                    }
                }
            ],
            searching: false,
            info: false,
            paging: false,
            // scrollY: false,
            // scrollX: false,
            order: []
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
