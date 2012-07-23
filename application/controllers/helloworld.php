<?php  
    class Helloworld extends Controller{  
        function index()  
        {  
            $this->load->model('helloworld_model');  
  
            $data['result'] = $this->helloworld_model-><span class="sql">getData</span>();  
            $data['page_title'] = "CI Hello World App!";  
  
            $this->load->view('helloworld_view',$data);  
        }  
    }  
?>