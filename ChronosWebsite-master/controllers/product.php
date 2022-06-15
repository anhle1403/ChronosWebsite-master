<?php
class product extends Dcontroller{
 
    public function __construct(){
        session::check();
        $data = array();
        $mess = array();
        parent::__construct();
    } 
    public function index(){
        $this->listProduct();
    } 
    public function listProduct(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $product_per_page = 10;
        $start = ($page-1) * $product_per_page;
        $data = [
            'product_per_page' => $product_per_page,
            'page' => $page
        ];
        $list_product = $this->load->model('productmodel');
        $data['product'] = $list_product->showProduct($start,$product_per_page);
        $data['total_product'] = $list_product->getTotalProduct();
        $this->load->view('admin/listproduct', $data);
    }

    public function addProduct(){
        if (isset($_POST['submit'])){
 
            $data['product']['productName'] = $_POST['name'];
            $data['product']['productSize']  = $_POST['size'];
            $data['product']['productPrice'] = $_POST['price'];
            $data['product']['productDetail1'] = $_POST['detail1'];
            $data['product']['productDetail2'] = $_POST['detail2'];
			$data['product']['productDesc'] = $_POST['description'];
			$data['product']['productStrap'] = $_POST['strap'];
			$data['product']['productMovement'] = $_POST['movement'];
            $data['product']['productImage'] = $productImage = $_FILES['image']['name'];
            $data['product']['productImageDetail'] = $productImageDetail = $_FILES['image_detail']['name'];

            if (method::checkEmptyValue($data['product'])){
                $data['error'] = 'Please enter full product information';
                return $this->load->view('admin/addproduct', $data);
            }
            if(method::isNumeric($data['product']['productPrice'])){
                $data['error'] = 'Invalid product price';
                return $this->load->view('admin/addproduct', $data);
            }
            if(method::isNumeric($data['product']['productSize'])){
                $data['error'] = 'Product size is not valid';
                return $this->load->view('admin/addproduct', $data);
            }

            $tmpImage = $_FILES['image']['tmp_name'];
            $tmpImage2 = $_FILES['image_detail']['tmp_name'];

			$div = explode('.', $productImage);
			$file_ext = strtolower(end($div));
			$data['product']['productImage2'] = $encodedImage = $div[0].time().'.'.$file_ext;

            $div2 = explode('.', $productImageDetail);
			$file_ext2 = strtolower(end($div2));
            $data['product']['productImageDetail2'] = $encodedImageDetail = $div2[0].date("hia").'.'.$file_ext2;

            $pathImage = "Assets/upload/".$encodedImage;
            $pathImage2 = "Assets/upload/".$encodedImageDetail;


            $product_model = $this->load->model('productmodel');

            $result = $product_model->insertProduct($data['product']);
            if($result){
                move_uploaded_file($tmpImage, $pathImage);
                move_uploaded_file($tmpImage2, $pathImage2);
                $data['success'] = "Add product successful";
                $this->load->view('admin/addproduct', $data);
            }
            else{
                $data['error'] = "Add product failed";
                $this->load->view('admin/addproduct', $data);     
        }}
        else{
            $this->load->view('admin/addproduct');
        }
    }
    public function deleteProduct($id){
        $product_model = $this->load->model('productmodel');
        $result = $product_model->deleteProduct($id);
        if($result){
            $mess['mess'] = "Delete product successfully";
            header('Location:'.BASE_URL."/product/listProduct?mess=".serialize($mess));
        }
        else{
            $mess['mess'] = "Delete failed product";
            header('Location:'.BASE_URL."/product/listProduct?mess=".serialize($mess));
        }
    }
    public function editProduct($id){
        $product_model = $this->load->model('productmodel');
        $data['getProductById'] = $product_model->getProductById($id);

        if($data['getProductById'] == false){
            return $this->load->view('404');
        }
        if(isset($_POST['submit'])){
            $data['product']['productName'] = $_POST['name'];
            $data['product']['productSize']  = $_POST['size'];
            $data['product']['productPrice'] = $_POST['price'];
            $data['product']['productDetail1'] = $_POST['detail1'];
            $data['product']['productDetail2'] = $_POST['detail2'];
            $data['product']['productDesc'] = $_POST['description'];
            $data['product']['productStrap'] = $_POST['strap'];
            $data['product']['productMovement'] = $_POST['movement'];

            $productImage = $_FILES['image']['name'];
            $productImageDetail = $_FILES['image_detail']['name'];
    
            $tmpImage = $_FILES['image']['tmp_name'];
            $tmpImage2 = $_FILES['image_detail']['tmp_name'];
    
            $div = explode('.', $productImage);
            $file_ext = strtolower(end($div));
            $encodedImage = $div[0].time().'.'.$file_ext;
            
            $div2 = explode('.', $productImageDetail);
            $file_ext2 = strtolower(end($div2));
            $encodedImageDetail = $div2[0].date("hia").'.'.$file_ext2;
    
            $pathImage = "Assets/upload/".$encodedImage;
            $pathImage2 = "Assets/upload/".$encodedImageDetail;

            if (method::checkEmptyValue($data['product'])){
                $data['error_message'] = 'Please enter full product information';
                return $this->load->view('admin/updateproduct', $data);
            }
            if(method::isNumeric($data['product']['productPrice'])){
                $data['error_message'] = 'Invalid product price';
                return $this->load->view('admin/updateproduct', $data);
            }
            if(method::isNumeric($data['product']['productSize'])){
                $data['error_message'] = 'Product size is not valid';
                return $this->load->view('admin/updateproduct', $data);
            }

        if(!empty($productImage) && !empty($productImageDetail)){
            foreach($data['getProductById'] as $key => $value){
                $path_unlink = "Assets/upload/";
                unlink($path_unlink.$value['productImage']);
                unlink($path_unlink.$value['productImageDetail']);
            }
            move_uploaded_file($tmpImage, $pathImage);
            move_uploaded_file($tmpImage2, $pathImage2);
            $result = $product_model->updateProduct($id,$data['product'],$encodedImage,$encodedImageDetail);
        }
        else if(empty($productImage) && empty($productImageDetail)){
            $result = $product_model->updateProductNoImage($id,$data['product']);
        }
        else {
            $data['error_message'] = 'Only 2 or more images can be changed';
            return $this->load->view('admin/updateproduct', $data);
        }
        if($result){
            $data['success_message'] = 'Product update successful';
            $data['getProductById'] = $product_model->getProductById($id);
            return $this->load->view('admin/updateproduct', $data);
        }
        else{
            $data['error_message'] = 'Product update failed';
            return $this->load->view('admin/updateproduct', $data);
        }
        
    }
    $this->load->view('admin/updateproduct', $data);
    }


}
