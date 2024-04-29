<?php

class M_Success_Story
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Add success story
    public function addSuccessStory($data)
{
    $this->db->query('INSERT INTO successstories (user_id, fundraiser_id, title, story, story_image) VALUES (:user_id, :fundraiser_id, :title, :story, :story_image)');
    $this->db->bind(':user_id', $_SESSION['userId']); // Assuming userId is stored in session
    $this->db->bind(':fundraiser_id', $data['fundraiser_id']);
    $this->db->bind(':title', $data['story_title']);
    $this->db->bind(':story', $data['story']);
    $this->db->bind(':story_image', $data['story_image']);

    // Execute
    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}

    public function getAllSuccessStories()
    {
        $this->db->query('SELECT successstories.*, users.username, users.type FROM successstories INNER JOIN users ON successstories.user_id = users.id');
        $results = $this->db->resultSet();
        return $results;
    }

}

?>