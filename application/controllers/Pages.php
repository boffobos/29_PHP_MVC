<?php
class Pages extends Controller { 
    public function index() { 
        //some array from DB

        $data = array( 
            (object)["name" => "banana", "quantity" => 1.5, "unit" => "kg"], 
            (object)["name" => "bread", "quantity" => 0.5, "unit" => "kg"], 
            (object)["name" => "butter", "quantity" => 0.2, "unit" => "kg"],
            (object)["name" => "vegetable oil", "quantity" => 0.8, "unit" => "L"],
            (object)["name" => "eggs", "quantity" => 9, "unit" => "pcs"]
            );

        $this->view('pages/index', $data); 

    } 

    public function about(){
        $data = [
          'title' => 'About Us',
          'description' => 'App to watching your home food availability',
          'contacts' => (object)['title' => 'contacts', 'email' => 'mail@example.com', 'phone mobile' => '+375296665544', 'fax' => '+375172223355']
        ];
  
        $this->view('pages/about', $data);
      }
}
?>