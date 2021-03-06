<?php
if(!function_exists("removesign")){

    function removesign($str)
    {
        $coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
        ,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
        ,"ờ","ớ","ợ","ở","ỡ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
        ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
        ,"Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ","ê","ù","à");
        $khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
        ,"a","a","a","a","a","a",
            "e","e","e","e","e","e","e","e","e","e","e",
            "i","i","i","i","i",
            "o","o","o","o","o","o","o","o","o","o","o","o"
        ,"o","o","o","o","o",
            "u","u","u","u","u","u","u","u","u","u","u",
            "y","y","y","y","y",
            "d",
            "A","A","A","A","A","A","A","A","A","A","A","A"
        ,"A","A","A","A","A",
            "E","E","E","E","E","E","E","E","E","E","E",
            "I","I","I","I","I",
            "O","O","O","O","O","O","O","O","O","O","O","O"
        ,"O","O","O","O","O",
            "U","U","U","U","U","U","U","U","U","U","U",
            "Y","Y","Y","Y","Y",
            "D","e","u","a");
        return str_replace($coDau,$khongDau,$str);
    }
}  
if(!function_exists('sub_string'))
{
    function sub_string($chuoi,$gioihan)
    {

        // nếu độ dài chuỗi nhỏ hơn hay bằng vị trí cắt 
        // thì không thay đổi chuỗi ban đầu 
        if(strlen($chuoi)<=$gioihan) 
        { 
            return $chuoi; 
        } 
        else{ 
            
            if(strpos($chuoi," ",$gioihan) > $gioihan){ 
                $new_gioihan=strpos($chuoi," ",$gioihan); 
                $new_chuoi = substr($chuoi,0,$new_gioihan)."..."; 
                return $new_chuoi; 
            } 
            $new_chuoi = substr($chuoi,0,$gioihan)."..."; 
            return $new_chuoi; 
        } 
    }
   
}
if(!function_exists("loaibohtmltrongvanban")){
    function loaibohtmltrongvanban($html, $exceptions = null){
        if(is_array($exceptions) && !empty($exceptions)) {
            foreach($exceptions as $exception) {
                $openTagPattern  = '/<(' . $exception . ')(\s.*?)?>/msi';
                $closeTagPattern = '/<\/(' . $exception . ')>/msi';
                $html = preg_replace(
                    array($openTagPattern, $closeTagPattern),
                    array('||l|\1\2|r||', '||l|/\1|r||'),
                    $html
                );
            }
        }
        $html = preg_replace('/<.*?>/msi', '', $html);
        if(is_array($exceptions)) {
            $html = str_replace('||l|', '<', $html);
            $html = str_replace('|r||', '>', $html);
        }
        return $html; // Code in Vn4rum.net - Thế giới học tập
    }
}
?>
