<?php
class M_Success_Story{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    // Add success story
    public function addSuccessStory($data) {
        $this->db->query('INSERT INTO successstories (fundraiser_id, story, story_image) VALUES (:fundraiser_id, :story, :story_image)');
        $this->db->bind(':fundraiser_id', $data['fundraiser_id']);
        $this->db->bind(':story', $data['story']);
        $this->db->bind(':story_image', $data['story_image']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Get all success stories
    public function getAllSuccessStories() {
        $this->db->query('SELECT * FROM successstories');
        $results = $this->db->resultSet();
        return $results;
    }


} 
?>