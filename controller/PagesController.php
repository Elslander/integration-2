<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/Review.php';
require_once __DIR__ . '/../model/Contestent.php';

class PagesController extends Controller {
    public function home() {
        $reviews = Review::orderBy('id', 'desc')->get();
        $this->set('reviews', $reviews);
    }

    public function signup() {
        if(!empty($_POST['action'])) {
            if ($_POST['action'] == 'add_contestent') {
                $result = $this->_handleInsertContestent();
                if ($result['result'] === 'ok') {
                    header('Location:index.php?page=signup');
                    exit();
                } else {
                    $this->set('errors', $result['data']);
                }
            }
        }
    }

    public function apiCreate() {
        header('Content-Type: application/json');
        $result = $this->_handleInsertContestent();
        echo json_encode($result);
        exit();
    }

    private function _handleInsertContestent() {
        $contestent = new Contestent();

        $contestent->name = $_POST['name'] ?? '';
        $contestent->firstname = $_POST['firstname'] ?? '';
        $contestent->nickname = $_POST['nickname'] ?? '';
        $contestent->email = $_POST['email'] ?? '';
        $contestent->phone = $_POST['phone'] ?? '';
        $contestent->experience = $_POST['experience'] ?? '';

        $errors = Contestent::validate($contestent->toArray());

        if(empty($errors)) {
            $contestent->save();
            return ['result' => 'ok', 'data' => $contestent->toArray()];
        } else {
            return ['result' => 'error', 'data' => $errors];
        }
    }
}