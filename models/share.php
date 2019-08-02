<?php
    class ShareModel extends Model{
        public function Index(){
            //delet function
            if($_POST['delet']){
                //var_dump($_POST['postid']);
                $this->query('DELETE FROM shares WHERE id = :id');
                $this->bind(':id', $_POST['postid']);
                $this->execute();
            }
            
            $this->query('SELECT * FROM shares');
            $rows = $this->resultSet();    
            return $rows;
        }
        public function add(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($post['submit']){
                //var_dump($post['user_id']);
                if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
                    Message::setMsg('Must finish all the coloum', 'error');
                    return;
                }
                $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
                $this->bind(':title', $post['title']);
                $this->bind(':body', $post['body']);
                $this->bind(':link', $post['link']);
                $this->bind(':user_id', $post['user_id']);
                $this->execute();
                //verify
                if($this->lastInsertId()){
                    header('Location: '.ROOT_URL.'/shares');
                }
            }
            return;

        }
    }
?>
