import { implicitReturnType } from '../base/types.js';
import { Exchange as _Exchange } from '../base/Exchange.js';
interface Exchange {
    publicGetContractsActive(params?: {}): Promise<implicitReturnType>;
    publicGetContractsSymbol(params?: {}): Promise<implicitReturnType>;
    publicGetTicker(params?: {}): Promise<implicitReturnType>;
    publicGetTickers(params?: {}): Promise<implicitReturnType>;
    publicGetLevel2Snapshot(params?: {}): Promise<implicitReturnType>;
    publicGetLevel2Depth(params?: {}): Promise<implicitReturnType>;
    publicGetLevel2MessageQuery(params?: {}): Promise<implicitReturnType>;
    publicGetLevel3Snapshot(params?: {}): Promise<implicitReturnType>;
    publicGetTradeHistory(params?: {}): Promise<implicitReturnType>;
    publicGetInterestQuery(params?: {}): Promise<implicitReturnType>;
    publicGetIndexQuery(params?: {}): Promise<implicitReturnType>;
    publicGetMarkPriceSymbolCurrent(params?: {}): Promise<implicitReturnType>;
    publicGetPremiumQuery(params?: {}): Promise<implicitReturnType>;
    publicGetFundingRateSymbolCurrent(params?: {}): Promise<implicitReturnType>;
    publicGetTimestamp(params?: {}): Promise<implicitReturnType>;
    publicGetStatus(params?: {}): Promise<implicitReturnType>;
    publicGetKlineQuery(params?: {}): Promise<implicitReturnType>;
    publicPostBulletPublic(params?: {}): Promise<implicitReturnType>;
    privateGetAccountOverview(params?: {}): Promise<implicitReturnType>;
    privateGetTransactionHistory(params?: {}): Promise<implicitReturnType>;
    privateGetOrders(params?: {}): Promise<implicitReturnType>;
    privateGetStopOrders(params?: {}): Promise<implicitReturnType>;
    privateGetRecentDoneOrders(params?: {}): Promise<implicitReturnType>;
    privateGetOrdersOrderId(params?: {}): Promise<implicitReturnType>;
    privateGetFills(params?: {}): Promise<implicitReturnType>;
    privateGetOpenOrderStatistics(params?: {}): Promise<implicitReturnType>;
    privateGetPosition(params?: {}): Promise<implicitReturnType>;
    privateGetPositions(params?: {}): Promise<implicitReturnType>;
    privateGetFundingHistory(params?: {}): Promise<implicitReturnType>;
    privateGetMarginTypeQuery(params?: {}): Promise<implicitReturnType>;
    privatePostOrders(params?: {}): Promise<implicitReturnType>;
    privatePostBatchOrders(params?: {}): Promise<implicitReturnType>;
    privatePostPositionMarginAutoDepositStatus(params?: {}): Promise<implicitReturnType>;
    privatePostPositionMarginDepositMargin(params?: {}): Promise<implicitReturnType>;
    privatePostBulletPrivate(params?: {}): Promise<implicitReturnType>;
    privatePostMarginTypeChange(params?: {}): Promise<implicitReturnType>;
    privateDeleteOrdersOrderId(params?: {}): Promise<implicitReturnType>;
    privateDeleteOrders(params?: {}): Promise<implicitReturnType>;
    privateDeleteStopOrders(params?: {}): Promise<implicitReturnType>;
}
declare abstract class Exchange extends _Exchange {
}
export default Exchange;
