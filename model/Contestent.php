<?php
use \Illuminate\Database\Eloquent\Model;

class Contestent extends Model {
    public $timestamps = false;

    public static function validate($data) {
        $errors = [];

        if(empty($data['name'])) {
            $errors['name'] = 'Please fill in a name';
        }
        if(empty($data['firstname'])) {
            $errors['firstname'] = 'Please fill in a firstname';
        }
        if(empty($data['nickname'])) {
            $errors['nickname'] = 'Please fill in a nickname';
        }

        if(empty($data['email'])) {
            $errors['email'] = 'Please fill in an email';
        }
        if(empty($data['phone'])) {
            $errors['phone'] = 'Please fill in a phone number';
        }

        if(!is_numeric($data['experience'])) {
            $errors['experience'] = 'Please pick an experience level';
        }

        return $errors;
    }
}
?>