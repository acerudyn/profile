<?php
$cost = 10;
$list = password_hash('list_admin', PASSWORD_BCRYPT, [10 => $cost]);
$edit = password_hash('edit_admin', PASSWORD_BCRYPT, [10 => $cost]);
if ($_SESSION['admin'] != $_GET['id']){ ?>
    <script type="text/javascript">
        alert('Anda Tidak Berhak Mengedit !')
        document.location = '../views/home.php?page=<?php echo "$list"; ?>';

    </script>
    <?php } else {
  header("location: ../views/home.php?page=$edit");
}
include "koneksi.php";
?>
    <style>
        #image-holder {
            margin-top: 8px;
        }

        #image-holder img {
            border: 8px solid #DDD;
            max-width: 100%;
        }

    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Admin</h3>
                </div>

                <?php
          $id = $_GET['id'];
          $sql = "select * from admin where user_id = '$id' ";
          $result  = mysql_query($sql);
          $myData	 = mysql_fetch_array($result);
      ?>

                    <!-- Form Edit admin -->
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="../controller/admin-update.php">
                        <input type="hidden" name="id" value="<?php echo $myData['user_id']; ?>">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tanggal" id="dua" value="<?php echo date('d-m-Y'); ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tiga" class="col-sm-2 control-label">Nama Admin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nama Admin" required="true" name="nama_admin" id="tiga" value="<?php echo $myData['nama_user'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tiga" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Username" required="true" name="username" id="tiga" value="<?php echo $myData['username'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tiga" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="password" required="true" name="password" id="tiga">
                                </div>
                            </div>
                            <!--input image awal-->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="save">
                        </div>
                        <!-- /.box-footer -->
                    </form>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
