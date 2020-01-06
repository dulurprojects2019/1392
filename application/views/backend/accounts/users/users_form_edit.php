<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-title">
              <a href="<?= site_url('accounts/users/users-list') ?>" ><button type="button" class="btn btn-block btn-primary"><i class="fas fa-list"></i> <?= $title_menu; ?></button></a>
            </h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="container">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?= $title_header; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <select name="usr_lvl_id" class="form-control">
                    <option value="">a</option>
                    <option>b</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="Text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                  <input type="Email" name="usr_email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <input type="Password" name="usr_password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <input type="Repassword" name="usr_email" class="form-control" id="exampleInputPassword1" placeholder="Enter Re-Password">
                </div>
                <div class="form-group">
                  <input type="Number" name="usr_phone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                  <textarea name="usr_address" class="form-control" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="usr_photo" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="Submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                  <button type="Reset" class="btn btn-default"><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->