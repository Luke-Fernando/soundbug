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
}
