<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/7
 * Time: 2:59 PM
 */

require './vendor/autoload.php';

require './Config.php';

use okv5\AccountApi;
use okv5\Config;
use okv5\FundingApi;
use okv5\MarketDataAPI;
use okv5\PublicDataAPI;
use okv5\TradeAPI;
use Workerman\Connection\AsyncTcpConnection;
use Workerman\Worker;
use okv5\SubaccountApi;
use okv5\StatusApi;
use okv5\RubikApi;
use okv5\BrokerApi;
use okv5\ConvertApi;
use okv5\TradingbotApi;
// use okv5\Copytrading;

/**
 * 账户 Account
 */
$obj = new AccountApi(Config::$config);
$coin = "XMR";
//获取交易产品基础信息
//$res = $obj -> instruments('SWAP');
// 查看账户余额 Get Balance
// $res = $obj -> getBalance('UST');
// 查看持仓信息 Get Positions
//$res = $obj -> getPositions('SWAP','BTC-USDT-SWAP','');
// 查看历史持仓信息 Get Positions history
// $res = $obj -> getPositionsHistory('SWAP','BTC-USDT-SWAP','','','','','');
//查看账户持仓风险 Get Account
//$res = $obj -> getAccountPositionRisk('SWAP');
// 账单流水查询（近七天） Get Bills Details (last 7 days)
//$res = $obj -> getBills('','','','','1','','','','');
// 账单流水查询（近三个月） Get Bills Details (last 3 months)
//$res = $obj -> getBillsArchive('SPOT','','','','','','','','');
// 申请账单流水（自 2021 年）
//$res = $obj -> billsHistoryArchive();
// 申请账单流水（自 2021 年）
//$res = $obj -> getBillsHistoryArchive();
// 查看账户配置 Get Account Configuration
//$res = $obj -> getConfig();
// 设置持仓模式 Set Position mode
//$res = $obj -> setPositionMode('long_short_mode');
// 设置杠杆倍数 Set Leverage
//$res = $obj -> setLeverage('XLM-USDT-SWAP','','3','cross','net');
// 获取最大可下单数量
//$res = $obj -> getMaxSize('BTC-USDT-SWAP','isolated','','39002.4915','10');
// 获取最大可用余额/保证金
//$res = $obj -> getMaxAvailSize('BTC-USDT-SWAP','','cross','','');
// 调整保证金 Increase/Decrease margin
//$res = $obj -> marginBalance('BTC-USD-210402','long','reduce','0.5','','','');
// 获取杠杆倍数 Get Leverage
//$res = $obj -> getLeverage('BTC-USD-SWAP','isolated');
// 获取杠杆倍数预估信息 Get Adjust Leverage Info
//$res = $obj -> getAdjustLeverageInfo('BTC-USD-SWAP','isolated');
// 获取交易产品最大可借 Get the maximum loan of isolated MARGIN
//$res = $obj -> getMaxloan('BTC-USDT-SWAP','isolated','');
// 获取当前账户交易手续费费率 Get Fee Rates
//$res = $obj -> getTradeFee('MARGIN','BTC-USDT','','');
// 获取计息记录 Get interest-accrued
//$res = $obj -> getInterestAccrued('','','','','','','10');
//获取用户当前市场借币利率
//$res = $obj -> getInterestRate('');
// 期权greeks的PA/BS切换
//$res = $obj -> setGreeks('PA');
//逐仓交易设置
//$res = $obj -> setIsolatedMode('','');
// 查看账户最大可转余额 Get Maximum Withdrawals
//$res = $obj -> getMaxWithdrawal('OKT');
//查看账户特定风险状态
//$res = $obj -> riskState();
//一键借币模式手动借币还币
// $res = $obj -> quickMarginBorrowRepay('','','','');
//获取一键借币还币历史
// $res = $obj -> quickMarginBorrowRepayHistory('','','','','','','','');
//获取借币利率与限额
//$res = $obj -> interestLimits('','');
//获取固定借币限额
//$res = $obj -> borrowingLimit();
//获取固定借币询价
//$res = $obj -> borrowingQuote();
//固定借币下单
//$res = $obj -> borrowingOrder();
//修改固定借币订单
//$res = $obj -> amendBorrowingOrder();
//固定借币手动续借
//$res = $obj -> manualReborrow();
//固定借币手动还币
//$res = $obj -> repayBorrowingOrder();
//固定借币转市场借币
//$res = $obj -> convertToMarketLoan();
//固定借币减少负债
//$res = $obj -> reduceLiabilities();
//获取固定借币订单信息
//$res = $obj -> borrowingOrdersList();
//手动借/还币
//$res = $obj -> spotManualBorrowRepay();
//设置自动还币
//$res = $obj -> setAutoRepay();
//获取借/还币历史
//$res = $obj -> spotBorrowRepayHistory();
//仓位创建器
// $res = $obj -> positionBuilder('','','','','');
//设置现货对冲占用
// $res = $obj -> setRiskOffsetAmt('','');
//查看账户Greeks
//$res = $obj -> greeks('');
//获取组合保证金模式仓位限制
// $res = $obj -> positionTiers('','','');
//设置组合保证金账户风险对冲模式
// $res = $obj -> setRiskOffsetType('');
//开通期权交易
// $res = $obj -> activateOption();
//设置自动借币
// $res = $obj -> setAutoLoan('');
//设置账户模式
// $res = $obj -> setAccountLevel('');
//重置 MMP 状态
// $res = $obj -> mmpReset('','');
//设置 MMP
// $res = $obj -> mmpConfig('','','','');
//查看 MMP 配置
// $res = $obj -> getMmpConfig('');


