<!-- If you have admin management features (dashboard, manage users, etc.).

Functions:

dashboard() – Admin home with stats

manageUsers() – View/edit users

manageTracks() – Approve/edit/delete tracks

viewOrders() – View all site orders

siteSettings() – Configure site-wide settings -->
<?php
class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function tracks()
    {
        $data = [
            "user" => $this->user
        ];

        $this->view("admin/tracks", $data);
    }

    public function users()
    {
        $data = [
            "user" => $this->user
        ];

        $this->view("admin/users", $data);
    }

    public function operators()
    {
        $data = [
            "user" => $this->user
        ];

        $this->view("admin/operators", $data);
    }
}
