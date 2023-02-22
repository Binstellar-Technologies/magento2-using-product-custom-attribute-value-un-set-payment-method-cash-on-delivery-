<?php

namespace Binstellar\PaymentMethod\Plugin\Model\Method;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Store\Model\ScopeInterface;


class Available
{
    protected $cartModel;
    protected $productModel;
    protected $productRepository;
    protected $scopeConfig;
    
    public function __construct(
        \Magento\Checkout\Model\Cart $cartModel,
        \Magento\Catalog\Model\ProductFactory $productModel,
        ProductRepositoryInterface $productRepository,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->cartModel = $cartModel;
        $this->productModel = $productModel;
        $this->productRepository = $productRepository;
        $this->scopeConfig = $scopeConfig;
    }

    public function afterGetAvailableMethods($subject, $result, \Magento\Quote\Api\Data\CartInterface $quote = null)
    {   

        $finalQuote = (!$this->cartModel->getQuote()) ? $this->cartModel->getQuote() : $quote;



        $cartData = $finalQuote->getAllVisibleItems();

        if ($cartData > 0) {
            $unset =  $this->disablecod($cartData);
            if (!empty($unset)) {
                foreach ($result as $key => $_result) {
                    if (in_array($_result->getCode(), $unset)) {
                        unset($result[$key]);
                    }
                }
            }
            return $result;
        }
    }

    public function disablecod ($cartData) {
        $unset = [];
        foreach ($cartData as $item) {
                $id = $item->getProductId();
                $productData = $this->productModel->create()->load($id);
                
                if (!empty($productData->getPurchaseType())) {
                    $purchasetype = strtolower($productData->getPurchaseType());
                    if (($purchasetype != 'purchase')) {
                        $unset[] = 'cashondelivery';
                    }
                }  
                
            }
            return $unset;
    }
}