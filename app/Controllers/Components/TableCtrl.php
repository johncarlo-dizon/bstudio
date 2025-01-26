<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\TableModel;
class TableCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $tablemodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->tablemodel = new TableModel();
    }

    public function displayTable($ptable = null)
    { 

        $table = $ptable;

        if ($table) {
            $this->session->set("table", $table);
            $tabledata = $this->tablemodel->getTable($table);
            $this->session->set("tabledata", $tabledata);

            // Assign Table data to the next available container
            $this->dashboard->assignToNextContainer($tabledata);
        }

        return redirect()->to(base_url("dashboard"));
    }
}