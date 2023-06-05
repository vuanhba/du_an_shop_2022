<?php
 include "models/m_categories.php";
 class c_categories{
    public function show_Cate(){
        $show= new m_cate();
        $list_cate= $show -> read_all_cate();
        $view = "views/categories/v_categories.php";
        include "templates/layout.php";

    }
    public function delete_Cate(){
        $delete= new m_cate();
        if(isset($_GET["id"])){
            $id= $_GET["id"];
            $result = $delete->delete_cate_byid($id);
            if($result){
                header("location:categories.php");
            }else{

            }
        }
    }
    public function add_cate(){
        $add = new m_cate();
        if(isset($_POST["btn-submit"])){
            $name = $_POST["ten_danh_muc"];
            $result = $add -> insert_cate($name);
            if($result){
                header("location:categories.php");
            }
        }
        $view = "views/categories/v_add-cate.php";
        include "templates/layout.php";
    }
    public function edit_cate(){
        $edit = new m_cate();
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $row = $edit->update_cate_byid($id);
            if(isset($_POST["btn-submit"])){
                $name = $_POST["ten_danh_muc"];
                $result = $edit -> update_cate($name, $id);
                if($result){
                    header("location:categories.php");
                }
            }
        }
        $view = "views/categories/v_edit-cate.php";
        include "templates/layout.php";
    }

 }