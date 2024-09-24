<x-admin-app-layout :title="'Team Management'">
    <div class="row">
        <div class="col-xl-12">
          <div class="card h-md-100">
            <div class="card-header position-relative py-0 border-bottom-1 ps-0">
              <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4">
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3 active" data-bs-toggle="tab" href="#allEmploye">
                    <span class="nav-text fw-semibold fs-4 mb-3">All Employe</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#depertment">
                    <span class="nav-text fw-semibold fs-4 mb-3">Depertment</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#allClient">
                    <span class="nav-text fw-semibold fs-4 mb-3">All Client</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#taskProjects">
                    <span class="nav-text fw-semibold fs-4 mb-3">Task &amp; Projects</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#expense">
                    <span class="nav-text fw-semibold fs-4 mb-3">Expense</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#jobApplication">
                    <span class="nav-text fw-semibold fs-4 mb-3">Job Applications</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#employeAttendance">
                    <span class="nav-text fw-semibold fs-4 mb-3">Employe Attendance</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#todoList">
                    <span class="nav-text fw-semibold fs-4 mb-3">TODO List</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
                <li class="nav-item p-0 ms-0">
                  <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab" href="#holiday">
                    <span class="nav-text fw-semibold fs-4 mb-3">Holidays</span>
                    <span class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body pb-0 ps-0">
              <div class="tab-content">
                <div class="tab-pane active" id="allEmploye" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Employe List  -->
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image: activate to sort column descending" style="width: 87.6562px;">Image</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 179.922px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 198.609px;">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 115.906px;">Salary</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 279.656px;">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending" style="width: 131.75px;">Start Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50.8125px;">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 137.734px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 210.203px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">
                            <div>
                              <img width="35px" height="35px" class="img-fluid rounded-circle shadow-sm" src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user1.jpg" alt="">
                            </div>
                          </td>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>$320,800</td>
                          <td>t.nixon@example.com</td>
                          <td>2011/04/25</td>
                          <td>45</td>
                          <td>Intern</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger text-center px-3 pe-2 btn-sm">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">
                            <div>
                              <img width="35px" height="35px" class="img-fluid rounded-circle shadow-sm" src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user1.jpg" alt="">
                            </div>
                          </td>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>$170,750</td>
                          <td>g.winters@example.com</td>
                          <td>2011/07/25</td>
                          <td>38</td>
                          <td>Permanent</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger text-center px-3 pe-2 btn-sm">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Employe List ENd -->
                  </div>
                </div>
                <div class="tab-pane" id="depertment" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Depertment List  -->
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_1"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Department Name: activate to sort column descending" style="width: 0px;">Department Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Team Leader: activate to sort column ascending" style="width: 0px;">Team Leader</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Substitute: activate to sort column ascending" style="width: 0px;">Substitute</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 0px;">Location</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Employees: activate to sort column ascending" style="width: 0px;">Employees</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">Finance</td>
                          <td>Jane Smith</td>
                          <td>Michael Brown</td>
                          <td>San Francisco</td>
                          <td>25</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">Human Resources</td>
                          <td>John Doe</td>
                          <td>Emily Clark</td>
                          <td>New York</td>
                          <td>35</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Depertment List ENd -->
                  </div>
                </div>
                <div class="tab-pane" id="allClient" role="tabpanel" aria-labelledby="day-tab">
                  <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_2_length"><label>Show <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_2"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_2" aria-describedby="DataTables_Table_2_info">
                    <thead>
                      <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Logo: activate to sort column descending" style="width: 0px;">Logo</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 0px;">Company</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 0px;">Phone</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 0px;">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Substitute: activate to sort column ascending" style="width: 0px;">Substitute</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                    </thead>
                    <tbody>
                      
                      
                    <tr class="odd">
                        <td class="sorting_1">
                          <img width="35px" height="35px" class="img-fluid rounded-circle shadow-sm" src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user1.jpg" alt="">
                        </td>
                        <td>James Smith</td>
                        <td>Acme Corp</td>
                        <td>CEO</td>
                        <td>(123) 456-7890</td>
                        <td>j.smith@example.com</td>
                        <td>
                          <span class="badge badge-success">Active</span>
                        </td>
                        <td>Sarah Brown</td>
                        <td class="text-center">
                          <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                            <i class="fa-solid fa-eye" aria-hidden="true"></i>
                          </a>
                          <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                            <i class="fa-solid fa-pen" aria-hidden="true"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                            <i class="fa-solid fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr><tr class="even">
                        <td class="sorting_1">
                          <img width="35px" height="35px" class="img-fluid rounded-circle shadow-sm" src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user2.jpg" alt="">
                        </td>
                        <td>Anna Johnson</td>
                        <td>Beta LLC</td>
                        <td>Marketing Director</td>
                        <td>(987) 654-3210</td>
                        <td>a.johnson@example.com</td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td>Michael White</td>
                        <td class="text-center">
                          <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                            <i class="fa-solid fa-eye" aria-hidden="true"></i>
                          </a>
                          <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                            <i class="fa-solid fa-pen" aria-hidden="true"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                            <i class="fa-solid fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr></tbody>
                  </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                </div>
                <div class="tab-pane" id="taskProjects" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Depertment List  -->
                    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_3_length"><label>Show <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_3"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_3" aria-describedby="DataTables_Table_3_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Task ID: activate to sort column descending" style="width: 0px;">Task ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Project: activate to sort column ascending" style="width: 0px;">Project</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Assigned To: activate to sort column ascending" style="width: 0px;">Assigned To</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 0px;">Due Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 0px;">Priority</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 0px;">Progress</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Substitute: activate to sort column ascending" style="width: 0px;">Substitute</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">#001</td>
                          <td>Website Redesign</td>
                          <td>Jane Doe</td>
                          <td>
                            <span class="badge badge-success">Completed</span>
                          </td>
                          <td>2024/08/30</td>
                          <td>
                            <span class="badge badge-warning">High</span>
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>John Smith</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">#002</td>
                          <td>Marketing Campaign</td>
                          <td>Alex Johnson</td>
                          <td>
                            <span class="badge badge-warning">In Progress</span>
                          </td>
                          <td>2024/09/15</td>
                          <td>
                            <span class="badge badge-danger">Critical</span>
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>Emily Davis</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_3_next"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Depertment List ENd -->
                  </div>
                </div>
                <div class="tab-pane" id="expense" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Depertment List  -->
                    <div id="DataTables_Table_4_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_4_length"><label>Show <select name="DataTables_Table_4_length" aria-controls="DataTables_Table_4" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_4"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_4" aria-describedby="DataTables_Table_4_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Expense ID: activate to sort column descending" style="width: 0px;">Expense ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 0px;">Category</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 0px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Substitute: activate to sort column ascending" style="width: 0px;">Substitute</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">#E001</td>
                          <td>Travel</td>
                          <td>Business trip to client</td>
                          <td>$1,200</td>
                          <td>2024/08/15</td>
                          <td>
                            <span class="badge badge-success">Approved</span>
                          </td>
                          <td>John Smith</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">#E002</td>
                          <td>Office Supplies</td>
                          <td>Purchase of office stationery</td>
                          <td>$450</td>
                          <td>2024/08/20</td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                          <td>Emily Davis</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_4_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_4_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_4_previous"><a href="#" aria-controls="DataTables_Table_4" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_4_next"><a href="#" aria-controls="DataTables_Table_4" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Depertment List ENd -->
                  </div>
                </div>
                <div class="tab-pane" id="jobApplication" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Depertment List  -->
                    <div id="DataTables_Table_5_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_5_length"><label>Show <select name="DataTables_Table_5_length" aria-controls="DataTables_Table_5" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_5"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_5" aria-describedby="DataTables_Table_5_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Application ID: activate to sort column descending" style="width: 0px;">Application ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Applicant Name: activate to sort column ascending" style="width: 0px;">Applicant Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Position Applied: activate to sort column ascending" style="width: 0px;">Position Applied</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Application Date: activate to sort column ascending" style="width: 0px;">Application Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Resume: activate to sort column ascending" style="width: 0px;">Resume</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Interview Date: activate to sort column ascending" style="width: 0px;">Interview Date</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">#JA001</td>
                          <td>Jane Doe</td>
                          <td>Software Engineer</td>
                          <td>2024/08/10</td>
                          <td>
                            <span class="badge badge-success">Reviewed</span>
                          </td>
                          <td>
                            <a href="resume-jane-doe.pdf" class="btn btn-info btn-sm" target="_blank">
                              <i class="fa-solid fa-file-pdf" aria-hidden="true"></i>
                              View Resume
                            </a>
                          </td>
                          <td>2024/08/20</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">#JA002</td>
                          <td>John Smith</td>
                          <td>Project Manager</td>
                          <td>2024/08/15</td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                          <td>
                            <a href="resume-john-smith.pdf" class="btn btn-info btn-sm" target="_blank">
                              <i class="fa-solid fa-file-pdf" aria-hidden="true"></i>
                              View Resume
                            </a>
                          </td>
                          <td>2024/08/25</td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_5_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_5_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_5_previous"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_5_next"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>

                    <!-- All Depertment List ENd -->
                  </div>
                </div>
                <div class="tab-pane" id="employeAttendance" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Depertment List  -->
                    <div id="DataTables_Table_6_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_6_length"><label>Show <select name="DataTables_Table_6_length" aria-controls="DataTables_Table_6" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_6_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_6"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_6" aria-describedby="DataTables_Table_6_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee ID: activate to sort column descending" style="width: 0px;">Employee ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 0px;">Department</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="In Time: activate to sort column ascending" style="width: 0px;">In Time</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Out Time: activate to sort column ascending" style="width: 0px;">Out Time</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Total Hours: activate to sort column ascending" style="width: 0px;">Total Hours</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_6" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">#EMP001</td>
                          <td>Jane Doe</td>
                          <td>Software Engineer</td>
                          <td>IT</td>
                          <td>2024/08/24</td>
                          <td>09:00 AM</td>
                          <td>05:00 PM</td>
                          <td>8h 00m</td>
                          <td>
                            <span class="badge badge-success">Present</span>
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">#EMP002</td>
                          <td>John Smith</td>
                          <td>Project Manager</td>
                          <td>Management</td>
                          <td>2024/08/24</td>
                          <td>09:30 AM</td>
                          <td>06:00 PM</td>
                          <td>8h 30m</td>
                          <td>
                            <span class="badge badge-warning">Late</span>
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_6_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_6_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_6_previous"><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_6_next"><a href="#" aria-controls="DataTables_Table_6" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Depertment List ENd -->
                  </div>
                </div>
                <div class="tab-pane" id="todoList" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Task List -->
                    <div id="DataTables_Table_7_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_7_length"><label>Show <select name="DataTables_Table_7_length" aria-controls="DataTables_Table_7" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_7_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_7"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_7" aria-describedby="DataTables_Table_7_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            
                          : activate to sort column descending" style="width: 0px;">
                            <input type="checkbox" class="select-all">
                          </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Task ID: activate to sort column ascending" style="width: 0px;">Task ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column ascending" style="width: 0px;">Task Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 0px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Assigned To: activate to sort column ascending" style="width: 0px;">Assigned To</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 0px;">Priority</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 0px;">Due Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_7" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">
                            <input type="checkbox" class="task-checkbox">
                          </td>
                          <td>#TASK001</td>
                          <td>Complete Project Report</td>
                          <td>
                            Prepare and submit the final project
                            report for Q3
                          </td>
                          <td>Jane Doe</td>
                          <td>
                            <span class="badge badge-danger">High</span>
                          </td>
                          <td>2024/08/30</td>
                          <td>
                            <span class="badge badge-warning">In Progress</span>
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">
                            <input type="checkbox" class="task-checkbox">
                          </td>
                          <td>#TASK002</td>
                          <td>Update Website</td>
                          <td>
                            Revise the website content and layout as
                            per the new design
                          </td>
                          <td>John Smith</td>
                          <td>
                            <span class="badge badge-warning">Medium</span>
                          </td>
                          <td>2024/09/05</td>
                          <td>
                            <span class="badge badge-success">Completed</span>
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_7_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_7_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_7_previous"><a href="#" aria-controls="DataTables_Table_7" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_7" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_7_next"><a href="#" aria-controls="DataTables_Table_7" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Task List End -->
                  </div>
                </div>
                <div class="tab-pane" id="holiday" role="tabpanel" aria-labelledby="day-tab">
                  <div class="table-responsive">
                    <!-- All Depertment List  -->
                    <div id="DataTables_Table_8_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-2"><div class="col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar"><div class="dataTables_length" id="DataTables_Table_8_length"><label>Show <select name="DataTables_Table_8_length" aria-controls="DataTables_Table_8" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-6 d-flex align-items-center justify-content-end dt-toolbar"><div id="DataTables_Table_8_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm form-control-solid" placeholder="" aria-controls="DataTables_Table_8"></label></div></div></div><div class="table-responsive"><table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded dataTable no-footer" id="DataTables_Table_8" aria-describedby="DataTables_Table_8_info">
                      <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7"><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Holiday ID: activate to sort column descending" style="width: 0px;">Holiday ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-label="Holiday Name: activate to sort column ascending" style="width: 0px;">Holiday Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 0px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending" style="width: 0px;">Duration</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_8" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                      </thead>
                      <tbody>
                        
                        
                      <tr class="odd">
                          <td class="sorting_1">#HOL001</td>
                          <td>New Year's Day</td>
                          <td>Celebration of the new year</td>
                          <td>2024/01/01</td>
                          <td>1 Day</td>
                          <td>
                            <span class="badge badge-success">Approved</span>
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr><tr class="even">
                          <td class="sorting_1">#HOL002</td>
                          <td>Independence Day</td>
                          <td>
                            Celebration of national independence
                          </td>
                          <td>2024/07/04</td>
                          <td>1 Day</td>
                          <td>
                            <span class="badge badge-warning">Pending</span>
                          </td>
                          <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                              <i class="fa-solid fa-pen" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                              <i class="fa-solid fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr></tbody>
                    </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_info" id="DataTables_Table_8_info" role="status" aria-live="polite">Showing 1 to 2 of 2 records</div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_8_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_8_previous"><a href="#" aria-controls="DataTables_Table_8" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_8" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_8_next"><a href="#" aria-controls="DataTables_Table_8" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!-- All Depertment List ENd -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-admin-app-layout>

