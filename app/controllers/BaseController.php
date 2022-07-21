<?php
class BaseController{
    
    public function Welcome (){
        
        return "it's me, your your router. If you see me the text it meens there is not any routes.";
    }
    
    public function PageNotFound(){
        
        return "ERR 404 - page not found";
    }
    
    
}