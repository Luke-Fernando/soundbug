<?php
class TrackModel extends Model
{
    public function load_categories()
    {
        $categories_resultset = $this->search("SELECT * FROM category;", []);
        $categories_num = $categories_resultset->num_rows;
        $categories = [];
        if ($categories_num > 0) {
            for ($i = 0; $i < $categories_num; $i++) {
                $category_data = $categories_resultset->fetch_assoc();
                array_push($categories, ["id" => $category_data['id'], "category" => $category_data['category']]);
            }
        }
        return $categories;
    }

    public function load_sub_category($id)
    {
        $result = [
            'status' => true,
            'message' => '',
        ];
        $sub_categories_resultset = $this->search("SELECT * FROM sub_category WHERE category_id = ?;", [$id]);
        $sub_categories_num = $sub_categories_resultset->num_rows;
        $sub_categories = [];
        if ($sub_categories_num > 0) {
            for ($i = 0; $i < $sub_categories_num; $i++) {
                $sub_category_data = $sub_categories_resultset->fetch_assoc();
                array_push($sub_categories, ["id" => $sub_category_data['id'], "sub_category" => $sub_category_data['sub_category']]);
            }
            $result['data'] = $sub_categories;
        } else {
            $result['status'] = false;
            $result['message'] = "";
        }
        return $result;
    }
}
