<?php
class DataFormat{
    function asHTML($data){
        $html = '<table>';
        foreach ($data as $k=>$v){
            if ($k==0){
                $htm .='<tr>';
                foreach($v as $key => $value){
                    $html .='<th>'.$key.'</th>';
                }
                $html .='</tr>';
            }
            $html .= '<tr>';
            if (is_array($v)){
                foreach($v as $key => $value){
                    $html .='<td>'.$value.'</td>';
                }
            } else {
                $html .='<td>'.$v.'<td/>';
            }
            $html .= '</tr>';
        }
        $html .='</html>';
        return $html;
    }
    function asXML($data,$label='Row'){
        $xml =  new DOMDocument();
        $rootElement = $xml->createElement('Data'.$label);
        $xml->appendChild($rootElement);
        foreach ($data as $k=>$v){
            $tagRow = $xml->createElement($label);
            $rootElement->appendChild($tagRow);
            if (is_array($v)){
                foreach ($v as $key=>$value){
                    $tagData = $xml->createElement($key,$value);
                    $tagRow->appendChild($tagData);
                }
            } else {
                $tagData = $xml->createElement('col'.$k,$v);
                    $tagRow->appendChild($tagData);
            }
        }
        return $xml->saveXML();
    }
    function asJSON($data){
        return json_encode($data);
    }
}