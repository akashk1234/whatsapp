<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>WhatsApp CRM</title>
    <link rel="icon" type="image/x-icon" href="https://i.postimg.cc/02RpgdM2/whatsapp3d.png">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">

	<!-- font awsome -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
		<!-- header -->
		 @extends('layout.app')

		 @section('content')
			
			<div class="main-panel">

                <div class="content">
                	<div class="container-fluid">
	                    <div class="row">
	                        
	                        <div class="col-12 mb-0">
								<divc class="card p-4" style="border-radius: 15px;">
									<div class="d-flex justify-content-between align-items-center">
										<div>
										    <h4 class="mb-0" data-toggle="modal" data-target="#messagingLimit" style="cursor: pointer;"><i class="fa-solid fa-users"></i> Users</h4>
    										<hr class="m-1">
    										<small class="mb-0 text-secondary">You can create users and assign role for performing tasks.</small>
										</div>
                                        <div>
                                            <button class="btn btn-outline-success ml-3" style="border-radius: 40px;" data-toggle="modal" data-target="#addUserModal">
                                                Add User <i class="fa-solid fa-user-plus"></i>
                                            </button>
                                        </div>
									</div>

								</divc>
							</div>
	
	                        <div class="col-12">
	
	                            <div class="card" style="border-radius: 15px;">
	                                
	                                <div class="card-body">
	                                    <div class="table-responsive">
	                                    	<table class="table table-hover">
		                                        <thead>
		                                            <tr class="bg-light">
		                                                <th scope="col">#</th>
		                                                <th scope="col">Name</th>
		                                                <th scope="col">Email</th>
		                                                <th scope="col" class="text-center">Role</th>
		                                                <th scope="col" class="text-center">Action</th>
		                                            </tr>
		                                        </thead>
		                                        <tbody>
		                                            <tr>
		                                                
		                                                <td>1</td>
		                                                <td>Anagha</td>
		                                                <td>anagha@mail.com</td>
		                                                <td class="text-center">
		                                                    <span class="badge badge-light">Admin</span>
		                                                </td>
		                                                <td class="text-center">
															<a href="" class="text-success" title="Assign Chats" data-toggle="modal" data-target=".assignChatModal">
																<i class="fa-solid fa-comments bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                    <a href="" class="text-info" title="Edit" data-toggle="modal" data-target=".updateUserModal">
		                                                        <i class="fa fa-pen-to-square bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                    <a href="" class="text-danger" title="Delete">
		                                                        <i class="fa fa-trash-can bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                </td>
		                                            </tr>
		                                            <tr>
		                                                
		                                                <td>2</td>
		                                                <td>Aiswarya</td>
		                                                <td>aiswarya@mail.com</td>
		                                                <td class="text-center">
		                                                    <span class="badge badge-light">Chat Manager</span>
		                                                    <span class="badge badge-light">Contact Manager</span>
		                                                </td>
		                                                <td class="text-center">
															<a href="" class="text-success" title="Assign Chats" data-toggle="modal" data-target=".assignChatModal">
																<i class="fa-solid fa-comments bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                    <a href="" class="text-info" title="Edit" data-toggle="modal" data-target=".updateUserModal">
		                                                        <i class="fa fa-pen-to-square bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                    <a href="" class="text-danger" title="Delete">
		                                                        <i class="fa fa-trash-can bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                </td>
		                                            </tr>
                                                    <tr>
		                                                
		                                                <td>3</td>
		                                                <td>Angel</td>
		                                                <td>angel@mail.com</td>
		                                                <td class="text-center">
		                                                    <span class="badge badge-light">Broadcast Manager</span>
		                                                    <span class="badge badge-light">Template Manager</span>
		                                                </td>
		                                                <td class="text-center">
															<a href="" class="text-success" title="Assign Chats" data-toggle="modal" data-target=".assignChatModal">
																<i class="fa-solid fa-comments bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                    <a href="" class="text-info" title="Edit" data-toggle="modal" data-target=".updateUserModal">
		                                                        <i class="fa fa-pen-to-square bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                    <a href="" class="text-danger" title="Delete">
		                                                        <i class="fa fa-trash-can bg-light border rounded-circle p-2"></i>
		                                                    </a>
		                                                </td>
		                                            </tr>
		                                        </tbody>
		                                    </table>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                </div>


				<!-- footer -->
			 	@endsection
			</div>



    <!-- update user -->
    <div class="modal fade updateUserModal" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
				<div class="modal-header">
					<h6 id="exampleModalLongTitle">Update user</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="pillInput1">Name</label>
						<input type="text" class="form-control input-pill" id="pillInput1" placeholder="Enter name">
					</div>
					<div class="form-group">
                        <label for="customPillSelect1">Role</label>
                        <select class="form-control input-pill" id="customPillSelect1">
                            <option value="" disabled selected>Select your role</option>
                            <option value="admin">Admin (All access)</option>
                            <option value="user">Chat Manager</option>
                            <option value="contact_manager">Contact Manager</option>
                            <option value="broadcast_manager">Broadcast Manager</option>
                            <option value="template_manager">Template Manager</option>
                        </select>
                    </div>
                    <div class="custom-pill-container" id="customPillContainer"></div>                    
                    
					<div class="form-group">
						<label for="pillInput1">Email</label>
						<input type="text" class="form-control input-pill" id="pillInput1" placeholder="Eg: mail@domain.com">
					</div>

                    <div class="form-group">
						<label for="pillInput1">Password</label>
						<input type="password" class="form-control input-pill" id="pillInput1" placeholder="* * * * * *">
					</div>

                    <div class="form-group">
						<label for="pillInput1">Confirm Password</label>
						<input type="password" class="form-control input-pill" id="pillInput1" placeholder="* * * * * *">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success">Save changes</button>
				</div>
			</div>
        </div>
    </div>


    <!-- Add user Modal -->
    <style>
        .custom-pill-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        .custom-pill {
            display: inline-flex;
            align-items: center;
            padding: 5px 10px;
            border-radius: 25px;
            /* background-color: #007bff; */
            border: 2px solid #25D366;
            color: white;
            margin-right: 5px;
            color: #25D366;
        }
        .custom-pill .remove-pill {
            margin-left: 10px;
            cursor: pointer;
        }
    </style>
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
				<div class="modal-header">
					<h6 id="exampleModalLongTitle">Add new user</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="pillInput1">Name</label>
						<input type="text" class="form-control input-pill" id="pillInput1" placeholder="Enter name">
					</div>
					<div class="form-group">
                        <label for="customPillSelect1">Role</label>
                        <select class="form-control input-pill" id="customPillSelect1">
                            <option value="" disabled selected>Select your role</option>
                            <option value="admin">Admin (All access)</option>
                            <option value="user">Chat Manager</option>
                            <option value="contact_manager">Contact Manager</option>
                            <option value="broadcast_manager">Broadcast Manager</option>
                            <option value="template_manager">Template Manager</option>
                        </select>
                    </div>
                    <div class="custom-pill-container" id="customPillContainer"></div>                    
                    
					<div class="form-group">
						<label for="pillInput1">Email</label>
						<input type="text" class="form-control input-pill" id="pillInput1" placeholder="Eg: mail@domain.com">
					</div>

                    <div class="form-group">
						<label for="pillInput1">Password</label>
						<input type="password" class="form-control input-pill" id="pillInput1" placeholder="* * * * * *">
					</div>

                    <div class="form-group">
						<label for="pillInput1">Confirm Password</label>
						<input type="password" class="form-control input-pill" id="pillInput1" placeholder="* * * * * *">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success">Save changes</button>
				</div>
			</div>
        </div>
    </div>

	<!-- Chat asssign modal -->
	<div class="modal fade assignChatModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content" style="border-radius: 20px !important;">
			<div class="card mb-0" style="border-radius: 15px;">
				<h5 class="text-center mt-3">Assign Chats</h5>
				<div class="card-header d-md-flex justify-content-between">
					<div class="d-md-flex align-items-center">
						<form class="navbar-left navbar-form nav-search mr-md-3" action="">
							<style>
								.search-container {
									border: .5px solid transparent;
									border-radius: 30px;
									transition: border-color 0.3s;
								}
								.search-container:hover,
								.search-container:focus-within {
									border-color: #25D366 !important;
								}
							</style>
							<div class="input-group search-container">
								<input type="text" placeholder="Search ..." class="form-control search-input">
								<div class="input-group-append">
									<span class="input-group-text">
										<a href="" style="text-decoration: none;">
											<i class="la la-search search-icon text-success"></i>
										</a>
									</span>
								</div>
							</div>
						</form>
						
					</div>
					<button class="btn btn-outline-success my-1" style="border-radius: 30px;">
						<i class="fa-solid fa-filter"></i> <b>Filter</b>
					</button>
				</div>
				<div class="card-body" style="height: 400px; overflow-y: auto;">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr class="bg-light">
									<th scope="col" style="width: 10px;">
										<label class="form-check-label">
											<input id="selectAll" class="form-check-input" type="checkbox" value="">
											<span class="form-check-sign"></span>
										</label>
									</th>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Mobile</th>
									<th scope="col" class="text-center">Tags</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<label class="form-check-label">
											<input class="form-check-input row-checkbox" type="checkbox" value="" >
											<span class="form-check-sign"></span>
										</label>
									</td>
									<td>1</td>
									<td>Mark</td>
									<td>+91 9087654321</td>
									<td class="text-center">
										<span class="badge badge-count">Meta</span>
										<span class="badge badge-count">Google</span>
									</td>
									
								</tr>
								<tr>
									<td>
										<label class="form-check-label">
											<input class="form-check-input row-checkbox" type="checkbox" value="" >
											<span class="form-check-sign"></span>
										</label>
									</td>
									<td>2</td>
									<td>Jacob</td>
									<td>+91 8890652711</td>
									<td class="text-center">
										<span class="badge badge-count">Google</span>
										<span class="badge badge-count">Social Media</span>
									</td>
									
								</tr>
								<tr>
									<td>
										<label class="form-check-label">
											<input class="form-check-input row-checkbox" type="checkbox" value="">
											<span class="form-check-sign"></span>
										</label>
									</td>
									<td>3</td>
									<td>Larry</td>
									<td>+91 9986732453</td>
									<td class="text-center">
										<span class="badge badge-count">Social Media</span>
										<span class="badge badge-count">Meta</span>
										<span class="badge badge-count">Google</span>
									</td>
									
								</tr>
								<tr>
									<td>
										<label class="form-check-label">
											<input class="form-check-input row-checkbox" type="checkbox" value="">
											<span class="form-check-sign"></span>
										</label>
									</td>
									<td>4</td>
									<td>Larry</td>
									<td>+91 9986732453</td>
									<td class="text-center">
										<span class="badge badge-count">Social Media</span>
										<span class="badge badge-count">Meta</span>
										<span class="badge badge-count">Google</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<style>
				.cus-input:focus{
					border: 2px solid green;
				}
			</style>
			<div class="p-3 d-flex justify-content-end">
				<button class="btn btn-success ml-3 px-5">Update</button>
			</div>
		  </div>
		</div>
	</div>
	<script>
		document.getElementById('selectAll').addEventListener('change', function() {
			// Get the state of the header checkbox
			const isChecked = this.checked;
			
			// Select all checkboxes with the class 'row-checkbox'
			const rowCheckboxes = document.querySelectorAll('.row-checkbox');
			
			// Set the checked state of all row checkboxes to match the header checkbox
			rowCheckboxes.forEach(function(checkbox) {
				checkbox.checked = isChecked;
			});
		});
	</script>
	<!-- Chat asssign modal -->


	<script>
        document.getElementById('customPillSelect1').addEventListener('change', function() {
            var selectedValue = this.value;
            var selectedText = this.options[this.selectedIndex].text;
    
            if (!selectedValue) return;
    
            // Check if the value is already selected
            if (document.querySelector(`.custom-pill[data-value="${selectedValue}"]`)) return;
    
            var pillContainer = document.getElementById('customPillContainer');
    
            // Create the pill element
            var pill = document.createElement('div');
            pill.className = 'custom-pill';
            pill.setAttribute('data-value', selectedValue);
            pill.innerText = selectedText;
    
            // Create the remove button
            var removeButton = document.createElement('span');
            removeButton.className = 'remove-pill';
            removeButton.innerHTML = '&times;';
            removeButton.onclick = function() {
                pillContainer.removeChild(pill);
            };
    
            // Append the remove button to the pill
            pill.appendChild(removeButton);
    
            // Append the pill to the pill container
            pillContainer.appendChild(pill);
        });
    </script>
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>