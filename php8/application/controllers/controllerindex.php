<?php
class ControllerIndex extends Controller {

    function actionIndex(){
        $this->view->generate('ViewIndex.php', MAIN_VIEW);
    }
}
