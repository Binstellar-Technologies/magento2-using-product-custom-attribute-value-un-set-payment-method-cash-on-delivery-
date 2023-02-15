## Magento2 Using product custom attribute value un-set payment method(e.g. Cash On Delivery)

> Magento2 an open-source e-commerce platform written in PHP.

> In this extension we are going to see how can we disable payment method like Cash On Delivery(COD) based on custom product attribute value 

> In this extension, we have created a custom attribute named Purchase Type & set the condition that if purchase type value is purchase then disable the payment method named Cash On Delivery


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/Paymentmethod
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Paymentmethod
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1