/**
 * 资金 Funding
 */
$instrumentId = "EOS-USDT";
$currency = "EOS";
$obj = new FundingApi(Config::$config);
// 获取币种列表
// $res = $obj -> getCurrencies('USDC');
// 获取资金账户余额
//$res = $obj -> getBalance('BTC');
// 获取不可交易资产
//$res = $obj -> nonTradableAssets('BTC');
//获取账户资产估值
//$res = $obj -> assetValuation('BTC');
// 资金划转
//$res = $obj -> transfer('USDT','8','','18','18','shangguanlin123','','','');
//获取资金划转状态
//$res = $obj -> transferState('203950','');
// 获取资金流水
//$res = $obj -> getBills('','','','','');
//获取充值地址信息
//$res = $obj -> getDepositAddress('USDT');
//获取充值记录
//$res = $obj -> getDepositHistory('NEAR','','','','','');
// 提币
//$res = $obj -> withdrawal('USDT','USDT-ERC20','0.1','4','0x634f6bcdefaba105358652a75f2f5c05383a7f33','');
//闪电网络提币
//$res = $obj -> withdrawalLightning('','');
//撤销提币
//$res = $obj -> cancelWithdrawal('');
//获取提币记录
//$res = $obj -> getWithdrawalHistory('','','','','','','');
//获取充值/提现的详细状态
//$res = $obj -> depositWithdrawStatus('','','','','','','');
//获取交易所列表（公共）
//$res = $obj -> exchangeList('');
//申请月结单 (近一年)
//$res = $obj -> monthlyStatement('');
//获取月结单 (近一年)
//$res = $obj -> getMonthlyStatement('');
//获取闪兑币种列表
//$res = $obj -> currencies('');
//获取闪兑币对信息
//$res = $obj -> currencyPair('');
//闪兑预估询价
//$res = $obj -> estimateQuote('');
//闪兑交易
//$res = $obj -> trade('');
//获取闪兑交易历史
//$res = $obj -> history('');




/**
 * 行情数据 Market Data
 */
// 交割合约-Ticker
$instrumentId = "ETH-USD-200925";
$coin = "EOS";
$obj = new MarketDataAPI(Config::$config);
// 获取所有产品行情信息 Get Tickers

//$res = $obj->getTickers('SWAP','ETH-USD');
// 获取单个产品行情信息 Get Ticker
//$res = $obj->getTicker('ETH-USDT');
// 获取指数行情 Get Index Tickers
//$res = $obj->getIndexTicker('','XRP-USDT');
// 获取产品深度 Get Order Book
//$res = $obj->getBooks('ETC-USDT','10');
// 获取所有交易产品K线数据 Get Candlesticksinstruments
// $res = $obj->getCandles('BTC-USDT-SWAP','','','1m','21');
// 获取交易产品历史K线数据（仅主流币） Get Candlesticks History（top currencies only）
//$res = $obj->getHistoryCandles('BTC-USDT-SWAP','','','30m','10');
// 获取指数K线数据 Get Index Candlesticks
//$res = $obj->getIndexCandles('ETH-USDT-SWAP','','','1m','');
// 获取标记价格K线数据 Get Mark Price Candlesticks
//$res = $obj->getMarkPriceCandles('BTC-USDT-SWAP','1620016942576','1619656942576','1H','');
// 获取交易产品公共成交数据 Get Trades
//$res = $obj->getTrades('BTC-USDT','');
//获取平台24小时总成交量
//$res = $obj->getPlatformVolume();
//Oracle 上链交易数据
//$res = $obj->getOracle();
//获取法币汇率
//$res = $obj->exchangerate();
//获取指数成分数据
//$res = $obj->indexComponents('');

