var jsonDataUrl = '../public/assets/data/orders-list.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        var table = $('#orders-list_data').DataTable();
        table.destroy();
        $('#orders-list_data').DataTable({
            data: data,
            columns: [
                { data: 'id' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var orderHtml = `
                        <a href="invoice-view">${data.order_id}</a>
            `;
                        return orderHtml;
                    }
                },
                { data: 'pharmacy_name' },
                {
                    data: 'quantity' },
                {
                    data: 'amount' },
                { data: 'payment_gateway' },
                {
                    data: 'status',
                    render: function (data, type, row) {
                        if (data === 'Order Placed') {
                            return '<span class="badge badge-primary">' + data + '</span>';
                        }else{
                            return '<span class="badge badge-warning">' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        var orderHtml = `
                        <td>${data.order_date}<span class="d-block text-info">${data.time}</span>
            `;
                        return orderHtml;
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
