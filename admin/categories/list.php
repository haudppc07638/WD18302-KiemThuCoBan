<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List categories</h4>
            <a href="?act=addcate"><button type="button" class="btn btn-outline-primary btn-fw">Add Category</button></a>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                       
                        <th>  </th>


                    </tr>
                </thead>
<tbody>
                <tbody>

                    <?php
                    $dblist = new category();
                    $rows = $dblist->getList();
                    foreach ($rows as $row) { ?>
                        <tr>
                            <td><? echo $row['categoryID']?></td>
                            <td><? echo $row['categoryName']?></td>
                            
                            <td styleact="text-align: center;">
                           <a href="?act=deletecate&id=<? echo $row['categoryID']?>"  onclick=" return confirm('Bạn có chắc rằng muốn xóa ?');" >  <button type="button" class="btn btn-danger">Delete</button></a> <br> <br>
                            <a href="?act=editcate&id=<? echo $row['categoryID']?>"><button type="button" class="btn btn-success">Edit</button></a></td>
                        </tr>
               
               
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>