<?php
namespace joker7789\yiigrowl;

class Growl extends \yii\base\Widget
{
	public $message;
	public $options;

	public function init()
	{
		parent::init();
		GrowlAsset::register($this->getView(), \yii\web\View::POS_READY);
	}

	public function run()
	{
		if(!isset($this->message) || empty($this->message))
			return false;

		if(is_array($this->options)) {
			$options = json_encode($this->options);
			$this->getView()->registerJs("$.jGrowl(\"{$this->message}\", {$options})", \yii\web\View::POS_READY);
		}else{
			$this->getView()->registerJs("$.jGrowl(\"{$this->message}\")", \yii\web\View::POS_READY);
		}
	}
}
