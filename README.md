[![Latest Stable Version](https://poser.okvpn.org/julio101290/boilerplatecfdielectronicseries/v/stable)](https://packagist.org/packages/julio101290/boilerplatecfdielectronicseries) [![Total Downloads](https://poser.okvpn.org/julio101290/boilerplatecfdielectronicseries/downloads)](https://packagist.org/packages/julio101290/boilerplatecfdielectronicseries) [![Latest Unstable Version](https://poser.okvpn.org/julio101290/boilerplatecfdielectronicseries/v/unstable)](https://packagist.org/packages/julio101290/boilerplatecfdielectronicseries) [![License](https://poser.okvpn.org/julio101290/boilerplatecfdielectronicseries/license)](https://packagist.org/packages/julio101290/boilerplatecfdielectronicseries)

## CodeIgniter 4 Boilerplate CFDI Electronic Series
Library for the administration of CRUD CFDI electronic series for invoices, credit notes, payments etc.

## Requirements
* PhpCfdi\SatCatalogos
* julio101290/boilerplatelog
* hermawan/codeigniter4-datatables
* phpcfdi/cfditopdf
* phpcfdi/cfdi-to-json"
* phpcfdi/xml-cancelacion

## Installation

### Run commands
	
 	composer require phpcfdi/sat-catalogos

   	composer require hermawan/codeigniter4-datatables

    composer require julio101290/boilerplatelog

	composer require julio101290/boilerplatecompanies

  	composer require julio101290/boilerplatestorages

	composer require julio101290/boilerplatetypesmovement

	composer require julio101290/boilerplatequotes

	composer require julio101290/boilerplatecfdielectronicseries


### Run command for migration and seeder

	php spark boilerplatecompanies:installcompaniescrud

 	php spark boilerplatelog:installlog

  	php spark boilerplatestorages:installstorages

	php spark boilerplatetypesmovement:installtypesmovement

	php spark boilerplatequotes:installquotes
	

# Make the Menu, Example

![image](https://github.com/user-attachments/assets/e4a13d86-c714-4237-b29e-adb5616b7283)



# Ready

![image](https://github.com/user-attachments/assets/34038a0e-533b-466e-bd4d-21ee439dad05)



Usage
-----
You can find how it works with the read code routes, controller and views etc. Finnally... Happy Coding!

Changelog
--------
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

Contributing
------------
Contributions are very welcome.

License
-------

This package is free software distributed under the terms of the [MIT license](LICENSE.md).
