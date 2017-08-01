<?php

class AlipayTradeService {
  public function wapPay($total_amount) {
    return "用支付宝支持： $total_amount";
  }
}

interface PaymentAdapter {
  public function pay($amount);
}

class AlipayAdapter implements PaymentAdapter {
  private $alipay;

  public function __construct(AlipayTradeService $alipay) {
    $this-> alipay = $alipay;
  }

  public function pay($amount) {
    return $this->alipay->wapPay($amount);
  }
}

// $payment = new AlipayTradeService();
// print $payment->wappay(599);

$payment  = new AlipayAdapter(new AlipayTradeService());
print $payment->pay(599);
