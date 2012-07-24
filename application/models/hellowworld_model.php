<?php  
class Helloworld_model extends Model {  
  
    function Helloworld_model()  
    {  
        // Call the Model constructor  
        parent::Model();  
    }  
      
    function getData()  
        {  
            //Query the data table for every record and row  
            $query = $this->db->get('data');  
              
            if ($query->num_rows() > 0)  
            {  
                return $query->result(); 
            }else{  
                //show_error('Database is empty!'); 
            }  
        }  
  
}  
?>  