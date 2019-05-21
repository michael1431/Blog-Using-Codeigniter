<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Export extends CI_Controller {

    // construct
    public function __construct() {
        parent::__construct();
        // load model

        $this->load->model('Export_model', 'export');

    }

    // export xlsx|xls file
    public function index() {
        
        $data['title'] = 'Display Feedback Data';
        $data['feedbackInfo'] = $this->export->employeeList();
           
        // load view file for output
        $this->load->view('Users/feedbacklist', $data);
    }
     // create xlsx
    public function createXLS() {
        // create file name
   //  $fileName = 'feedbackdata-' . time() . '.xls';
         
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("Name", "Email", "Feedback");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $feedbackInfo = $this->export->employeeList();

  $excel_row = 2;


  foreach($feedbackInfo as $row)
  {
   

   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->email);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->feedback1);
   $excel_row++;
  }

  
  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        ob_end_clean();
        ob_start();
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="feedback.xlsx"');
        $object_writer->save('php://output');
        
 }
    }
?>