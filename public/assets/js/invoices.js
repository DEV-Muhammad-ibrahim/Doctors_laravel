var jsonDataUrl = '../public/assets/data/invoices.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.patient_image = `../public/assets/img/patients/${item.patient_image}`;
        });

        var table = $('#invoices_data').DataTable();
        table.destroy();
        $('#invoices_data').DataTable({
            data: data,
            columns: [
                {
                    data: null,
                    render: function (data, type, row) {
                        var invoiceHtml = `
                        <a href="invoice-view">${data.invoice_number}</a>
                        `;
                        return invoiceHtml;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var imageHtml = `
                        <h2 class="table-avatar">
                        <a href="patient-profile" class="avatar avatar-sm me-2">
                        <img class="avatar-img rounded-circle"
                            src="${data.patient_image}"
                            alt="User Image">
                        </a>
                        <a href="patient-profile">${data.patient}
                        <span>${data.patient_id}</span></a>
                        </h2>

            `;
                        return imageHtml;
                    }
                },
                { data: 'amount' },
                { data: 'paid_on' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var actionsHtml = `
                        <div class="table-action text-end">
                        <a href="invoice-view" class="btn btn-sm bg-info-light">
                            <i class="far fa-eye"></i> View
                        </a>
                        <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                            <i class="fas fa-print"></i> Print
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
            scrollY: false,
            scrollX: false,
            order: []
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
