<?php
class tpl {
 public $template_var;
 public $newtpl; 
 public $arr = array();
 /* constuctor */
 function __construct($folder = null) 
 {
   if ($folder) {$this->templatefolder = $folder;}
 }

 /* get template */
 private function get($templatename) {
  if(!isset($this->templates[$templatename])) 
  {
   if(file_exists($this->templatefolder."/$templatename.tpl")) $this->templates[$templatename]=str_replace("\"","\\\"",implode("",file($this->templatefolder."/$templatename.tpl")));
  }
    return stripslashes($this->templates[$templatename]);
    }

 /* parse */

function parse_tpl($newtpl,$arr)
{        
        $search  = array(); 
        $replace = array();    
foreach($arr as $key => $value) 
       { 
        $search[]  = '{'.$key.'}'; 
        $replace[] = $value; 
       }    
        $template_var = str_replace($search, $replace, $this->get($newtpl));
        return $template_var;
       }

}
?>
