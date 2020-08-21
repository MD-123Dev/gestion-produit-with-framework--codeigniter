<?php

class Product extends CI_Controller {

   
   public function show(){
      $this->load->view('create_view');
   }
   
   public function index()
   {
      $this->load->model("ProductsModel");
   
      $data['data'] = $this->ProductsModel->getAllProducts();
     
      $this->load->view('product_view', $data);
     
      
   }

   ///***save new product  */
   public function store()
   {
      $this->load->model("ProductsModel");
     
      $this->ProductsModel->createProduct();
      
      redirect(base_url('product'));

   }

    //**delect product */
   public function delete($id){

      $this->load->model("ProductsModel");
       $this->ProductsModel->deletProduct($id);
      redirect(base_url('product'));
   }

   //**update product what is edit */
   public function update($id){
      $this->load->model("ProductsModel");
      $this->ProductsModel->updateProduit($id);
      redirect(base_url('product'));
   }
   

   public function edit($id){
      $this->load->model("ProductsModel");
      $data = $this->ProductsModel->findProduct($id);
      $this->load->view('updateproduct_view', array('data' => $data));
   }

  
 }

?>