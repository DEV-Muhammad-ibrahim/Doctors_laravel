var jsonDataUrl = '../public/assets/data/medical-records-prescription.json';

fetch(jsonDataUrl)
    .then(response => response.json())
    .then(data => {
        data.forEach(item => {
            item.doctor.image = `../public/assets/img/doctors/${item.doctor.image}`;
        });

        var table = $('#medical-records-prescription-data').DataTable();
        table.destroy();
        $('#medical-records-prescription-data').DataTable({
            data: data,
            columns: [
                { data: 'number' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var dateHtml = `
                        <td>${data.date} <span class="d-block text-info">${data.time}</span>
            `;
                        return dateHtml;
                    }
                },
                { data: 'name' },
                {
                    data: null,
                    render: function (data, type, row) {
                        var attachementHtml = `
                        <h2 class="table-avatar">
                        <a href="doctor-profile"
                            class="avatar avatar-sm me-2">
                            <img class="avatar-img rounded-circle"
                                src="${data.doctor.image}"
                                alt="User Image">
                        </a>
                        <a href="doctor-profile">${data.doctor.name}
                             <span>${data.doctor.specialty}</span></a>
                    </h2>
            `;
                        return attachementHtml;
                    }
                },
                
                {
                    data: null,
                    render: function (data, type, row) {
                        var actionsHtml = `
                        <div class="table-action">
                         <a href="javascript:void(0);"
                             class="btn btn-sm bg-info-light">
                             <i class="far fa-eye"></i> View
                         </a>

                         <a href="javascript:void(0);"
                             class="btn btn-sm bg-success-light">
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
            
            order: []
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
