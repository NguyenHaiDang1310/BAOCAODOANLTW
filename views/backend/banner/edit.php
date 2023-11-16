<?php
use App\Models\Banner;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$banner = Banner::find($id);
if($banner == null){
    header("location:index.php?option=banner");
}
?> 
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
<form action ="index.php?option=banner&cat=process" method="post" enctype="multipart/form-data">
<div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     
                     <h1 class="d-inline">Cật Nhật banner</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">

<!-- Default box -->
  <div class="card">
        <div class="card-header">
        <div class="row">
            <div class="col md-12 text-right">
              <button name="CAPNHAT" type="submit" class="btn btn-sm btn-primary">
                <i class="fas fa-save"></i> Lưu[Cập nhật]
              </button>
              <a class="btn btn-sm btn-success" href="index.php?option=banner">
                <i class="fas fa-arrow-left"></i> Quay về danh sách
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="id" value="<?=$banner->id; ?>">
            <div class="col md-9">
              <div class="mb-3">
                <label>Tên banner</label>
                <input name="name" id="name" type="text" value="<?=$banner->name; ?>" class="form-control">  
              </div>
              <div class="mb-3">
                <label >liên kết </label>
                <textarea name="link" id="link"  class="form-control" ><?=$banner->link; ?></textarea>
              </div>
              <div class="mb-3">
                <label >thứ tự</label>
                <textarea name="sort_order" id="sort_order" class="form-control" ><?=$banner->sort_order; ?></textarea>
              </div>
              <div class="mb-3">
                <label >vị trí</label>
                <textarea name="position" id="position" class="form-control" ><?=$banner->position; ?></textarea>
              </div>
            </div>
            
            

            
          
              <div class="mb-3">
                <label >Hình ảnh</label>
                <input type="file" name="image" class="form-control">
                <img src="../public/images/banner/<?=$banner->image; ?>">
              </div>
              <div class="mb-3">
              <label for="status">Trạng thái</label>
              <select name="status" id="status" class="form-control">
                <option value="1" <?=($banner->status==2)?'selected':'';?>>Xuất bản</option>
                <option value="2" <?=($banner->status==1)?'selected':'';?>>Chưa xuất bản</option>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  </form>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>