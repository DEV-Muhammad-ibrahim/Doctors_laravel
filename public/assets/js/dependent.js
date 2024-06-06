var jsonDataUrl = "../public/assets/data/dependent.json";

fetch(jsonDataUrl)
  .then((response) => response.json())
  .then((data) => {
    data.forEach((item) => {
      item.patient_image = `../public/assets/img/patients/${item.patient_image}`;
    });

    var table = $("#dependent_data").DataTable();
    table.destroy();
    $("#dependent_data").DataTable({
      data: data,
      columns: [
        {
          data: null,
          render: function (data, type, row) {
            var imageHtml = `
                        <h2 class="table-avatar">
                         <span class="avatar avatar-sm me-2">
                             <img class="avatar-img rounded-circle"
                                 src="${data.patient_image}"
                                 alt="User Image">
                         </span>
                         ${data.dependent}
                     </h2>

            `;
            return imageHtml;
          },
        },
        { data: "relationship" },
        { data: "gender" },
        { data: "number" },
        { data: "blood_group" },
        {
          data: null,
          render: function (data, type, row) {
            var statusHtml = `
                        <div class="table-action">
                        <a href="#edit_form" class="btn btn-sm bg-info-light"
                            data-bs-toggle="modal"> <i class="fas fa-edit"></i> Edit</a>
                        <a href="javascript:void(0);"
                            class="btn btn-sm bg-danger-light"><i
                                class="fas fa-times"></i>  ${data.status}</a>
                    </div>
            `;
            return statusHtml;
          },
        },
      ],
      searching: false,
      info: false,
      paging: false,
      scrollY: false,
      scrollX: false,
      order: [],
    });
  })
  .catch((error) => {
    console.error("Error:", error);
  });
