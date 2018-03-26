<?php

////////////////////////////////////////////////////////////////////////////////
///	@file			ReversiSetting.php
///	@brief			アプリ設定クラス
///	@author			Yuta Yoshinaga
///	@date			2018.03.02
///	$Version:		$
///	$Revision:		$
///
/// Copyright (c) 2018 Yuta Yoshinaga. All Rights reserved.
///
/// - 本ソフトウェアの一部又は全てを無断で複写複製（コピー）することは、
///   著作権侵害にあたりますので、これを禁止します。
/// - 本製品の使用に起因する侵害または特許権その他権利の侵害に関しては
///   当社は一切その責任を負いません。
///
////////////////////////////////////////////////////////////////////////////////

require_once("ReversiConst.php");

////////////////////////////////////////////////////////////////////////////////
///	@class		ReversiSetting
///	@brief		アプリ設定クラス
///
////////////////////////////////////////////////////////////////////////////////
class ReversiSetting
{
	// #region メンバ変数
	private $_mMode;															//!< 現在のモード
	private $_mType;															//!< 現在のタイプ
	private $_mPlayer;															//!< プレイヤーの色
	private $_mAssist;															//!< アシスト
	private $_mGameSpd;															//!< ゲームスピード
	private $_mEndAnim;															//!< ゲーム終了アニメーション
	private $_mMasuCntMenu;														//!< マスの数
	private $_mMasuCnt;															//!< マスの数
	private $_mPlayCpuInterVal;													//!< CPU対戦時のインターバル(msec)
	private $_mPlayDrawInterVal;												//!< 描画のインターバル(msec)
	private $_mEndDrawInterVal;													//!< 終了アニメーション描画のインターバル(msec)
	private $_mEndInterVal;														//!< 終了アニメーションのインターバル(msec)
	private $_mTheme;															//!< テーマ
	private $_mPlayerColor1;													//!< プレイヤー1の色
	private $_mPlayerColor2;													//!< プレイヤー2の色
	private $_mPlayerColor3;													//!< プレイヤー3の色
	private $_mPlayerColor4;													//!< プレイヤー4の色
	private $_mBackGroundColor;													//!< 背景の色
	private $_mBorderColor;														//!< 枠線の色
	// #endregion

	// #region プロパティ
	public function getmMode(){ return $this->_mMode; }
	public function setmMode($_mMode){ $this->_mMode = $_mMode; }

	public function getmType(){ return $this->_mType; }
	public function setmType($_mType){ $this->_mType = $_mType; }

	public function getmPlayer(){ return $this->_mPlayer; }
	public function setmPlayer($_mPlayer){ $this->_mPlayer = $_mPlayer; }

	public function getmAssist(){ return $this->_mAssist; }
	public function setmAssist($_mAssist){ $this->_mAssist = $_mAssist; }

	public function getmGameSpd(){ return $this->_mGameSpd; }
	public function setmGameSpd($_mGameSpd){ $this->_mGameSpd = $_mGameSpd; }

	public function getmEndAnim(){ return $this->_mEndAnim; }
	public function setmEndAnim($_mEndAnim){ $this->_mEndAnim = $_mEndAnim; }

	public function getmMasuCntMenu(){ return $this->_mMasuCntMenu; }
	public function setmMasuCntMenu($_mMasuCntMenu){ $this->_mMasuCntMenu = $_mMasuCntMenu; }

	public function getmMasuCnt(){ return $this->_mMasuCnt; }
	public function setmMasuCnt($_mMasuCnt){ $this->_mMasuCnt = $_mMasuCnt; }

	public function getmPlayCpuInterVal(){ return $this->_mPlayCpuInterVal; }
	public function setmPlayCpuInterVal($_mPlayCpuInterVal){ $this->_mPlayCpuInterVal = $_mPlayCpuInterVal; }

	public function getmPlayDrawInterVal(){ return $this->_mPlayDrawInterVal; }
	public function setmPlayDrawInterVal($_mPlayDrawInterVal){ $this->_mPlayDrawInterVal = $_mPlayDrawInterVal; }

	public function getmEndDrawInterVal(){ return $this->_mEndDrawInterVal; }
	public function setmEndDrawInterVal($_mEndDrawInterVal){ $this->_mEndDrawInterVal = $_mEndDrawInterVal; }

	public function getmEndInterVal(){ return $this->_mEndInterVal; }
	public function setmEndInterVal($_mEndInterVal){ $this->_mEndInterVal = $_mEndInterVal; }

