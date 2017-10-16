<?php

    namespace Database\BlogPost;

    class BlogPost {

        private $id;
        private $title;
        private $header;
        private $author;
        private $content;
        private $publishingDate;
        private $editingDate;

        public function setId($id){
            $this->id = $id;
            return $this;
        }
        public function getId(){
            return $this->id;
        }
        public function setTitle($title){
            $this->title = $title;
            return $this;
        }
        public function getTitle(){
            return $this->title;
        }
        public function setAuthor($author){
            $this->author = $author;
            return $this;
        }
        public function getAuthor(){
            return $this->author;
        }
        public function setHeader($header){
            $this->header = $header;
            return $this;
        }
        public function getHeader(){
            return $this->header;
        }
        public function setContent($content){
            $this->content = $content;
            return $this;
        }
        public function getContent(){
            return $this->content;
        }
        public function setPublishingDate($date){
            $this->publishingDate = $date;
            return $this;
        }
        public function getPublishingDate(){
            return $this->publishingDate;
        }
        public function setEditingDate($date){
            $this->editingDate = $date;
            return $this;
        }
        public function getEditingDate(){
            return $this->editingDate;
        }

    }