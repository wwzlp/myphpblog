<?php 
  require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/orm.php' ;

  class UserModel extends Illuminate\Database\Eloquent\Model {
    protected $table = 'users';
    // protected $guarded = array('id');
    public static function boot()
    {
        parent::boot();

        // Setup event bindings...
        User::creating(function ($user){
             if (! isValid()) {
             	# code...
             	return false;
             }
        });
    }

  }

?>

<!-- 需更新 -->