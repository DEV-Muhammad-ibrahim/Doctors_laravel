var jsonDataUrl = "../public/assets/data/doctor-dashboard.json";

fetch(jsonDataUrl)
  .then((response) => response.json())
  .then((data) => {
    data.forEach((item) => {
      item.patient_image = `../public/assets/img/patients/${item.patient_image}`;
    });

    var table = $(".doctor-dashboard_data").DataTable();
    table.destroy();
    $(".doctor-dashboard_data").DataTable({
      data: data.slice(0, 5),
      columns: [
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
          },
        },

        {
          data: null,
          render: function (data, type, row) {
            var apptHtml = `
                        <td>${data.appt_date} <span class="d-block text-info">${data.time}</span></td>
            `;
            return apptHtml;
          },
        },
        { data: "purpose" },
        { data: "type" },
        { data: "paid_amount.value" },
        {
          data: null,
          render: function (data, type, row) {
            var actionsHtml = `
                        <div class="table-action text-center">
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
          },
        },
      ],
      searching: false,
      info: false,
      paging: false,
      order: [],
    });

    var table = $(".doctor-dashboard_data_2").DataTable();
    table.destroy();
    $(".doctor-dashboard_data_2").DataTable({
      data: data.slice(6),
      columns: [
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
          },
        },

        {
          data: null,
          render: function (data, type, row) {
            var apptHtml = `
                        <td>${data.appt_date} <span class="d-block text-info">${data.time}</span></td>
            `;
            return apptHtml;
          },
        },
        { data: "purpose" },
        { data: "type" },
        { data: "paid_amount.value" },
        {
          data: null,
          render: function (data, type, row) {
            var actionsHtml = `
                        <div class="table-action text-center">
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
          },
        },
      ],
      searching: false,
      info: false,
      paging: false,
      order: [],
    });
  })
  .catch((error) => {
    console.error("Error:", error);
  });
