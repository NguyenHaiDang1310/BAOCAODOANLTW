<?php
use App\Libraries\MyClass;

   use App\Models\Contact;
   //status=0--> Rac
   //status=1--> Hiện thị lên trang người dùng
   //
   //SELECT * FROM contact wher status!=0 and id=1 order by created_at desc

   $list = Contact::where('status','=',0)->orderBy('created_at','DESC')->get();
   ?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
<div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả Thùng Rác </h1>
                  </div>
               </div>   
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header ">
                <div class="row">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6 text-right">
                  <a class="btn btn-sm btn-success" href="index.php?option=contact">
                <i class="fas fa-arrow-left"></i> Quay về danh sách
              </a>
                  </button>
                  </div>
                </div>
               </div>
               <div class="card-body">

               <?php require_once "../views/backend/message.php";?>

                  <div class="row">
                 
                     <div class="col-md-12">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th class="text-center" style="width:30px;">
                                    <input type="checkbox">
                                 </th>
                                 
                                 <th>Tên</th>
                                 <th>Phone</th>
                                 <th>email</th>
                                 <th>content</th>
                              </tr>
                           </thead>
                           <tbody>
                          <?php if(count($list) > 0) : ?>
                              <?php foreach($list as $item   ):?>
                              <tr class="datarow">  
                                 <td>
                                    <input type="checkbox">
                                 </td>
                                 
                                 <td>
                                    <div class="name">
                                      <?= $item->name ; ?> 
                                    </div>
                                    <div class="function_style">
                                    
                                       <a href="index.php?option=contact&cat=restore&id=<?=$item->id;?>
                                       "class="btn btn-info btn-xs"><i class="fas fa-undo"></i>Khôi Phục</a> 
                                       <a href="index.php?option=contact&cat=destroy&id=<?=$item->id;?>
                                       "class="btn btn-danger btn-xs"><i class="fas fa-trash"></i>Xoá Vĩnh Viễn</a>
                                    </div>
                                 </td>
                                 
                                 <td><?= $item->email?></td>
                                 <td><?= $item->phone?></td>
                                 <td><?= $item->content?></td>
                              </tr>
                              <?php endforeach;?>
                              <?php endif;?>
                           </tbody> 
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>

      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>