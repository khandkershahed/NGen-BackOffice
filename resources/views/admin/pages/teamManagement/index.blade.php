<x-admin-app-layout :title="'Team Management'">
    <div id="kt_content_container" class="app-container container-fluid py-10 pt-0">
        <!-- Main Content Start -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card h-md-100">
                    <div class="card-header position-relative py-0 border-bottom-1 ps-0">
                        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4">
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3 active" data-bs-toggle="tab"
                                    href="#allEmploye">
                                    <span class="nav-text fw-semibold fs-4 mb-3">All Employe</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#depertment">
                                    <span class="nav-text fw-semibold fs-4 mb-3">Depertment</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#allClient">
                                    <span class="nav-text fw-semibold fs-4 mb-3">All Client</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#taskProjects">
                                    <span class="nav-text fw-semibold fs-4 mb-3">Task & Projects</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#expense">
                                    <span class="nav-text fw-semibold fs-4 mb-3">Expense</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#jobApplication">
                                    <span class="nav-text fw-semibold fs-4 mb-3">Job Applications</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#employeAttendance">
                                    <span class="nav-text fw-semibold fs-4 mb-3">Employe Attendance</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#todoList">
                                    <span class="nav-text fw-semibold fs-4 mb-3">TODO List</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0">
                                <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-bs-toggle="tab"
                                    href="#holiday">
                                    <span class="nav-text fw-semibold fs-4 mb-3">Holidays</span>
                                    <span
                                        class="bullet-custom position-absolute z-index-2 w-100 h-3px top-100 bottom-n100 bg-primary rounded"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body pb-0 ps-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="allEmploye" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Employe List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Salary</th>
                                                <th>Email</th>
                                                <th>Start Date</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img width="35px" height="35px"
                                                            class="img-fluid rounded-circle shadow-sm"
                                                            src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user1.jpg"
                                                            alt="" />
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-danger text-center px-3 pe-2 btn-sm">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img width="35px" height="35px"
                                                            class="img-fluid rounded-circle shadow-sm"
                                                            src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user1.jpg"
                                                            alt="" />
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-danger text-center px-3 pe-2 btn-sm">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Employe List ENd -->
                                </div>
                            </div>
                            <div class="tab-pane" id="depertment" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Depertment List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Department Name</th>
                                                <th>Team Leader</th>
                                                <th>Substitute</th>
                                                <th>Location</th>
                                                <th>Employees</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Human Resources</td>
                                                <td>John Doe</td>
                                                <td>Emily Clark</td>
                                                <td>New York</td>
                                                <td>35</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Finance</td>
                                                <td>Jane Smith</td>
                                                <td>Michael Brown</td>
                                                <td>San Francisco</td>
                                                <td>25</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Depertment List ENd -->
                                </div>
                            </div>
                            <div class="tab-pane" id="allClient" role="tabpanel" aria-labelledby="day-tab">
                                <table
                                    class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Substitute</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img width="35px" height="35px"
                                                    class="img-fluid rounded-circle shadow-sm"
                                                    src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user1.jpg"
                                                    alt="" />
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
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img width="35px" height="35px"
                                                    class="img-fluid rounded-circle shadow-sm"
                                                    src="https://www.einfosoft.com/templates/admin/atrio/source/lighthr/assets/images/user/user2.jpg"
                                                    alt="" />
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
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="taskProjects" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Depertment List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Task ID</th>
                                                <th>Project</th>
                                                <th>Assigned To</th>
                                                <th>Status</th>
                                                <th>Due Date</th>
                                                <th>Priority</th>
                                                <th>Progress</th>
                                                <th>Substitute</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#001</td>
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
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>John Smith</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#002</td>
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
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>Emily Davis</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Depertment List ENd -->
                                </div>
                            </div>
                            <div class="tab-pane" id="expense" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Depertment List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Expense ID</th>
                                                <th>Category</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Substitute</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#E001</td>
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#E002</td>
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Depertment List ENd -->
                                </div>
                            </div>
                            <div class="tab-pane" id="jobApplication" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Depertment List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Application ID</th>
                                                <th>Applicant Name</th>
                                                <th>Position Applied</th>
                                                <th>Application Date</th>
                                                <th>Status</th>
                                                <th>Resume</th>
                                                <th>Interview Date</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#JA001</td>
                                                <td>Jane Doe</td>
                                                <td>Software Engineer</td>
                                                <td>2024/08/10</td>
                                                <td>
                                                    <span class="badge badge-success">Reviewed</span>
                                                </td>
                                                <td>
                                                    <a href="resume-jane-doe.pdf" class="btn btn-info btn-sm"
                                                        target="_blank">
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                        View Resume
                                                    </a>
                                                </td>
                                                <td>2024/08/20</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#JA002</td>
                                                <td>John Smith</td>
                                                <td>Project Manager</td>
                                                <td>2024/08/15</td>
                                                <td>
                                                    <span class="badge badge-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <a href="resume-john-smith.pdf" class="btn btn-info btn-sm"
                                                        target="_blank">
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                        View Resume
                                                    </a>
                                                </td>
                                                <td>2024/08/25</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- All Depertment List ENd -->
                                </div>
                            </div>
                            <div class="tab-pane" id="employeAttendance" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Depertment List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Employee ID</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Date</th>
                                                <th>In Time</th>
                                                <th>Out Time</th>
                                                <th>Total Hours</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#EMP001</td>
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#EMP002</td>
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Depertment List ENd -->
                                </div>
                            </div>
                            <div class="tab-pane" id="todoList" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Task List -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>
                                                    <input type="checkbox" class="select-all" />
                                                </th>
                                                <th>Task ID</th>
                                                <th>Task Name</th>
                                                <th>Description</th>
                                                <th>Assigned To</th>
                                                <th>Priority</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="task-checkbox" />
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="task-checkbox" />
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Task List End -->
                                </div>
                            </div>
                            <div class="tab-pane" id="holiday" role="tabpanel" aria-labelledby="day-tab">
                                <div class="table-responsive">
                                    <!-- All Depertment List  -->
                                    <table
                                        class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>Holiday ID</th>
                                                <th>Holiday Name</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Duration</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#HOL001</td>
                                                <td>New Year's Day</td>
                                                <td>Celebration of the new year</td>
                                                <td>2024/01/01</td>
                                                <td>1 Day</td>
                                                <td>
                                                    <span class="badge badge-success">Approved</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#HOL002</td>
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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm px-3 pe-2 me-3">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm px-3 pe-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- All Depertment List ENd -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
