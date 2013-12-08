Magento Optimized Backend Login
===============================

* Sets the autocomplete html form attribute depending on the environment. (Allows you to store the password in the browser during development)
* Show Magento logo: yes/no
* Setting a custom background color
* Show "Forgot your Password" link: yes/no
* Switch on minimalistic login & forgotpassword form with even minimalistic captcha (no JS will be loaded)
* Display optionally store owner logo in login form
* Adds accidentally more security to the Magento CE 1.7 and EE 1.12 login form

This module is only for the Magento backend. All options are configurable in the backend configuration developer section.

Installation Instructions
-------------------------
1. Install modman from https://github.com/colinmollenhour/modman
2. Switch to Magento root folder
3. `modman init`
4. `modman clone git://github.com/SchumacherFM/Magento-OptimizedBackendLogin.git`

Configuration
-------------

Please navigate to System -> Configuration -> Developer -> Optimized Backend Login

About
-----
- Key: SchumacherFM_OptBeLogin
- Current Version 1.1.1
- [Download tarball](https://github.com/SchumacherFM/Magento-OptimizedBackendLogin/tags)

Compatibility
-------------
- Magento >= 1.7
- Magento EE >= 1.12
- php >= 5.2.0

Not tested with previous versions ... but could work.

Support / Contribution
----------------------

Report a bug using the issue tracker or send us a pull request.

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Author
------

[Cyrill Schumacher](https://github.com/SchumacherFM)

[My pgp public key](http://www.schumacher.fm/cyrill.asc)
