<?php
class TrackController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model_handler = $this->model("TrackModel");
    }

    public function all_tracks()
    {
        $data = [
            "user" => $this->user,
            "page_topic" => "All Tracks"
        ];
        $this->view("all-tracks", $data);
    }

    public function advanced_search()
    {
        $data = [
            "user" => $this->user,
            "page_topic" => "Advanced Search"
        ];
        $this->view("advanced-search", $data);
    }

    public function track()
    {
        $data = [
            "user" => $this->user,
            "track_name" => "Track Name",
            "page_topic" => "Track"
        ];
        $this->view("track", $data);
    }

    public function reviews()
    {
        $data = [
            "user" => $this->user,
            "track_name" => "Track Name",
            "page_topic" => "Reviews"
        ];
        $this->view("reviews", $data);
    }

    public function my_tracks()
    {
        $data = [
            "user" => $this->user,
            "page_topic" => "My Tracks"
        ];
        $this->view("my-tracks", $data);
    }

    public function add_track()
    {
        $categories = $this->model_handler->load_categories();
        $data = [
            "user" => $this->user,
            "page_topic" => "Add Track",
            "categories" => $categories
        ];
        $this->view("add-track", $data);
    }

    public function edit_track()
    {
        $data = [
            "user" => $this->user,
            "page_topic" => "Edit Track"
        ];
        $this->view("edit-track", $data);
    }

    public function add_review()
    {
        $data = [
            "user" => $this->user,
        ];
        $this->view("reviews/add", $data);
    }

    public function edit_review()
    {
        $data = [
            "user" => $this->user,
        ];
        $this->view("reviews/edit", $data);
    }

    public function load_sub_category()
    {
        $response = [
            'status' => 'success',
            'data' => "",
        ];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model_result = $this->model_handler->load_sub_category($id);

            if ($model_result['status']) {
                $response['status'] = 'success';
                ob_start();
?>
                <option selected value="">Select sub category</option>
                <?php
                for ($i = 0; $i < count($model_result['data']); $i++) {
                ?>
                    <option value="<?php echo $model_result['data'][$i]['id']; ?>"><?php echo $model_result['data'][$i]['sub_category']; ?></option>
                <?php
                }
                $response['data'] = ob_get_clean();
            } else {
                $response['status'] = 'success';
                ob_start();
                ?>
                <option selected value="">Select category first</option>
<?php
                $response['data'] = ob_get_clean();
            }
        }
        echo json_encode($response);
    }

    function add_track_proccess()
    {
        $response = [
            'status' => 'success',
            'message' => "",
        ];
        if (isset($_FILES['thumbnail'])) {
            if (isset($_FILES['track'])) {
                if (isset($_POST['title']) && !empty($_POST['title'])) {
                    if (isset($_POST['price']) && !empty($_POST['price'])) {
                        if (isset($_POST['category']) && !empty($_POST['category'])) {
                            if (isset($_POST['sub_category']) && !empty($_POST['sub_category'])) {
                                if (isset($_POST['description']) && !empty($_POST['description'])) {
                                    $thumbnail = $_FILES['thumbnail'];
                                    $track = $_FILES['track'];
                                    $thumbnail_name = $this->user['username'] . "-" . time() . "-thumbnail";
                                    $thumbnail_response = $this->save_file($thumbnail, $thumbnail_name, "image", __DIR__ . "/../../public/assets/images/products/");
                                    if ($thumbnail_response['status']) {
                                        $track_name = $this->user['username'] . "-" . time() . "-track";
                                        $track_response = $this->save_file($track, $track_name, "audio", __DIR__ . "/../../public/assets/tracks/products/");
                                        if ($track_response['status']) {
                                            $response['status'] = 'success';
                                        } else {
                                            $response['status'] = 'error';
                                            $response['message'] = $track_response['message'];
                                        }
                                    } else {
                                        $response['status'] = 'error';
                                        $response['message'] = $thumbnail_response['message'];
                                    }
                                } else {
                                    $response['status'] = 'error';
                                    $response['message'] = "Please add the description";
                                }
                            } else {
                                $response['status'] = 'error';
                                $response['message'] = "Please select the sub category";
                            }
                        } else {
                            $response['status'] = 'error';
                            $response['message'] = "Please select the category";
                        }
                    } else {
                        $response['status'] = 'error';
                        $response['message'] = "Please add the price";
                    }
                } else {
                    $response['status'] = 'error';
                    $response['message'] = "Please add the title";
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = "Please add the audio track";
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = "Please add a thumbnail";
        }
        echo json_encode($response);
    }

    function save_file($file, $file_name, $expected_type, $path)
    {
        $response = [
            'status' => true,
            'message' => "",
        ];
        $file_tmp_path = $file['tmp_name'];
        $file_type = $file['type'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_file($finfo, $file_tmp_path);
        finfo_close($finfo);
        $allowed_mime_types = [];
        if ($expected_type == "image") {
            $allowed_mime_types = ['image/jpeg', 'image/png', 'image/gif'];
        } else if ($expected_type == "audio") {
            $allowed_mime_types = [
                'audio/mpeg',
                'audio/wav',
                'audio/x-wav',
                'audio/ogg',
                'audio/x-aac',
                'audio/flac',
                'audio/x-ms-wma'
            ];
        }
        if (!is_writable($path . $file_name . "." . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)))) {
            echo "Destination not writable!";
        }
        if (in_array($mime_type, $allowed_mime_types)) {
            if (move_uploaded_file($file_tmp_path, $path . $file_name . "." . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)))) {
                $response['status'] = true;
                $response['message'] = "";
            } else {
                $response['status'] = false;
                $response['message'] = "Failed to save the file";
            }
        } else {
            $response['status'] = false;
            $response['message'] = "Invalid file type in " . $expected_type . " field";
        }
        return $response;
    }
}
