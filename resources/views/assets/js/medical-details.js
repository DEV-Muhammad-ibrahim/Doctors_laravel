var jsonDataUrl = '../public/assets/data/medical-details.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        var table = $('#medical-details_data').DataTable();
        table.destroy();
        $('#medical-details_data').DataTable({
            data: data,
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'bmi' },
                { data: 'heart_rate' },
                { data: 'fbc_status' },
                { data: 'weight' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var dateHtml = `
                        <td>${data.order_date} <span class="d-block text-info">${data.time}</span>
            `;
                        return dateHtml;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var actionsHtml = `
                        <div class="table-action">
                        <a href="#edit_medical_form"
                            class="btn btn-sm bg-info-light"
                            data-bs-toggle="modal">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-danger-light">
                            <i class="fas fa-trash-alt"></i> Delete
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
            order: []
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
