<?php

namespace ICFReader;

use ICFReader\RecordType\RecordTypeInterface;
use ICFReader\Exception\ReaderException;
use ICFReader\Exception\RecordTypeException;
use ICFReader\RecordTypes;

class Reader extends AbstractReader
{

    private $result = [];

    protected function doFormat(array $data)
    {
        $data = $this->setHeader($data);
        $data = $this->setTrailer($data);
        $this->setInvoices($data);
        return $this->result;
    }

    private function setHeader($data)
    {
        if(isset($data[0])){
            $this->result = $this->formatLine($data[0])['values'];
            unset($data[0]);
        }

        return $data;
    }

    private function setTrailer($data)
    {
        end($data);
        $lastKey = key($data);
        if($formatLine = $this->formatLine($data[$lastKey])['values']){
            $this->result = array_merge($this->result, $formatLine);
        }
        unset($data[$lastKey]);
        reset($data);

        return $data;
    }

    private function setInvoices($data)
    {
        $invoices = [];

        $invoicesCount = -1;
        foreach($data as $key => $line){
        
            $formattedLine = $this->formatLine($line);
            if($formattedLine['type'] === RecordTypes::FH10){
                $invoicesCount++;
                $productsCount = -1;
            }
	
	        switch ($formattedLine['type']) {
		        case RecordTypes::FR10:
			        $productsCount++;
			        $invoices[$invoicesCount]['products'][$productsCount][$formattedLine['key']] = $formattedLine['values'];
			        break;
		
		        case RecordTypes::FR20:
		        case RecordTypes::FR30:
			        $productKey = str_replace('product_', '', $formattedLine['key']);
			        $invoices[$invoicesCount]['products'][$productsCount][$productKey][] = $formattedLine['values'];
			        break;
		
		        case RecordTypes::FH30:
		        case RecordTypes::FH40:
		        case RecordTypes::FH50:
		        case RecordTypes::FH60:
		        case RecordTypes::FH80:
			        $invoiceKey = str_replace('invoice_', '', $formattedLine['key']);
			        $invoices[$invoicesCount][$invoiceKey][] = $formattedLine['values'];
			        break;
		
		        default:
			        $invoiceKey = str_replace('invoice_', '', $formattedLine['key']);
			        $invoices[$invoicesCount][$invoiceKey] = $formattedLine['values'];
	        }
            
        }
        
        $this->result['invoices'] = $invoices;
        
        return $data;
    }

}