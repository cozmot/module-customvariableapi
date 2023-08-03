# magento2-chatgpt

Cozmot Custom_Variable_API Extension for Magento 2 to return Custom Variables value in Rest API.

### POST API
https://magento.test/rest/V2/cozmot/customvariable?storeVariable=banner_1

### API Request on Postman
![alt text](https://github.com/zaheercena/screenshots/blob/5e0dae38ff74453e6f096a41022d0b163502c36b/sc1.png?raw=true)

### Add Custom Variable
![alt text](https://github.com/zaheercena/screenshots/blob/5e0dae38ff74453e6f096a41022d0b163502c36b/sc2.png?raw=true)
#### 1.1 Install

```
composer require cozmot/module-customvariableapi
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

#### 1.2 Upgrade

```
composer update cozmot/module-customvariableapi
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

Run compile if your store in Production mode:

```
php bin/magento setup:di:compile
```

## Version
v1.0.0 Initial Commit
v1.0.1 Initial Code Commit
