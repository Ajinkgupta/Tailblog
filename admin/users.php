<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Manage users</title> 
	
<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
 
<div  style="max-width:500px;" class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

<h1 class="page-title">Create/Edit Admin User</h1>

<form method="post" action="<?php echo BASE_URL . 'admin/users.php'; ?>" >

	<!-- validation errors for the form -->
	<?php include(ROOT_PATH . '/includes/errors.php') ?>

	<!-- if editing user, the id is required to identify that user -->
	<?php if ($isEditingUser === true): ?>
		<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
	<?php endif ?>

	<input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="username" value="<?php echo $username; ?>" placeholder="Username">
	<input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email" value="<?php echo $email ?>" placeholder="Email">
	<input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" placeholder="Password">
	<input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="passwordConfirmation" placeholder="Password confirmation">
	<select name="role">
		<option value="" selected disabled>Assign role</option>
		<?php foreach ($roles as $key => $role): ?>
			<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
		<?php endforeach ?>
	</select>

	<!-- if editing user, display the update button instead of create button -->
	<?php if ($isEditingUser === true): ?> 
		<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="update_admin">UPDATE</button>
	<?php else: ?>
		<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="create_admin">Save User</button>
	<?php endif ?>
</form>
</div>
<!-- // Middle form - to create and edit -->

<!-- Display records from DB--><div  class="p-6 w-100 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

<!-- Display notification message -->
<?php include(ROOT_PATH . '/includes/messages.php') ?>

<?php if (empty($admins)): ?>
	<h1>No admins in the database.</h1>
<?php else: ?>
	<table class="table">
		<thead>
			<th>N</th>
			<th>Admin</th>
			<th>Role</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
		<?php foreach ($admins as $key => $admin): ?>
			<tr>
				<td><?php echo $key + 1; ?></td>
				<td>
					<?php echo $admin['username']; ?>, &nbsp;
					<?php echo $admin['email']; ?>	
				</td>
				<td><?php echo $admin['role']; ?></td>
				<td>
					<a class="fa fa-pencil btn edit"
						href="users.php?edit-admin=<?php echo $admin['id'] ?>">
					</a>
				</td>
				<td>
					<a class="fa fa-trash btn delete" 
						href="users.php?delete-admin=<?php echo $admin['id'] ?>">
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
<?php endif ?>
</div>
		<!-- // Display records from DB --> 

		<?php include(ROOT_PATH . '/admin/includes/footer.php') ?>	