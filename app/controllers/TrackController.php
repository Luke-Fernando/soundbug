<!-- Manages music tracks (uploading, browsing, viewing, etc.).

Functions:

index() – Show all tracks (optionally with filters)

view($id) – Show individual track details

upload() – Add a new soundtrack (for admins or creators)

edit($id) – Edit a track

delete($id) – Delete a track

search($keyword) – Search for tracks

download($id) – Download/purchase the track (if allowed) -->

<?php
class TrackController extends Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $data = [
            "user" => $this->user,
            "page_topic" => "Add Track"
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
}
