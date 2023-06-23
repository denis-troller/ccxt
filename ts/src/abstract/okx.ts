// -------------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -------------------------------------------------------------------------------

import { implicitReturnType } from '../base/types.js';
import { Exchange as _Exchange } from '../base/Exchange.js';

interface Exchange {
    publicGetMarketTickers (params?: {}): Promise<implicitReturnType>;
    publicGetMarketTicker (params?: {}): Promise<implicitReturnType>;
    publicGetMarketIndexTickers (params?: {}): Promise<implicitReturnType>;
    publicGetMarketBooks (params?: {}): Promise<implicitReturnType>;
    publicGetMarketBooksLite (params?: {}): Promise<implicitReturnType>;
    publicGetMarketCandles (params?: {}): Promise<implicitReturnType>;
    publicGetMarketHistoryCandles (params?: {}): Promise<implicitReturnType>;
    publicGetMarketHistoryMarkPriceCandles (params?: {}): Promise<implicitReturnType>;
    publicGetMarketHistoryIndexCandles (params?: {}): Promise<implicitReturnType>;
    publicGetMarketIndexCandles (params?: {}): Promise<implicitReturnType>;
    publicGetMarketMarkPriceCandles (params?: {}): Promise<implicitReturnType>;
    publicGetMarketTrades (params?: {}): Promise<implicitReturnType>;
    publicGetMarketPlatform24Volume (params?: {}): Promise<implicitReturnType>;
    publicGetMarketOpenOracle (params?: {}): Promise<implicitReturnType>;
    publicGetMarketIndexComponents (params?: {}): Promise<implicitReturnType>;
    publicGetMarketOptionInstrumentFamilyTrades (params?: {}): Promise<implicitReturnType>;
    publicGetPublicInstruments (params?: {}): Promise<implicitReturnType>;
    publicGetPublicInstrumentTickBands (params?: {}): Promise<implicitReturnType>;
    publicGetPublicDeliveryExerciseHistory (params?: {}): Promise<implicitReturnType>;
    publicGetPublicOpenInterest (params?: {}): Promise<implicitReturnType>;
    publicGetPublicFundingRate (params?: {}): Promise<implicitReturnType>;
    publicGetPublicFundingRateHistory (params?: {}): Promise<implicitReturnType>;
    publicGetPublicPriceLimit (params?: {}): Promise<implicitReturnType>;
    publicGetPublicOptSummary (params?: {}): Promise<implicitReturnType>;
    publicGetPublicEstimatedPrice (params?: {}): Promise<implicitReturnType>;
    publicGetPublicDiscountRateInterestFreeQuota (params?: {}): Promise<implicitReturnType>;
    publicGetPublicTime (params?: {}): Promise<implicitReturnType>;
    publicGetPublicLiquidationOrders (params?: {}): Promise<implicitReturnType>;
    publicGetPublicMarkPrice (params?: {}): Promise<implicitReturnType>;
    publicGetPublicOptionTrades (params?: {}): Promise<implicitReturnType>;
    publicGetPublicPositionTiers (params?: {}): Promise<implicitReturnType>;
    publicGetPublicUnderlying (params?: {}): Promise<implicitReturnType>;
    publicGetPublicInterestRateLoanQuota (params?: {}): Promise<implicitReturnType>;
    publicGetPublicVipInterestRateLoanQuota (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatTradingDataSupportCoin (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatTakerVolume (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatMarginLoanRatio (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatContractsLongShortAccountRatio (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatContractsOpenInterestVolume (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatOptionOpenInterestVolume (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatOptionOpenInterestVolumeRatio (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatOptionOpenInterestVolumeExpiry (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatOptionOpenInterestVolumeStrike (params?: {}): Promise<implicitReturnType>;
    publicGetRubikStatOptionTakerBlockVolume (params?: {}): Promise<implicitReturnType>;
    publicGetSystemStatus (params?: {}): Promise<implicitReturnType>;
    publicGetFinanceSavingsLendingRateSummary (params?: {}): Promise<implicitReturnType>;
    publicGetFinanceSavingsLendingRateHistory (params?: {}): Promise<implicitReturnType>;
    publicGetMarketExchangeRate (params?: {}): Promise<implicitReturnType>;
    privateGetAccountAccountPositionRisk (params?: {}): Promise<implicitReturnType>;
    privateGetAccountBalance (params?: {}): Promise<implicitReturnType>;
    privateGetAccountPositions (params?: {}): Promise<implicitReturnType>;
    privateGetAccountPositionsHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAccountBills (params?: {}): Promise<implicitReturnType>;
    privateGetAccountBillsArchive (params?: {}): Promise<implicitReturnType>;
    privateGetAccountConfig (params?: {}): Promise<implicitReturnType>;
    privateGetAccountMaxSize (params?: {}): Promise<implicitReturnType>;
    privateGetAccountMaxAvailSize (params?: {}): Promise<implicitReturnType>;
    privateGetAccountLeverageInfo (params?: {}): Promise<implicitReturnType>;
    privateGetAccountMaxLoan (params?: {}): Promise<implicitReturnType>;
    privateGetAccountTradeFee (params?: {}): Promise<implicitReturnType>;
    privateGetAccountInterestAccrued (params?: {}): Promise<implicitReturnType>;
    privateGetAccountInterestRate (params?: {}): Promise<implicitReturnType>;
    privateGetAccountMaxWithdrawal (params?: {}): Promise<implicitReturnType>;
    privateGetAccountRiskState (params?: {}): Promise<implicitReturnType>;
    privateGetAccountBorrowRepayHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAccountQuickMarginBorrowRepayHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAccountInterestLimits (params?: {}): Promise<implicitReturnType>;
    privateGetAccountVipInterestAccrued (params?: {}): Promise<implicitReturnType>;
    privateGetAccountVipLoanOrderList (params?: {}): Promise<implicitReturnType>;
    privateGetAccountVipLoanOrderDetail (params?: {}): Promise<implicitReturnType>;
    privateGetAssetAssetValuation (params?: {}): Promise<implicitReturnType>;
    privateGetAssetDepositAddress (params?: {}): Promise<implicitReturnType>;
    privateGetAssetBalances (params?: {}): Promise<implicitReturnType>;
    privateGetAssetTransferState (params?: {}): Promise<implicitReturnType>;
    privateGetAssetTransferRecord (params?: {}): Promise<implicitReturnType>;
    privateGetAssetDepositHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAssetWithdrawalHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAssetDepositWithdrawStatus (params?: {}): Promise<implicitReturnType>;
    privateGetAssetCurrencies (params?: {}): Promise<implicitReturnType>;
    privateGetAssetBills (params?: {}): Promise<implicitReturnType>;
    privateGetAssetPiggyBalance (params?: {}): Promise<implicitReturnType>;
    privateGetAssetDepositLightning (params?: {}): Promise<implicitReturnType>;
    privateGetAssetNonTradableAssets (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrder (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrdersPending (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrdersHistory (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrdersHistoryArchive (params?: {}): Promise<implicitReturnType>;
    privateGetTradeFills (params?: {}): Promise<implicitReturnType>;
    privateGetTradeFillsHistory (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrdersAlgoPending (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrdersAlgoHistory (params?: {}): Promise<implicitReturnType>;
    privateGetTradeOrderAlgo (params?: {}): Promise<implicitReturnType>;
    privateGetAccountSubaccountBalances (params?: {}): Promise<implicitReturnType>;
    privateGetAccountSubaccountInterestLimits (params?: {}): Promise<implicitReturnType>;
    privateGetAssetSubaccountBills (params?: {}): Promise<implicitReturnType>;
    privateGetAssetSubaccountManagedSubaccountBills (params?: {}): Promise<implicitReturnType>;
    privateGetUsersSubaccountList (params?: {}): Promise<implicitReturnType>;
    privateGetUsersSubaccountApikey (params?: {}): Promise<implicitReturnType>;
    privateGetUsersEntrustSubaccountList (params?: {}): Promise<implicitReturnType>;
    privateGetBrokerNdInfo (params?: {}): Promise<implicitReturnType>;
    privateGetBrokerNdSubaccountInfo (params?: {}): Promise<implicitReturnType>;
    privateGetAssetBrokerNdSubaccountDepositAddress (params?: {}): Promise<implicitReturnType>;
    privateGetAssetBrokerNdSubaccountDepositHistory (params?: {}): Promise<implicitReturnType>;
    privateGetBrokerNdRebateDaily (params?: {}): Promise<implicitReturnType>;
    privateGetBrokerNdSubaccountApikey (params?: {}): Promise<implicitReturnType>;
    privateGetBrokerNdRebatePerOrders (params?: {}): Promise<implicitReturnType>;
    privateGetAssetBrokerNdSubaccountWithdrawalHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAssetConvertCurrencies (params?: {}): Promise<implicitReturnType>;
    privateGetAssetConvertCurrencyPair (params?: {}): Promise<implicitReturnType>;
    privateGetAssetConvertEstimateQuote (params?: {}): Promise<implicitReturnType>;
    privateGetAssetConvertTrade (params?: {}): Promise<implicitReturnType>;
    privateGetAssetConvertHistory (params?: {}): Promise<implicitReturnType>;
    privateGetAccountGreeks (params?: {}): Promise<implicitReturnType>;
    privateGetFinanceStakingDefiOffers (params?: {}): Promise<implicitReturnType>;
    privateGetFinanceStakingDefiOrdersActive (params?: {}): Promise<implicitReturnType>;
    privateGetFinanceStakingDefiOrdersHistory (params?: {}): Promise<implicitReturnType>;
    privateGetFinanceSavingsBalance (params?: {}): Promise<implicitReturnType>;
    privateGetFinanceSavingsLendingHistory (params?: {}): Promise<implicitReturnType>;
    privateGetRfqCounterparties (params?: {}): Promise<implicitReturnType>;
    privateGetRfqMakerInstrumentSettings (params?: {}): Promise<implicitReturnType>;
    privateGetRfqRfqs (params?: {}): Promise<implicitReturnType>;
    privateGetRfqQuotes (params?: {}): Promise<implicitReturnType>;
    privateGetRfqTrades (params?: {}): Promise<implicitReturnType>;
    privateGetRfqPublicTrades (params?: {}): Promise<implicitReturnType>;
    privateGetCopytradingCurrentSubpositions (params?: {}): Promise<implicitReturnType>;
    privateGetCopytradingSubpositionsHistory (params?: {}): Promise<implicitReturnType>;
    privateGetCopytradingInstruments (params?: {}): Promise<implicitReturnType>;
    privateGetCopytradingProfitSharingDetails (params?: {}): Promise<implicitReturnType>;
    privateGetCopytradingTotalProfitSharing (params?: {}): Promise<implicitReturnType>;
    privateGetCopytradingUnrealizedProfitSharingDetails (params?: {}): Promise<implicitReturnType>;
    privateGetTradingBotGridOrdersAlgoPending (params?: {}): Promise<implicitReturnType>;
    privateGetTradingBotGridOrdersAlgoHistory (params?: {}): Promise<implicitReturnType>;
    privateGetTradingBotGridOrdersAlgoDetails (params?: {}): Promise<implicitReturnType>;
    privateGetTradingBotGridSubOrders (params?: {}): Promise<implicitReturnType>;
    privateGetTradingBotGridPositions (params?: {}): Promise<implicitReturnType>;
    privateGetTradingBotGridAiParam (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSetPositionMode (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSetLeverage (params?: {}): Promise<implicitReturnType>;
    privatePostAccountPositionMarginBalance (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSetGreeks (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSetIsolatedMode (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSetRiskOffsetType (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSimulatedMargin (params?: {}): Promise<implicitReturnType>;
    privatePostAccountBorrowRepay (params?: {}): Promise<implicitReturnType>;
    privatePostAccountQuickMarginBorrowRepay (params?: {}): Promise<implicitReturnType>;
    privatePostAccountActivateOption (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSetAutoLoan (params?: {}): Promise<implicitReturnType>;
    privatePostAccountSubaccountSetLoanAllocation (params?: {}): Promise<implicitReturnType>;
    privatePostAssetTransfer (params?: {}): Promise<implicitReturnType>;
    privatePostAssetWithdrawal (params?: {}): Promise<implicitReturnType>;
    privatePostAssetWithdrawalLightning (params?: {}): Promise<implicitReturnType>;
    privatePostAssetCancelWithdrawal (params?: {}): Promise<implicitReturnType>;
    privatePostAssetConvertDustAssets (params?: {}): Promise<implicitReturnType>;
    privatePostTradeOrder (params?: {}): Promise<implicitReturnType>;
    privatePostTradeBatchOrders (params?: {}): Promise<implicitReturnType>;
    privatePostTradeCancelOrder (params?: {}): Promise<implicitReturnType>;
    privatePostTradeCancelBatchOrders (params?: {}): Promise<implicitReturnType>;
    privatePostTradeAmendOrder (params?: {}): Promise<implicitReturnType>;
    privatePostTradeAmendBatchOrders (params?: {}): Promise<implicitReturnType>;
    privatePostTradeAmendAlgos (params?: {}): Promise<implicitReturnType>;
    privatePostTradeClosePosition (params?: {}): Promise<implicitReturnType>;
    privatePostTradeOrderAlgo (params?: {}): Promise<implicitReturnType>;
    privatePostTradeCancelAlgos (params?: {}): Promise<implicitReturnType>;
    privatePostTradeCancelAdvanceAlgos (params?: {}): Promise<implicitReturnType>;
    privatePostUsersSubaccountDeleteApikey (params?: {}): Promise<implicitReturnType>;
    privatePostUsersSubaccountModifyApikey (params?: {}): Promise<implicitReturnType>;
    privatePostUsersSubaccountApikey (params?: {}): Promise<implicitReturnType>;
    privatePostUsersSubaccountSetTransferOut (params?: {}): Promise<implicitReturnType>;
    privatePostAssetSubaccountTransfer (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdCreateSubaccount (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdDeleteSubaccount (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdSetSubaccountLevel (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdSetSubaccountFeeRate (params?: {}): Promise<implicitReturnType>;
    privatePostAssetBrokerNdSubaccountDepositAddress (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdSubaccountApikey (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdSubaccountDeleteApikey (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdSubaccountModifyApikey (params?: {}): Promise<implicitReturnType>;
    privatePostBrokerNdRebatePerOrders (params?: {}): Promise<implicitReturnType>;
    privatePostFinanceStakingDefiPurchase (params?: {}): Promise<implicitReturnType>;
    privatePostFinanceStakingDefiRedeem (params?: {}): Promise<implicitReturnType>;
    privatePostFinanceStakingDefiCancel (params?: {}): Promise<implicitReturnType>;
    privatePostFinanceSavingsPurchaseRedempt (params?: {}): Promise<implicitReturnType>;
    privatePostFinanceSavingsSetLendingRate (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCreateRfq (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCancelRfq (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCancelBatchRfqs (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCancelAllRfqs (params?: {}): Promise<implicitReturnType>;
    privatePostRfqExecuteQuote (params?: {}): Promise<implicitReturnType>;
    privatePostRfqMakerInstrumentSettings (params?: {}): Promise<implicitReturnType>;
    privatePostRfqMmpReset (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCreateQuote (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCancelQuote (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCancelBatchQuotes (params?: {}): Promise<implicitReturnType>;
    privatePostRfqCancelAllQuotes (params?: {}): Promise<implicitReturnType>;
    privatePostCopytradingAlgoOrder (params?: {}): Promise<implicitReturnType>;
    privatePostCopytradingCloseSubposition (params?: {}): Promise<implicitReturnType>;
    privatePostCopytradingSetInstruments (params?: {}): Promise<implicitReturnType>;
    privatePostTradingBotGridOrderAlgo (params?: {}): Promise<implicitReturnType>;
    privatePostTradingBotGridAmendOrderAlgo (params?: {}): Promise<implicitReturnType>;
    privatePostTradingBotGridStopOrderAlgo (params?: {}): Promise<implicitReturnType>;
    privatePostTradingBotGridWithdrawIncome (params?: {}): Promise<implicitReturnType>;
    privatePostTradingBotGridComputeMarginBalance (params?: {}): Promise<implicitReturnType>;
    privatePostTradingBotGridMarginBalance (params?: {}): Promise<implicitReturnType>;
}
abstract class Exchange extends _Exchange {}

export default Exchange
