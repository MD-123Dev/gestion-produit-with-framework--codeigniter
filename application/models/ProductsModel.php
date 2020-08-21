<?php
class ProductsModel extends CI_Model{

      private $table = 'products';

    public function getAllProducts(){
      $query = $this->db->get("products");
      //$query = $this->db->query("select * from products");
      return $query->result();
        
    }

    public function createProduct(){

        $data = array(
          'product_name' => $this->input->post('product_name'),
          'price' => $this->input->post('prix'),
          'category' => $this->input->post('category')
          
    );
    return $this->db->insert('products', $data);
    }

  
  public function deletProduct($id)
  {
    return $this->db->delete('products', array('id' => $id));
  }

  public function updateProduit($id){
    $data = array(
      'product_name' => $this->input->post('product_name'),
      'price' => $this->input->post('prix'),
      'category' => $this->input->post('category')
    );
    
      $this->db->where('id', $id);
      return $this->db->update('products', $data);
           
  }

  public function findProduct($id)
  {
    return $this->db->get_where('products', array('id' => $id))->row();
  }

  
   
}
?>
