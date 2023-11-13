<?php 

namespace App\Pix;


class Payload{
    /**
   * IDs do Payload do Pix
   * @var string
   */
  const ID_PAYLOAD_FORMAT_INDICATOR = '00';
  const ID_MERCHANT_ACCOUNT_INFORMATION = '26';
  const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = '00';
  const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = '01';
  const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = '02';
  const ID_MERCHANT_CATEGORY_CODE = '52';
  const ID_TRANSACTION_CURRENCY = '53';
  const ID_TRANSACTION_AMOUNT = '54';
  const ID_COUNTRY_CODE = '58';
  const ID_MERCHANT_NAME = '59';
  const ID_MERCHANT_CITY = '60';
  const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = '62';
  const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = '05';
  const ID_CRC16 = '63';

// Chave PIX pode ser qualquer chave, tipo: String 

  private $pixkey;

// descrição do pagamento 

  private $description;
 
// Nome do titular da conta 

  private $merchantName;

// cidade do titular da conta 

  private $MerchantCity;

// id da transação pix

 private $txid;

// Valor da transação 

 private  $Amount;


//         Metodo responsavel por definir o valor de pixkey


 public function setPixKey($pixkey){

    $this -> pixkey =  $pixkey;

    return $this;

 }


 public function setDescription($description){

    $this -> description =  $description;

    return $this;

 }


 public function setMerchantName($merchantName){

    $this -> merchantName =  $merchantName;

    return $this;

 }

 public function setMerchantCity($MerchantCity){

    $this -> MerchantCity  =  $MerchantCity;

    return $this;

 }

 public function setTxid($txid){

    $this -> txid =  $txid;

    return $this;

 }


 public function setAmount($Amount){

    $this -> Amount = (string) number_format($Amount,2, '.' , '') ;

    return $this;

 }




  

 

 



}