<?php 
namespace App\Controllers;
use App\Models\DashboardModel;




class Dashboard extends BaseController
{
  public $dashboardmodel;
 
  public $session;


  public function __construct()
  {
    helper("form");
    $this->dashboardmodel = new DashboardModel();
    $this->session = session();
  }



  public function dashboard()
  {
    
      if(!session()->has('logged_user'))
      {
        return redirect()->to("/");
      }

      $uniid = session()->get('logged_user');
      $data['userdata'] =  $this->dashboardmodel->getLogUserdata($uniid);
      $data['navbarClasses'] = $this->session->get("navbar");


      return view("dashboard_view", $data);
       
  }


  

 


  public function assignToNextContainer($data)
    {

    $rows = $this->session->get("rows") ?? [];


    $assigned = false;

    foreach ($rows as $rowIndex => $rowColumns) {
        foreach ($rowColumns as $colIndex => $colData) {
            if ($colData === null) {

                $rows[$rowIndex][$colIndex] = $data;

                $this->session->set('lastAssigned', [
                    'row' => $rowIndex + 1,
                    'column' => $colIndex + 1
                ]);
                $assigned = true;
                break 2; 
            }
        }
    }

    if (!$assigned) {

        $newRow = [ $data ];
        $rows[] = $newRow;
    }
    $this->session->set("rows", $rows);
}


public function generateColumns()
{

    $columnCount = (int) $this->request->getPost("columnCount");
    $newRow = array_fill(0, $columnCount, null);
    $rows = $this->session->get("rows") ?? [];

    $rows[] = $newRow;
    $this->session->set("rows", $rows);

    return redirect()->to(base_url("dashboard"));
}

public function undoLastRow()
{
    $rows = $this->session->get("rows") ?? [];

    // Check if rows exist before attempting to remove one
    if (!empty($rows)) {
        array_pop($rows); // Remove the last row
        $this->session->set("rows", $rows);
    }

    return redirect()->to(base_url("dashboard"));
}



  
public function undo()
{

    $rows = $this->session->get("rows");

    if ($rows) {

        for ($rowIndex = count($rows) - 1; $rowIndex >= 0; $rowIndex--) {

            $rowColumns = $rows[$rowIndex];
            

            for ($colIndex = count($rowColumns) - 1; $colIndex >= 0; $colIndex--) {
                if ($rowColumns[$colIndex] !== null) {
                    $rows[$rowIndex][$colIndex] = null;
                    break 2; 
                }
            }
        }

        $this->session->set("rows", $rows);
    }

    return redirect()->to(base_url('dashboard'));
}

  

  


  public function logout()
  {
      session()->remove('logged_user');
      session()->destroy();
      return redirect()->to("/");
  }




 
}