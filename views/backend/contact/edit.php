<?php
use App\Models\Contact;

$id = $_REQUEST['id'];
$contact =  Contact::find($id);
if($contact==null){
    header("location:index.php?option=contact");
}

?>
<?php require_once '../views/backend/header.php';?>
<form action ="index.php?option=contact&cat=process" method="post" enctype="multipart/form-data">
     <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Cập nhật danh mục</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header text-right">
                  <button class="btn btn-sm btn-success" type="subumit"name ="CAPNHAT">
                     <i class="fa fa-save" aria-hidden="true"></i>
                     Lưu
                  </button>
                  <a href="index.php?option=contact" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                  </a>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="mb-3">
                           <input type="hidden" name="id" value="<?=$contact->id;?>" />
                           <label>Tên danh mục (*)</label>
                           <input type="text" value="<?=$contact->name; ?>" name="name" id="name" placettder="Nhập tên danh mục" class="form-control"
                              onkeydown="handle_slug(this.value);">
                        </div>
                        <div class="mb-3">
                           <label>name</label>
                           <input type="text" value="<?=$contact->name; ?>" name="slug" id="name" placettder="Nhập name" class="form-control">
                        </div>

                        <div class="mb-3">
                           <label>email</label>
                           <input type="text" value="<?=$contact->email; ?>" name="email" id="email" placettder="Nhập email" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>phone</label>
                           <input type="text" value="<?=$contact->phone; ?>" name="phone" id="phone" placettder="Nhập phone" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>title</label>
                           <input type="text" value="<?=$contact->title; ?>" name="title" id="title" placettder="Nhập title" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>content</label>
                           <input type="text" value="<?=$contact->content; ?>" name="content" id="content" placettder="Nhập content" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label>replay_id</label>
                           <input type="text" value="<?=$contact->replay_id; ?>" name="replay_id" id="replay_id" placettder="Nhập replay_id" class="form-control">
                        </div>
                       
                        
                    
                        
                       
                        
                         <div class="mb-3">
                           <label>Trạng thái</label>
                           <select name="status" class="form-control">
                              <option value="1" <?=($contact->status ==1 ) ? 'selected':''; ?> >Xuất bản</option>
                              <option value="2"<?=($contact->status ==2 ) ? 'selected':''; ?>>Chưa xuất bản</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      </form>
      <?php require_once '../views/backend/footer.php';?>
      