	public function getmTheme(){ return $this->_mTheme; }
	public function setmTheme($_mTheme){ $this->_mTheme = $_mTheme; }

	public function getmPlayerColor1(){ return $this->_mPlayerColor1; }
	public function setmPlayerColor1($_mPlayerColor1){ $this->_mPlayerColor1 = $_mPlayerColor1; }

	public function getmPlayerColor2(){ return $this->_mPlayerColor2; }
	public function setmPlayerColor2($_mPlayerColor2){ $this->_mPlayerColor2 = $_mPlayerColor2; }

	public function getmPlayerColor3(){ return $this->_mPlayerColor3; }
	public function setmPlayerColor3($_mPlayerColor3){ $this->_mPlayerColor3 = $_mPlayerColor3; }

	public function getmPlayerColor4(){ return $this->_mPlayerColor4; }
	public function setmPlayerColor4($_mPlayerColor4){ $this->_mPlayerColor4 = $_mPlayerColor4; }

	public function getmBackGroundColor(){ return $this->_mBackGroundColor; }
	public function setmBackGroundColor($_mBackGroundColor){ $this->_mBackGroundColor = $_mBackGroundColor; }

	public function getmBorderColor(){ return $this->_mBorderColor; }
	public function setmBorderColor($_mBorderColor){ $this->_mBorderColor = $_mBorderColor; }

	// #endregion

	////////////////////////////////////////////////////////////////////////////////
	///	@brief			コンストラクタ
	///	@fn				__construct()
	///	@return			ありません
	///	@author			Yuta Yoshinaga
	///	@date			2018.03.02
	///
	////////////////////////////////////////////////////////////////////////////////
	public function __construct()
	{
		$this->reset();
	}

	////////////////////////////////////////////////////////////////////////////////
	///	@brief			デストラクタ
	///	@fn				__destruct()
	///	@return			ありません
	///	@author			Yuta Yoshinaga
	///	@date			2018.03.02
	///
	////////////////////////////////////////////////////////////////////////////////
	public function __destruct()
	{
	}

	////////////////////////////////////////////////////////////////////////////////
	///	@brief			リセット
	///	@fn				reset()
	///	@return			ありません
	///	@author			Yuta Yoshinaga
	///	@date			2018.03.02
	///
	////////////////////////////////////////////////////////////////////////////////
	public function reset()
	{
		$this->_mMode				= ReversiConst::$DEF_MODE_ONE;				// 現在のモード
		$this->_mType				= ReversiConst::$DEF_TYPE_NOR;				// 現在のタイプ
		$this->_mPlayer				= ReversiConst::$REVERSI_STS_BLACK;			// プレイヤーの色
		$this->_mAssist				= ReversiConst::$DEF_ASSIST_ON;				// アシスト
		$this->_mGameSpd			= ReversiConst::$DEF_GAME_SPD_MID;			// ゲームスピード
		$this->_mEndAnim			= ReversiConst::$DEF_END_ANIM_ON;			// ゲーム終了アニメーション
		$this->_mMasuCntMenu		= ReversiConst::$DEF_MASU_CNT_12;			// マスの数
		$this->_mMasuCnt			= ReversiConst::$DEF_MASU_CNT_12_VAL;		// マスの数
		$this->_mPlayCpuInterVal	= ReversiConst::$DEF_GAME_SPD_MID_VAL2;		// CPU対戦時のインターバル(msec)
		$this->_mPlayDrawInterVal	= ReversiConst::$DEF_GAME_SPD_MID_VAL;		// 描画のインターバル(msec)
		$this->_mEndDrawInterVal	= 100;										// 終了アニメーション描画のインターバル(msec)
		$this->_mEndInterVal		= 500;										// 終了アニメーションのインターバル(msec)
		$this->_mTheme				= "Darkly";									// テーマ
		$this->_mPlayerColor1		= "#000000";								// プレイヤー1の色
		$this->_mPlayerColor2		= "#FFFFFF";								// プレイヤー2の色
		$this->_mPlayerColor3		= "#FF0000";								// プレイヤー1の色
		$this->_mPlayerColor4		= "#0000FF";								// プレイヤー2の色
		$this->_mBackGroundColor	= "#00FF00";								// 背景の色
		$this->_mBorderColor		= "#000000";								// 枠線の色
	}
}

?>