/**
 * 获取公共数据 Get Instruments
 */
$instrumentId = "BTC-USDT-SWAP";
$currency = "EOS";
$obj = new PublicDataAPI(Config::$config);
// 获取交易产品基础信息 Get Instruments
//$res = $obj->getInstruments('SPOT','','ETH-USDT');

// 获取交割和行权记录 Get Delivery/Exercise History
//$res = $obj->getDeliveryExerciseHistory('FUTURES','BTC-USD','','','');
// 获取持仓总量 Get Open Interest
//$res = $obj->getOpenInterest('FUTURES','BTC-USD','');
// 获取永续合约当前资金费率 Get Funding Rate
//$res = $obj->getFundingRate('BTC-USD-SWAP');
// 获取永续合约历史资金费率 Get Funding Rate History
//$res = $obj->getFundingRateHistory('BTC-USDT-SWAP','','','5');
// 获取限价 Get Limit Price
//$res = $obj->getPriceLimit('BTC-USDT-SWAP');
// 获取期权定价 Get Option Market Data
//$res = $obj->getOptSummary('BTC-USD','');
// 获取预估交割/行权价格 Get Estimated Delivery/Excercise Price
//$res = $obj->getEstimatedPrice('BTC-USD-210326');
// 获取免息额度和币种折算率 Get Discount Rate And Interest-Free Quota
//$res = $obj->getQuota('');
// 获取系统时间 Get System Time
//$res = $obj->getTime();
// 获取平台公共爆仓单信息 Get Liquidation Orders
//$res = $obj->getLiquidationOrders('FUTURES','','','','BTC-USD','this_week','filled','','','');
// 获取标记价格 Get Mark Price
//$res = $obj->getMarkPrice('MARGIN','','');
//获取合约衍生品仓位档位
//$res = $obj->getTier('','','','','');
//获取杠杆利率和借币限额公共信息接口
//$res = $obj->getInterestRateLoanQuota();
//获取尊享借币杠杆利率和借币限额
//$res = $obj->vipInterestRateLoanQuota();
//获取合约衍生品标的指数
//$res = $obj->getUnderlying('SWAP');


/**
 * 交易 Trade
 */
$obj = new TradeAPI(Config::$config);
// 下单 Place Order
// $res = $obj -> order('ETH-USDT-SWAP','cross','','','','sell','short','market',"1",'','','');
//批量下单 Batch Order
//$res = $obj -> batchOrders([['BTC-USDT-210625','isolated','','b15','','buy','long','limit','1','60000',''],['BTC-USDT-210924','isolated','','b15','','buy','long','limit','1','60000','']]);
// 撤单 Cancel Order
//$res = $obj -> cancelOrder('BTC-USDT','384824471911276544','');
//批量撤单 Cancel Batch Orders
//$res = $obj -> cancelBatchOrder([['ETH-USDT-SWAP','307924566148530176',''],['ETH-USDT-SWAP','307924647446724608','']]);
// 修改订单 Amend Order
//$res = $obj -> amendOrder('OKT-USDT','','434657687979327495','','','','14');
//批量修改订单 Amend Batch Orders
//$res = $obj -> amendBatchOrder([['BTC-USDT-210625','','300587090669084672','','','3',''],['BTC-USDT-210924','','300587090669084673','','','3','']]);
// 市价仓位全平 Close Positions
//$res = $obj -> closePosition('LTC-USDT-210514','long','cross','','');
// 获取订单信息 Get Order Details
//$res = $obj -> getOrder('BTC-USDT','385475278759403520','');
// 获取未成交订单列表 Get Order List
//$res = $obj -> getOrderPending('FUTURES','','','','live','','','');
// 获取历史订单记录（近七天） Get Order History (last 7 days）
// $res = $obj -> getOrdersHistory('SWAP','','','','','','','','1');
// 获取历史订单记录（近三个月） Get Order History (last 3 months)
//$res = $obj -> getOrdersHistoryArchive('SWAP','','','','','','','','1');
// 获取成交明细 Get Transaction Details
//$res = $obj -> getFills('SPOT','','','','','','4');
//$res = $obj -> getFillsHistory('','','','','297793186030845953','','');
// 获取一键兑换主流币币种列表
// $res = $obj -> easyConvertCurrencyList('','');
// 一键兑换主流币交易
// $res = $obj -> easyConvert('','');
// 获取一键兑换主流币历史记录
// $res = $obj -> easyConvertHistory('','','');
// 获取一键还债币种列表
// $res = $obj -> oneClickRepayCurrencyList('');
// 一键还债交易
// $res = $obj -> oneClickRepay('');
//  获取一键还债历史记录
// $res = $obj -> oneClickRepayHistory('');
//  撤销 MMP 订单
// $res = $obj -> massCancel('');
//  倒计时全部撤单
// $res = $obj -> cancelAllAfter('');
//  获取账户限速
// $res = $obj -> accountRateLimit('');
//   订单预检查
// $res = $obj -> orderPrecheck('');

