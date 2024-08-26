<?php

    class Contact extends Controller {
        public function index() {

        }
        public function about() {
            $this->view('contact/about');
            //var_dump(1);
        }
    }
