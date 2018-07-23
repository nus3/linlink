<?php namespace App\ORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eloquent extends Model
{
    use SoftDeletes;

    protected $key = 'key';    

    protected $guarded = array('*');

    protected $dates = ['deleted_at'];
    
    public function create($params)
    {
        $model = new $this;
        $model->setAttribute($model->key, $this->createKey());
        foreach($params as $key => $value){
            $model->setAttribute($key, $value);
        }
        $model->save();
        return $model;
    }

    public function generateKey()
    {
        return strtolower(md5(microtime() . config('key')));
    }

    public function createKey()
    {
        $loopFlg = true;

        $generatedKey = $this->generateKey();

        while ($loopFlg) {
            try {
                call_user_func_array([$this->table, 'where'], [$this->key, '=', $generatedKey])->firstOrFail();
            } catch (\Exception $e) {
                $loopFlg = false;
                continue;
            }

            $generatedKey = $this->generateKey();
            sleep(0.1);
        }

        return $generatedKey;
    }
}