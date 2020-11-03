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
		4 => [ 'label' => 'PICKUP ITEM（1列＋テキスト）'],
		5 => [ 'label' => 'PICKUP ITEM(2列)'],
		6 => [ 'label' => 'SHOP BLOG'],
		7 => [ 'label' => 'STYLE BOOK(1列＋テキスト)'],
		8 => [ 'label' => 'STYLE BOOK(3列)'],
		9 => [ 'label' => 'SNAP'],
		10 => [ 'label' => 'BANNER'],
		11 => [ 'label' => 'PICKUP ITEM(セール用)'],
        12 => [ 'label' => 'CATEGORY(セール用)'],
        13 => [ 'label' => 'SIZE(セール用)'],
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