/**
 * 策略交易 Trade
 */
// 策略委托下单 Place Algo Order
//$res = $obj -> orderAlgo('BTC-USDT-SWAP','cross','','buy','long','trigger','1','','20','21','','','-1','','','-1','','','','','','','','','','','mark');
// 撤销策略委托订单 Cancel Algo Order
//$res = $obj -> cancelAlgos([['307913429122170880','BTC-USDT-210625'],['307913525461139456','BTC-USDT-210625']]);
// 修改策略委托订单
//$res = $obj -> amendAlgos();
//撤销高级策略委托订单
//$res = $obj -> cancelAdvanceAlgos('','314738893715283968','FUTURES','','trigger','','','');
// 获取策略委托单信息
//$res = $obj -> getOrderAlgo('','SWAP','BTC-USDT-SWAP','conditional','','','');
// 获取未完成策略委托单列表 Get Algo Order List
//$res = $obj -> getAlgoPending('','SWAP','BTC-USDT-SWAP','conditional','','','');
// 获取历史策略委托单列表 Get Algo Order History
//$res = $obj -> getAlgoHistory('','388040684007202816','SWAP','','conditional','','','');

/**
 * 网格交易
 */
$obj = new TradingbotApi(Config::$config);
//网格策略委托下单
// $res = $obj -> orderAlgo();
//修改网格策略订单
// $res = $obj -> amendOrderAlgo();
//网格策略停止
// $res = $obj -> stopOrderAlgo();
//合约网格平仓
// $res = $obj -> closePosition();
//撤销合约网格平仓单
// $res = $obj -> cancelCloseOrder();
//网格策略立即触发
// $res = $obj -> orderInstantTrigger();
// 获取未完成网格策略委托单列表
// $res = $obj -> ordersAlgoPending();
// 获取历史网格策略委托单列表
// $res = $obj -> ordersAlgoHistory();
// 获取网格策略委托订单详情
// $res = $obj -> ordersAlgoDetails();
// 获取网格策略委托子订单信息
// $res = $obj -> subOrders();
// 获取网格策略委托持仓
// $res = $obj -> positions();
// 现货网格提取利润
// $res = $obj -> withdrawIncome();
// 调整保证金计算
// $res = $obj -> computeMarginBalance();
// 调整保证金
// $res = $obj -> marginBalance();
// 加仓
// $res = $obj -> adjustInvestment();
// 网格策略智能回测（公共）
// $res = $obj -> aiParam();
// 计算最小投资数量（公共）
// $res = $obj -> minInvestment();
// RSI回测（公共）
// $res = $obj -> rsiBackTesting();
// 最大网格数量（公共）
// $res = $obj -> ridQuantity();


/**
 * 跟单 copytrading
 */
