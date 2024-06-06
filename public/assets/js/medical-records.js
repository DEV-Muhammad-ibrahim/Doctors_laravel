var jsonDataUrl = '../public/assets/data/medical-records.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        var table = $('#medical-records_data').DataTable();
        table.destroy();
        $('#medical-records_data').DataTable({
            data: data,
            columns: [
                { data: 'id' },
                { data: 'name' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var dateHtml = `
                        <td>${data.date} <span class="d-block text-info">${data.time}</span>
            `;
                        return dateHtml;
                    }
                },
                { data: 'description' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var attachementHtml = `
                        <a href="javascript:void(0);"
                            title="Download attachment"
                            class="btn btn-primary btn-sm"> <i
                        class="fa fa-download"></i></a>
            `;
                        return attachementHtml;
                    }
                },
                { data: 'order_by' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var actionsHtml = `
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-danger-light">
                            <i class="far fa-trash-alt"></i>
                        </a>
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
