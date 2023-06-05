    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table" border="1">
                                <thead class="table-dark">
                                    <tr>
                                        <td>Tên sản phẩm</td>
                                        <td>Người bình luận</td>
                                        <td>Nội dung</td>
                                        <td>Thời gian </td>
                                        <td>#</td>
                                    </tr>
                                </thead>
                                <?php foreach ($list_cmt as $value) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $value->name_product ?></td>
                                            <td><?php echo $value->username ?></td>
                                            <td><?php echo $value->des ?></td>
                                            <td><?php echo $value->time ?></td>
                                            <td><a onclick="return delete_by_name('<?php echo $value->username ?>')" href="delete_cmt.php?id=<?php echo $value->id ?>">Xóa</a></td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function delete_by_name(name) {
                    return confirm("Bạn có chắc chắn muốn xóa bình luận của :" + name + " không ?")
                }
            </script>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>