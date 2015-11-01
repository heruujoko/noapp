<?php

    class OssController extends HomeController {

        public function data(){
            $active = "oss";
            return View::make('oss.list')
            ->with('active' ,$active);
        }

    }

?>