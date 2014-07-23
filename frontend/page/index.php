<?php
class page_index extends Page
{
    function init()
    {
        parent::init();

        $this->add('H1')->set('1Your Frontend');
        $this->add('P')->set('1This is a frontend of your web app but it does not have anything yet.');


    }
}

class Form_Test extends Form {
    function init() {
        parent::init();
//        $this->add('\\rvadym\\x_tinymce\\Controller_TinyMCE');


        $this->addField('Text','text');
    }
}
