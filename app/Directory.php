<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $table = 'directory';


    const TYPE_ID = [
	    1 => [ 'label' => 'TOP'],
	    2 => [ 'label' => 'SHOP NEWS ＆ EVENT'],
	    3 => [ 'label' => 'NEWS ＆ TOPICS'],
		4 => [ 'label' => 'PICKUP ITEM（1ブロック＋テキスト）'],
		5 => [ 'label' => 'PICKUP ITEM(2ブロック)'],
		6 => [ 'label' => 'SHOP BLOG'],
		7 => [ 'label' => 'STYLE BOOK(1ブロック＋テキスト)'],
		8 => [ 'label' => 'STYLE BOOK(3ブロック)'],
		9 => [ 'label' => 'SIZE'],
		10 => [ 'label' => 'BANNER'],
		11 => [ 'label' => 'SALE'],
		12 => [ 'label' => 'CATEGORY 2ブロック'],
		13 => [ 'label' => 'CATEGORY 1ブロック'],
	];
	
	public function getTypeidClassAttribute()
	{
	    // 状態値
	    $type_id = $this->attributes['type_id'];

	    // 定義されていなければ空文字を返す
	    if (!isset(self::TYPE_ID[$type_id])) {
	        return '';
	    }

	    return self::TYPE_ID[$type_id]['class'];
	}

    /**
     * 状態のラベル
     * @return string
     */
    public function getTypeidLabelAttribute()
    {
        // 状態値
        $type_id = $this->attributes['type_id'];

        // 定義されていなければ空文字を返す
        if (!isset(self::TYPE_ID[$type_id])) {
            return '';
        }

        return self::TYPE_ID[$type_id]['label'];
	}
}
