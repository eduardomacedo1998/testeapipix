<?php 

require __DIR__. './vendor/autoload.php';


use \App\Pix\Payload;

$obPayLoad = (new Payload) -> setPixKey('95991207714')
                                ->setDescription("pagamento do pedido x")
                                   ->setMerchantName("Eduardo Luan")
                                      ->setMerchantCity("Boa vista RR ")
                                          ->setAmount(49,90);
                                           
                                        
                                    
                              


echo '<pre>';

print_r($obPayLoad);

echo '</pre>'; exit;
