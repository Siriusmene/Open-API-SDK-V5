from .client import Client
from .consts import *


class BrokerAPI(Client):
    def __init__(self, api_key, api_secret_key, passphrase, use_server_time=False, flag='1'):
        Client.__init__(self, api_key, api_secret_key, passphrase, use_server_time, flag)

    def broker_info(self):
        params = {}
        return self._request_with_params(GET, BROKER_INFO, params)

    def create_subaccount(self, subAcct='', label='', clientIP='',mainAcct=''):
        params = {'subAcct': subAcct, 'label': label, 'clientIP':clientIP,'mainAcct':mainAcct}
        return self._request_with_params(POST, CREATE_SUBACCOUNT, params)

    def delete_subaccount(self, subAcct=''):
        params = {'subAcct': subAcct}
        return self._request_with_params(POST, DELETE_SUBACCOUNT, params)

    def subaccount_info(self, subAcct='', page='', limit='', uid=''):
        params = {'subAcct': subAcct, 'page': page, 'limit': limit, 'uid':uid}
        return self._request_with_params(GET, SUBACCOUNT_INFO, params)

    def subaccount_trade_fee(self, subAcct='', page='', limit='', uid=''):
        params = {'subAcct': subAcct, 'page': page, 'limit': limit, 'uid':uid}
        return self._request_with_params(GET, SUBACCOUNT_TRADE_FEE, params)

    def set_subaccount_level(self, subAcct='', acctLv=''):
        params = {'subAcct': subAcct, 'acctLv': acctLv}
        return self._request_with_params(POST, SET_SUBACCOUNT_LEVEL, params)

    def set_subaccount_fee_rate(self, subAcct='', instType='', chgType='', chgTaker='',
                                chgMaker='', effDate='', mgnType='',quoteCcyType = ''):
        params = {'subAcct': subAcct, 'instType': instType, 'chgType': chgType, 'chgTaker': chgTaker,
                  'chgMaker':chgMaker, 'effDate':effDate, 'mgnType':mgnType, 'quoteCcyType':quoteCcyType}
        return self._request_with_params(POST, SET_SUBACCOUNT_FEE_REAT, params)

    def subaccount_deposit_address(self, subAcct='', ccy='', chain='', addrType='', to=''):
        params = {'subAcct': subAcct, 'ccy': ccy, 'chain': chain, 'addrType': addrType, 'to': to}
        return self._request_with_params(POST, SUBACCOUNT_DEPOSIT_ADDRESS, params)

    def subaccount_deposit_history(self, subAcct = '', ccy = '', txId = '', state = '', after = '', before = '', limit = ''):
        params = {'subAcct': subAcct, 'ccy': ccy, 'txId': txId, 'state': state, 'after': after, 'before': before, 'limit':limit}
        return self._request_with_params(GET, SUBACCOUNT_DEPOSIT_HISTORY, params)

    def rebate_daily(self, subAcct = '', begin = '', end = '', page = '', limit = '',
                     beginTime = '', endTime = ''):
        params = {'subAcct': subAcct, 'begin': begin, 'end': end, 'page': page, 'limit': limit,
                  'beginTime':beginTime, 'endTime': endTime}
        return self._request_with_params(GET, REBATE_DAILY, params)

    def dma_create_apikey(self, subAcct = '', label = '', passphrase = '', ip = '', perm = ''):
        params = {'subAcct': subAcct, 'label': label, 'passphrase': passphrase, 'ip': ip, 'perm': perm}
        return self._request_with_params(POST, DMA_CREAET_APIKEY, params)

    def dma_select_apikey(self, subAcct = '', apiKey = ''):
        params = {'subAcct': subAcct, 'apiKey': apiKey}
        return self._request_with_params(GET, DMA_SELECT_APIKEY, params)

    def dma_modify_apikey(self, subAcct = '', apiKey = '', label = '', perm = '', ip = ''):
        params = {'subAcct': subAcct, 'apiKey': apiKey, 'label': label, 'perm': perm, 'ip': ip}
        return self._request_with_params(POST, DMA_MODIFY_APIKEY, params)

    def dma_delete_apikey(self, subAcct = '', apiKey = ''):
        params = {'subAcct': subAcct, 'apiKey': apiKey}
        return self._request_with_params(POST, DMA_DELETE_APIKEY, params)

    def rebate_per_orders(self, begin = '', end = ''):
        params = {'begin': begin, 'end': end}
        return self._request_with_params(POST, REBATE_PER_ORDERS, params)

    def get_rebate_per_orders(self, type = '', begin = '', end = ''):
        params = {'type': type, 'begin': begin, 'end': end}
        return self._request_with_params(GET, GET_REBATE_PER_ORDERS, params)

    def modify_subaccount_deposit_address(self, subAcct = '', ccy = '', chain = '', addr = '', to = ''):
        params = {'subAcct': subAcct, 'ccy': ccy, 'chain': chain, 'addr': addr, 'to': to}
        return self._request_with_params(POST, MODIFY_SUBACCOUNT_DEPOSIT_ADDRESS, params)

    def nd_subaccount_withdrawal_history(self, subAcct = '', ccy = '', wdId = '', clientId = '', txId = '', type = '', state = '', after = '', before = '', limit = ''):
        params = {'subAcct': subAcct, 'ccy': ccy, 'wdId': wdId, 'clientId': clientId, 'txId': txId, 'type': type, 'state': state, 'after': after, 'before': before, 'limit': limit}
        return self._request_with_params(GET, ND_SUBACCOUNT_WITHDRAWAL_HISTORY, params)

    # POST /api/v5/broker/nd/set-subaccount-assets
    def set_subaccount_assets(self, subAcct = '', ccy = ''):
        params = {'subAcct': subAcct, 'ccy': ccy,}
        return self._request_with_params(POST, SET_SUBACCOUNT_ASSETS, params)

    # POST /api/v5/broker/nd/set-subaccount-assets
    def report_subaccount_ip(self, subAcct, clientIP):
        params = {'subAcct': subAcct, 'clientIP': clientIP,}
        return self._request_with_params(POST, R_SACCOUNT_IP, params)


    def if_rebate(self, apiKey='',uid='',subAcct='',):
        params = {'subAcct': subAcct, 'apiKey': apiKey,'uid': uid,}
        return self._request_with_params(GET, IF_REBATE, params)

