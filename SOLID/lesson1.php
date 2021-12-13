//! Single Responsibility
//! each class can have only one responsibility 

<?php 

class SaleReportRepository {
   public function showSaleReport()
    {
        echo "Some DB Logic"; 
    }
}

interface SaleReport{
      public function generate();

}
class ExcelFormat implements SaleReport{  //* there can be multiple formats avaliable regarding to salereport interface
      public function generate()
    {
        echo "format the report for excel";
    }
}


class Invoice{
  
    protected $salereport;

    public function __construct(SaleReportRepository $salereport)
    {
        $this->salereport=$salereport;
    }
  
    public function generateSaleInvoice(SaleReport $report) //! Invoice Method only has one responsibility generating sale
    {
        $sales=$this->salereport->showSaleReport();
        return $report->generate();
    }
}

$invoice= new Invoice(new SaleReportRepository());
var_dump($invoice->generateSaleInvoice(new ExcelFormat()));
?>