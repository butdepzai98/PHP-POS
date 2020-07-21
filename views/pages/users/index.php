<?php
    include "breadcumb.php";
?>

<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#createModal">Create new User<i class="mdi mdi-play-circle ml-1"></i></button>
        <h4 class="card-title">Data table</h4>

        <div class="row">
        <div class="col-12">
            <div class="table-responsive">
            <table id="userTable" class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Profile</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>New York</td>
                    <td>2012/08/03</td>
                    <td>Edinburgh</td>
                    <td>
                        <img src="/uploads/admin.jpg" alt="">
                    </td>
                    <td>
                        <label class="badge badge-info">On hold</label>
                    </td>
                    <td>$3200</td>
                    <td>
                        <button class="btn btn-sm btn-outline-info">View</button>
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

<!--================================= 
    MODAL 
=====================================-->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" method="POST" enctype="multipart/form-data">
            <div class="modal-header" action="">
                <h5 class="modal-title" id="exampleModalLabel-2">Create New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="newname">Name</label>
                    <input id="newname" class="form-control form-control-danger" name="newname" type="text" aria-invalid="true">
                    <label id="newname-error" class="error mt-2 text-danger" for="newname"></label>
                </div>
                <div class="form-group">
                    <label for="newuser">User Name</label>
                    <input id="newuser" class="form-control form-control-danger" name="newuser" type="text" aria-invalid="true">
                    <label id="newuser-error" class="error mt-2 text-danger" for="newuser"></label>
                </div>
                <div class="form-group">
                    <label for="newpass">Password</label>
                    <input id="newpass" class="form-control form-control-danger" name="newpass" type="password" aria-invalid="true">
                    <label id="newpass-error" class="error mt-2 text-danger" for="newpass"></label>
                </div>
                <div class="form-group">
                  <label for="">Profile</label>
                  <select class="form-control" name="newprofile" id="newprofile">
                    <option value="">Select profile</option>
                    <option value="administrator" selected>Administrator</option>
                    <option value="special">Special</option>
                    <option value="seller">Seller</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="newphoto">Photo</label>
                    <div class="text-center">
                        <img width="50%" src="/uploads/admin.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <input type="file" id="newphoto" class="form-control form-control-danger" name="newphoto" type="text" aria-invalid="true">
                    <label id="newphoto-error" class="error mt-2 text-danger" for="newphoto"></label>
                </div>
                <div class="form-group">
                    <label for="newstatus">Status</label>
                    <input id="newstatus" class="form-control form-control-danger" name="newstatus" type="text" aria-invalid="true">
                    <label id="newstatus-error" class="error mt-2 text-danger" for="newstatus"></label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

            <?php
                $createUser = new UserController();
                $createUser->create();
            ?>
        </form>
    </div>
</div>
</div>


