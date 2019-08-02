<?php
    class Shares extends Controller{
        protected function Index(){
            $viewmodel = new ShareModel();
            $this->returnView($viewmodel->Index(), true);
        }
        protected function add(){
            if(!$_SESSION['is_logged_in']){
                header('Location:'.ROOT_URL.'/shares');
            }else{
                $viewmodel = new ShareModel();
                $this->returnView($viewmodel->add(), true);
            }
        }
    }


?>