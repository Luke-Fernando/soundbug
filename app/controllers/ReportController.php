<!-- userReport($userId) – Purchases or downloads for a specific user

adminReport() – Sales summary, top tracks, revenue, etc. -->
<?php
class ReportController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function stats()
    {
        $data = [
            "user" => $this->user
        ];
        $this->view("stats", $data);
    }
}
