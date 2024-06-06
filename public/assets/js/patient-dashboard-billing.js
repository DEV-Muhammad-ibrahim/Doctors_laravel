var jsonDataUrl = '../public/assets/data/patient-dashboard-billing.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.doctor.avatar = `../public/assets/img/doctors/${item.doctor.avatar}`;
        });
        var table = $('#pat_billing_table').DataTable();
        table.destroy();
        $('#pat_billing_table').DataTable({
            data: data,
            columns: [
                { data: 'invoiceNo' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var doctorHtml = `
                            <h2 class="table-avatar">
                                <a href="doctor-profile" class="avatar avatar-sm me-2">
                                    <img class="avatar-img rounded-circle" src="${data.doctor.avatar}" alt="User Image">
                                </a>
                                <a href="doctor-profile">
                                    ${data.doctor.name}
                                    <span>${data.doctor.specialty}</span>
                                </a>
                            </h2>
                        `;
                        return doctorHtml;
                    }
                },
                { data: 'amount' },
                { data: 'paidOn' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var actionHtml = `
                            <div class="table-action text-end">
                                <a href="invoice-view" class="btn btn-sm bg-info-light">
                                    <i class="far fa-eye"></i> View
                                </a>
                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                    <i class="fas fa-print"></i> Print
                                </a>
                            </div>
                        `;
                        return actionHtml;
                    }
                }
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
