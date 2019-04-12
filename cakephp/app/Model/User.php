<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel{
  var $useDbConfig = "k_master";
  public $name = "User";

}