// $obj = new Copytrading(Config::$config);
//获取当前带单或跟单
// $res = $obj -> currentSubpositions('','','','','','','');
// 获取历史带单或跟单
// $res = $obj -> subpositionsHistory('','','','','','');
// 带单或跟单仓位止盈止损
// $res = $obj -> algoOrder('','','','','','','','','','');
// 平仓带单或跟单
// $res = $obj -> closeSubposition('','','','','','');
// 获取带单产品
// $res = $obj -> instruments('');
// 交易员修改带单产品
// $res = $obj -> setInstruments('','');
// 交易员历史分润明细
// $res = $obj -> profitSharingDetails('','');
// 交易员历史分润汇总
// $res = $obj -> totalProfitSharing('','');
// 交易员待分润明细
// $res = $obj -> unrealizedProfitSharingDetails('','');
// 交易员待分润汇总
// $res = $obj -> totalUnrealizedProfitSharing('','');
// 带单申请
// $res = $obj -> applyLeadTrading('','');
// 停止带单
// $res = $obj -> stopLeadTrading('','');
// 修改分润比例
// $res = $obj -> amendProfitSharingRatio('','');
// 查看账户配置信息
// $res = $obj -> config('','');
// 首次跟单设置
// $res = $obj -> firstCopySettings('','');
// 修改跟单设置
// $res = $obj -> amendCopySettings('','');
// 停止跟单
// $res = $obj -> stopCopyTrading('','');
// 获取跟单设置
// $res = $obj -> copySettings('','');
// 批量获取杠杆倍数
// $res = $obj -> batchLeverageInfo('','');


/**
 * 子账户 Subaccount
 */
$obj = new SubaccountApi(Config::$config);
//查看子账户列表（仅适用于母账户）
//$res = $obj -> subaccountList('','','','','');
//获取子账户资产余额
//$res = $obj -> balances('shangguanlin');
//查询子账户转账记录
//$res = $obj -> bills('','','shangguanlin123','','','');
//查询子账户转账记录
//$res = $obj -> transfer('','','','','','','');
//设置子账户主动转出权限
//$res = $obj -> setTransferOut('','');
//查看被托管的子账户列表
//$res = $obj -> entrustSubaccountList('','','','','','','');

/**
 * Status Status
 */
$obj = new StatusApi(Config::$config);
//$res = $obj -> getStatus('');
/**
 *交易大数据
 */
$obj = new RubikApi(Config::$config);
// $res = $obj -> supportCoin();
//$res = $obj -> takerVolume('BTC','SPOT','','','');
//$res = $obj -> loanRatio('','','','');
//$res = $obj -> accountRatio('','','','');
//$res = $obj -> openinterestvolume('','','','');
//$res = $obj -> optionOpenInterestVolume('','');
//$res = $obj -> openinterestvolumeratio('','');
//$res = $obj -> openInterestVolumeExpiry('','');
//$res = $obj -> openInterestVolumeStrike('','','');
//$res = $obj -> takerBlockVolume('','');

/**
 *独立经纪商
 */
$obj = new BrokerApi(Config::$config);
//获取独立经纪商账户信息
//$res = $obj -> info();
//创建子账户
//$res = $obj -> createSubaccount('','','');
//删除子账户
//$res = $obj -> deleteSubaccount('');
//获取子账户列表
//$res = $obj -> subaccountInfo('','','');
//创建子账户的APIKey
//$res = $obj -> apikey('','','','','');
//查询子账户的APIKey
//$res = $obj -> getApikey('','');
//重置子账户的APIKey
//$res = $obj -> modifyApikey('','','','','');
//删除子账户的APIKey
//$res = $obj -> deleteApikey('','');
//设置子账户的账户等级
//$res = $obj -> setSubaccountLevel('','');
//设置子账户的交易手续费费率
//$res = $obj -> setSubaccountFeeRate('','','','','','');
//创建子账户充值地址
//$res = $obj -> subaccountDepositAddress('','','','','');
//重置子账户充值地址
//$res = $obj -> modifySubaccountDepositAddress('','','','','');
//获取充值地址
//$res = $obj -> getSubaccountDepositAddress('','');
//获取子账户获取充值记录
//$res = $obj -> subaccountDepositHistory('','','','','','','');
//获取子账户返佣记录
//$res = $obj -> rebateDaily('','','','','');
//获取返佣明细下载链接
//$res = $obj -> rebatePerOrders('','','');
//生成返佣明细下载链接
//$res = $obj -> PostrebatePerOrders('','');




/**
 *闪兑
 */
$obj = new ConvertApi(Config::$config);
//获取闪兑币种列表
//$res = $obj -> currencies();
//获取闪兑币对信息
//$res = $obj -> currencyPair('','');
//闪兑预估询价
//$res = $obj -> estimateQuote('','','','','','','');
//闪兑交易
// $res = $obj -> trade('quoterUSDCUSDT','USDC','USDT','sell','1','USDT','test0324006','');
//获取闪兑交易历史
//$res = $obj -> history('','','','');

var_dump($res);
