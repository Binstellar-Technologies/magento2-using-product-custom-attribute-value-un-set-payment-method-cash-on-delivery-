## Magento2 Using product custom attribute value un-set payment method(e.g. Cash On Delivery)

> Magento2 an open-source e-commerce platform written in PHP.

&nbsp;
&nbsp;

> In this extension we are going to see how can we disable payment method like Cash On Delivery(COD) based on custom product attribute value 

&nbsp;
&nbsp;

> In this extension, we have created a custom attribute named Purchase Type & set the condition that if purchase type value is purchase then disable the payment method named Cash On Delivery

&nbsp;
&nbsp;


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/Paymentmethod
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Paymentmethod
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush

&nbsp;
&nbsp;

<h5> Before adding product in cart </h5>
<kbd>

![image1](https://user-images.githubusercontent.com/123800304/218933031-cab5e382-0f41-457c-9d7b-b982cb359d38.png)


</kbd>

&nbsp;
&nbsp;

<h5> After adding product in cart </h5>
<kbd>

![image2](https://user-images.githubusercontent.com/123800304/218933050-8d23f703-367b-4a07-968a-385e4049fcc4.png)


</kbd>

&nbsp;
&nbsp;

<a href="https://docs.google.com/document/d/1m4gsgxFOxCU2Rgd55Cqo6OR7M897WYGegM8kxaGzAJw/edit?usp=sharing">Magento2 Using product custom attribute value un-set payment method(e.g. Cash On Delivery)</a>
## Note : We have tested this option in Magento ver. 2.4.5-p1
