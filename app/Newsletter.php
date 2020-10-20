<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Newsletter extends Model
{
    protected $table = 'newsletter';


     /**
	 * 状態定義
	 */
	const STATUS = [
	    1 => [ 'label' => '配信セット中', 'class' => 'btn-warning' ],
	    2 => [ 'label' => '配置図作成中', 'class' => 'btn-info' ],
	    3 => [ 'label' => '原稿作成中', 'class' => 'btn-primary' ],
	    4 => [ 'label' => '配信完了', 'class' => '' ],
    ];
    

    public function newsletterPartsAdmin()
	{
	    return $this->belongsTo('App\NewsletterPartsAdmin');
	}

	/**
	 * 状態を表すHTMLクラス
	 * @return string
	 */
	public function getStatusClassAttribute()
	{
	    // 状態値
	    $status = $this->attributes['status'];

	    // 定義されていなければ空文字を返す
	    if (!isset(self::STATUS[$status])) {
	        return '';
	    }

	    return self::STATUS[$status]['class'];
	}

    /**
     * 状態のラベル
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
	}
	

	public function getFormattedDeliveryDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d　H:i', $this->attributes['delivery_date'])
            ->format('Y/m/d H:i');
    }
}
