<?php
require '../../includes/init.php';
include '../../includes/header.php';
include '../../includes/navbar.php';
include '../../includes/sidebar.php';
$index = 0;
$admins = select("SELECT Admin.Id, Admin.Username, Admin.Password, Admin.Email, Role.Name AS 'RoleName' FROM Role INNER JOIN Admin ON Admin.RoleId = Role.Id");
?>


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Jquery DataTables
                    <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Jquery DataTables</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="./add.php" class="btn btn-success mb-2 me-2">Add</a>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                        class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Role</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Passowrd</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admins as $admin): ?>
                                        <tr>
                                            <td><?= $index += 1 ?></td>
                                            <td><?= $admin['Username'] ?></td>
                                            <td><?= $admin['RoleName'] ?></td>
                                            <td><?= $admin['Email'] ?></td>
                                            <td><?= $admin['Password'] ?></td>
                                            <form action="./update.php" method="post">
                                                <td>
                                                    <input type="hidden" name="Id" id="Id" value="<?= $admin['Id'] ?>">
                                                    <button type="submit" class="btn btn-primary btn-circle mb-2">
                                                    </button>
                                                </td>
                                            </form>
                                            <td>
                                                <button type="submit" class="btn btn-danger btn-circle mb-2"
                                                    onclick="deleteAdmin(<?= $admin['Id'] ?>)">
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Role</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Passowrd</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../../includes/script.php';
?>
<script>
    function deleteAdmin(Id) {
        if (confirm("sure you want to delete this Admin"));
        $.ajax({
            url: "../../api/admin/delete.php",
            method: "POST",
            data: {
                Id: Id
            },
            success: function (response) {
                alert('Admin Deleted');
            }
        })
    }
</script>
<?php
include '../../includes/pageend.php';
?>