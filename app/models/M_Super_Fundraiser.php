<?php
class M_Super_Fundraiser
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function findCategory($category)
    {
        try {
            $this->db->query('SELECT category_id FROM category WHERE category_name= :category LIMIT 1');

            $this->db->bind(':category', $category);

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }
    }

    public function iFindDocuments($category)
    {

        try {
            $data = $this->findCategory($category);

            $category_id = $data[0]->category_id;


            $this->db->query('SELECT document, description, document_name FROM individual_fundraiser_documents WHERE category_id= :category_id AND deleted_doc=0' );

            $this->db->bind(':category_id', $category_id);

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }


    }

    public function oFindDocuments($category)
    {

        try {
            $data = $this->findCategory($category);

            $category_id = $data[0]->category_id;


            $this->db->query('SELECT document, description, document_name FROM organisation_fundraiser_documents WHERE category_id= :category_id AND deleted_doc=0');

            $this->db->bind(':category_id', $category_id);

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }


    }

    public function fundraiserStart($data)
    {
        try {
            $query1 = 'INSERT INTO fundraiser (title, story, Category, amount, user_id, anonymous, parent_funding, end_date) VALUES (:title, :story, :Category, :amount, :user_id, :anonymous, :parent_funding, :end_date);';
            $query2 = 'INSERT INTO fundraiser_images (img, fundraiser_id) VALUES (:img, :fundraiser_id);';
            $query3 = 'INSERT INTO parentfundraising (fundraiser_id, child_fullname, birthdate, relationship_to_user, edu_work, birth_certificate, dependent_note) VALUES (:fundraiser_id, :child_fullname, :birthdate, :relationship_to_user, :edu_work, :birth_certificate, :dependent_note);';
            $query4 = 'INSERT INTO material (fundraiser_id, name, description, image, units) VALUES (:fundraiser_id, :name, :description, :image, :units)';
            $query5 = 'INSERT INTO material_location (fundraiser_id, area, address, contact) VALUES (:fundraiser_id, :area, :address, :contact);';
            $query6 = 'INSERT INTO material_map_location (fundraiser_id, latitude, longitude) VALUES (:fundraiser_id, :latitude, :longitude);';
            $query7 = 'INSERT INTO uploaded_documents (fundraiser_id, document_name, document_image) VALUES (:fundraiser_id, :document_name, :document_image);';
            $query8 = 'INSERT INTO merchandise (fundraiser_id, product_name, price, discount, amount_for_fund, total_quantity, description, merch_image) VALUES (:fundraiser_id, :product_name, :price, :discount, :amount_for_fund, :total_quantity, :description, :merch_image);';


            $this->db->query($query1);

            // //Bind values
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':story', $data['fund_story']);
            $this->db->bind(':Category', $data['category']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':anonymous', $data['anonymous']);
            $this->db->bind(':parent_funding', $data['child']);
            $this->db->bind(':end_date', $data['end_date']);
            if (!$this->db->execute()) {
                // Rollback the transaction if the first INSERT fails
                $this->db->rollBack();
                return false;
            } 

            $data['fundraiser_id'] = $this->db->selectOne3('fundraiser', 'fundraiser_id', 'title', $data['title'], $data['user_id']);


            // image of fundraiser
            for ($i = 1; $i <= $data['imageCount']; $i++) {
                $this->db->query($query2);


                //Bind values
                $this->db->bind(':img', $data['fundraiser_image_' . $i]);
                $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);

                if (!$this->db->execute()) {
                    // Rollback the transaction if the first INSERT fails
                    $this->db->rollBack();
                    return false;
                }

            }


            //parent funding
            if ($data['child'] == 1) {
                $this->db->query($query3);

                $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                $this->db->bind(':child_fullname', $data['dependent_name']);
                $this->db->bind(':birthdate', $data['dependent_birthdate']);
                $this->db->bind(':relationship_to_user', $data['relationship']);
                $this->db->bind(':edu_work', $data['dependent_edu_ins/work']);
                $this->db->bind(':birth_certificate', $data['birth_certificate']);
                $this->db->bind(':dependent_note', $data['note_dependent']);

                if (!$this->db->execute()) {
                    // Rollback the transaction if the first INSERT fails
                    $this->db->rollBack();
                    return false;
                }
            }

            //document upload

            if ($_SESSION['userType'] == 'individual') {
                $documents = $this->iFindDocuments($data['category']);
                foreach ($documents as $document_row) {

                    $this->db->query($query7);

                    $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                    $this->db->bind(':document_name', $document_row->document_name);
                    $this->db->bind(':document_image', $data[$document_row->document]);

                    if (!$this->db->execute()) {
                        // Rollback the transaction if the INSERT fails
                        $this->db->rollBack();
                        return false;
                    }
                }
            } else if ($_SESSION['userType'] == 'organisation') {
                $documents = $this->oFindDocuments($data['category']);
                foreach ($documents as $document_row) {

                    $this->db->query($query7);

                    $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                    $this->db->bind(':document_name', $document_row->document_name);

                    $this->db->bind(':document_image', $data[$document_row->document]);

                    if (!$this->db->execute()) {
                        // Rollback the transaction if the INSERT fails
                        $this->db->rollBack();
                        return false;
                    }
                }
            }




            //request materials
            if ($data['material'] == 1) {
                for ($i = 1; $i <= $data['materialCount']; $i++) {
                    $this->db->query($query4);
                    //Bind values
                    $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                    $this->db->bind(':name', $data['material/item_name_' . $i]);
                    $this->db->bind(':description', $data['material_description_' . $i]);
                    $this->db->bind(':image', $data['material_image_' . $i]);
                    $this->db->bind(':units', $data['no_required_' . $i]);

                    if (!$this->db->execute()) {
                        $this->db->rollBack();
                        return false;
                    }

                }

                for ($i = 1; $i <= $data['locationCount']; $i++) {
                    $this->db->query($query5);

                    //Bind values
                    $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                    $this->db->bind(':area', $data['town/city_' . $i]);
                    $this->db->bind(':address', $data['address_' . $i]);
                    $this->db->bind(':contact', $data['contact_' . $i]);

                    if (!$this->db->execute()) {
                        // Rollback the transaction if the first INSERT fails
                        $this->db->rollBack();
                        return false;
                    }

                    $latitudeArray = json_decode($data['latitude'], true);
                    $longitudeArray = json_decode($data['longitude'], true);

                    $map_location_count = count($longitudeArray);

                    for ($i = 0; $i < $map_location_count; $i++) {
                        $this->db->query($query6);

                        $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                        $this->db->bind(':latitude', $latitudeArray[$i]);
                        $this->db->bind(':longitude', $longitudeArray[$i]);

                        if (!$this->db->execute()) {
                            // Rollback the transaction if the first INSERT fails
                            $this->db->rollBack();
                            return false;
                        }

                    }



                }
            }

            if ($_SESSION['userType'] == 'organisation') {
                if ($data['merchandise'] == 1) {
                    for ($i = 1; $i <= $data['merchandiseCount']; $i++) {
                        
                        $this->db->query($query8);

                        $this->db->bind(':fundraiser_id', $data['fundraiser_id']->fundraiser_id);
                        $this->db->bind(':product_name', $data['merch_name_' . $i]);
                        $this->db->bind(':price', $data['merch_price_' . $i]);
                        $this->db->bind(':discount', $data['discount_' . $i]);
                        $this->db->bind(':amount_for_fund', $data['amount_to_fund_' . $i]);
                        $this->db->bind(':total_quantity', $data['stock_' . $i]);
                        $this->db->bind(':description', $data['merch_description_' . $i]);
                        $this->db->bind(':merch_image', $data['merch_image_' . $i]);

                        if (!$this->db->execute()) {
                            // Rollback the transaction if the first INSERT fails
                            $this->db->rollBack();
                            return false;
                        }

                    }
                }
            }

            return true;

           




        } catch (Exception $e) {
            return "Error" . $e->getMessage();
        }
    }
}